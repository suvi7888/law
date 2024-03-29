<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation','pagination'));  
		$this->load->helper(array('url','language')); 
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth')); //delimeter ini. letak di config/ion_auth.php mengacu pada pengaturan diatas

		$this->lang->load('auth'); // bahasa dari library ion auth
		$this->load->model('Tambahan_ion_model'); // tambahan dari model ion auth
		$this->load->model('Language_model'); // model dari modul language
		$this->load->model('Category_model'); // moder dari kategori untuk model kategori
		$this->load->helper('slug_helper');

		$this->load->model('Hak_akses_model');

		###############################
		## END Cek Hak Akses
		/*if (!$this->ion_auth->logged_in()){
			//redirect them to the login page
			redirect('back/auth/login', 'refresh');
		} else {
			$uri 	=  $this->uri->segment(2);
			$user 	= $this->ion_auth->user()->row();
			$this->userid = $user->id; 
			$cek 	= $this->Hak_akses_model->cekHak($this->userid, $uri);

			if (!$cek) { 
				redirect('back/dashboard/','refresh'); 
			}
		}*/
		## END Cek Hak Akses
		###############################
	}




	// index kategoru
	function index()
	{	 
		$data = array(
			'title' => 'Kategori' , );
		$this->load->view('front/kepalaadmin',$data);
		$this->load->view('front/sidebaradmin', $data);
		$this->load->view('front/subkepalaadmin', $data);
		$this->load->view('Category/list', $data);
		$this->load->view('front/footeradmin');
	}
	// end index kategori


	function input(){
		$data = array(
			'title'			=> 'Input Category',
			'listLanguage' 	=> $this->Language_model->listLanguage(array('status' => 1)),
			);

		$this->form_validation->set_rules('category_name', 'category_name', 'required');
		
		if ($this->form_validation->run() == FALSE){
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
				$this->session->set_flashdata('itemFlashData','insertGagal');
			
			$this->load->view('front/kepalaadmin',$data);
			$this->load->view('front/sidebaradmin');
			$this->load->view('front/subkepalaadmin');
			$this->load->view('Category/input',$data);
			$this->load->view('front/footeradmin');
			
		}
		else {
			

			$user = $this->ion_auth->user()->row(); // untuk user 
			$create_date = date("Y-m-d h:i:s");

			// category_id  category_name  status  create_user  update_user  create_date  update_date  language_id  


        			// nilai setting
			$dd 			= $this->db->query("SELECT idkat+1 as nilai FROM settings")->row();
			$idberita 		= $dd->nilai;
			$this->db->query("UPDATE settings SET idkat = '$idberita'");

			$relasi			= $_POST['relasi'];

			// $language_id = @$_POST['language_id']; 
			if ($relasi == 0 || $relasi == '0') {
					$relasi 	= "";
			}

			$category_name = @$_POST['category_name'];
			$status = (int)@$_POST['status'];
			$dataInsert = array( 
				'category_id'	=> $idberita,
				'slugkategori'	=> slug($category_name),
				'category_name' => $category_name,
				'status' 		=> $status,
				'create_user' 	=> $user->id,//@$create_user,
				'relasi'		=> $relasi,
				'create_date' 	=> @$create_date,
				'language_id'	=> 1,
				);

			// echo print_r(@$dataInsert);
			$insert = $this->Category_model->insertCategory($dataInsert); 
			$this->session->set_flashdata('pesan','<div class="alert alert-warning"> Data berhasil ditambahkan. </div>');
			redirect('back/category'); 
		}
		
	}



	function edit($id){
		$data = array(
			'listLanguage' => $this->Language_model->listLanguage(),
			'detail' => $this->Category_model->detailCategory($id),
			);
		
		// set_value('category_name', isset($data['detail']['category_name']) ? $data['detail']['category_name'] : '');
		
		$this->form_validation->set_rules('category_name', 'category_name', 'required');
		if ($this->form_validation->run() == FALSE){
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
				$this->session->set_flashdata('pesan','<div class="alert alert-warning"> Gagal ! </div>');
			
			$this->load->view('front/kepalaadmin', $data);
			$this->load->view('front/sidebaradmin');
			$this->load->view('front/subkepalaadmin');
			$this->load->view('Category/edit',$data);
			$this->load->view('front/footeradmin');
		}
		else {
			$category_id = @$_POST['category_id'];
			$category_name = @$_POST['category_name'];
			$status = (int)@$_POST['status'];
			$dataUpdate = array(
				'category_name' => $category_name,
				'status' => $status,
				'update_user' => @$update_user,
				'update_date' => @$update_date,
				);
			$whereUpdate = array('category_id' => $category_id);
			$update = $this->Category_model->updateCategory($dataUpdate, $whereUpdate);
			$this->session->set_flashdata('pesan','<div class="alert alert-success"> Berhasil </div>');
			redirect('back/category');
		}
		
	}




	// Ajax List



	// keperluan untuk datatable.
	// bisa juga untuk keperluan Aplication Programming Interface
	public function ambildata()
	{
		$list = $this->Category_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $d) {
			$status  = $d->status;
			// If Status
			if ($status == '1') {
				$status = "<a class='btn btn-primary btn-xs disabled'> Aktif </a>";
			} else { $status = "<a class='btn btn-default btn-xs disabled'> Tidak Aktif </a>"; }
			// End Status

			$no++;
			$row 	= array(); 
			$row[]	= $d->category_id;
			$row[] 	= $d->category_name;  
			$row[]	= $status;
			$row[]	= $d->relasi;
			// Action 
			$row[] 	=  	"<a href='".site_url('back/category/edit/'.$d->category_id)."' class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i> Edit </a> 
			<a href='".site_url('back/category/delete/'.$d->category_id)."' class='btn btn-danger btn-xs'  onclick=\"return confirm('Are you sure you want to delete this item?');\"> <i class='fa fa-trash'></i> Hapus </a>";

			//anchor('back/category/edit/'.$d->category_id, '<i class="fa fa-pencil"></i> Edit','class="btn btn-primary"')." oke ".anchor('back/category/delete/'.$row->category_id, '<i class="fa fa-trash"></i> Hapus', 'data-confirm="Apakah kamu ingin menghapusnya ?" class="btn btn-danger"'); 
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Category_model->count_all(),
			"recordsFiltered" => $this->Category_model->count_filtered(),
			"data" => $data,
			);
        //output to json format
		echo json_encode($output);
	}



	// function delete
	public function delete($id='')
	{
		if (!$this->ion_auth->is_admin())
		{ 
			//redirect them to the login page
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning"> Maaf ini bukan hak akses kamu. </div>');
			redirect('back/dashboard', 'refresh');
		} 

		// $ambil 	= $this->Hak_akses_model->getMenuAdmin($id);  

		$ambil = $this->Category_model->detailCategory($id);




		if (isset($id) and $ambil) {

			$dd 	= $ambil['category_id']." || ".$ambil['category_name']." || ".$ambil['status']." || ".$ambil['create_user']." || ".$ambil['update_user']." || ".$ambil['create_date']." || ".$ambil['update_date']." || ".$ambil['language_id']; 


			$namatabel 	= 'master_category';

			$backup = array(
				'namatabel' => "$namatabel",
				'isian'	 	=> $dd,
				'tanggal'	=> date("Y-m-d h:i:s")
				);

			// print_r($backup); 
			/*category_id, category_name, status, create_user, update_user, create_date, 
			update_date, language_id*/
			// $this->db->insert('Table', $object);


			$this->db->insert('log_system',$backup); 


			$this->db->query("DELETE from $namatabel where category_id = '$id' ");
			
			// namatabel, isian, tanggal 

			$this->session->set_flashdata('pesan', '<div class="alert alert-warning"> Berhasil Di Hapus. </div>');
		// echo "Oke";
			redirect('back/category','refresh'); 

		}

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger"> Ada yang keliru. </div>');
		// echo "Oke";
		redirect('back/category','refresh'); 
	}
}
