<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','language'));
		$this->load->library(array('ion_auth','form_validation','pagination'));
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		
		
		###############################
		## END Cek Hak Akses
		// if (!$this->ion_auth->logged_in()){
			// //redirect them to the login page
			// redirect('back/auth/login', 'refresh');
		// } else {
			// $this->load->model('Hak_akses_model');
			// $uri 	=  $this->uri->segment(2);
			// $user 	= $this->ion_auth->user()->row();
			// $this->userid = $user->id; 
			// $cek 	= $this->Hak_akses_model->cekHak($this->userid, $uri);

			// if (!$cek) { 
				// redirect('back/dashboard/','refresh'); 
			// }
		// }
		## END Cek Hak Akses
		###############################
		
		$this->load->model('Website_model');
	}
	
	function index(){
		$data['title'] = 'Website List';
		$data['titlePage'] = 'List';
		$data['page'] = 'Website/list';
		
		$this->load->view('front/kepalaadmin',$data);
		$this->load->view('front/sidebaradmin');
		$this->load->view('front/subkepalaadmin');
			$this->load->view('Website/list', $data);
		$this->load->view('front/footeradmin');
		// echo 'masuk';
	}
	function input(){
		$data['title'] = 'Website Add';
		$data['titlePage'] = 'Add';
		$data['page'] = 'Website/form';
		$data['action'] = 'suvi/website/actionForm';
		$this->load->view('templateAdmin',@$data);
	}
	function edit($id_website){
		$data['title'] = 'Website Edit';
		$data['titlePage'] = 'Edit';
		$data['page'] = 'Website/form';
		$data['action'] = 'suvi/website/actionForm/'.$id_website;
		$data['disable'] = 'readonly';
		$data['detail'] = $this->Website_model->detailWebsite($id_website);
		$this->load->view('templateAdmin',@$data);
	}
	
	function actionForm($id_website = null){
		$titlePage = $_POST['titlePage'];
		
		$this->form_validation->set_rules('id_website', 'id_website', 'required');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('base_url', 'base_url', 'required');
		
		if ($this->form_validation->run() == FALSE){
			if ($titlePage == 'Add'){
				$this->session->set_flashdata('itemFlashData','insertGagal');
				$data['title'] = 'Website Add';
				$data['action'] = 'suvi/website/actionForm';
			}
			else if ($titlePage == 'Edit'){
				$this->session->set_flashdata('itemFlashData','updateGagal');
				$data['title'] = 'Website Edit';
				$data['action'] = 'suvi/website/actionForm/'.$id_website;
				$data['disable'] = 'readonly';
				$data['detail'] = $this->Website_model->detailWebsite($id_website);
			}
			
			$data['titlePage'] = $titlePage;
			$data['page'] = 'Website/form';
			$this->load->view('templateAdmin',@$data);
		}
		else {
			$id_website = $_POST['id_website'];
			$title = @$_POST['title'];
			$base_url = $_POST['base_url'];
			
			if ($titlePage == 'Add'){
				$dataInsert = array(
					'id_website' 	=> $id_website,
					'title' => $title,
					'base_url' => @$base_url,
					);
				$insert = $this->Website_model->insertWebsite($dataInsert);
				
				$this->session->set_flashdata('itemFlashData','insertSukses');
				redirect('suvi/website');
			}
			else if ($titlePage == 'Edit'){
				$dataUpdate = array(
					'title' => $title,
					'base_url' => @$base_url,
					);
				$whereUpdate = array('id_website' => $id_website);
				$update = $this->Website_model->updateWebsite($dataUpdate, $whereUpdate);
				
				$this->session->set_flashdata('itemFlashData','updateSukses');
				redirect('suvi/website');
			}
		}
		
	}
	
	
	function ambildata(){
		$listData = $this->Website_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($listData as $d) {
			// $status  = $d['status'];
			// If Status
			// if ($status == '1') $status = "<a class='btn btn-primary btn-xs disabled'> Aktif </a>";
			// else $status = "<a class='btn btn-default btn-xs disabled'> Tidak Aktif </a>";
			// End Status

			$no++;
			$row 	= array(); 
			// $row[] 	= $no;
			$row[] 	= $d['id_website'];
			$row[] 	= $d['title'];
			$row[] 	= $d['base_url'];
			
			// Action 
			$row[] 	=  	"<a href='".site_url('suvi/website/edit/'.$d['id_website'])."' class='btn btn-primary btn-sm'><i class='fa fa-pencil'></i> Edit </a> 
			<a href='".site_url('suvi/website/delete/'.$d['id_website'])."' class='btn btn-danger btn-sm'  onclick=\"return confirm('Are you sure you want to delete this item?');\"> <i class='fa fa-trash'></i> Hapus </a>";

			//anchor('back/category/edit/'.$d->category_id, '<i class="fa fa-pencil"></i> Edit','class="btn btn-primary"')." oke ".anchor('back/category/delete/'.$row->category_id, '<i class="fa fa-trash"></i> Hapus', 'data-confirm="Apakah kamu ingin menghapusnya ?" class="btn btn-danger"'); 
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Website_model->count_all(),
			"recordsFiltered" => $this->Website_model->count_filtered(),
			"data" => $data,
			);
        //output to json format
		echo json_encode($output);
	}
	
}