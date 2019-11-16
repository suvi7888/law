<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index(){
		$this->load->library('form_validation');

		$lang = $this->uri->segment(1);
		$thisLang = $this->session->userdata('SS_LANG');
		if ($this->session->userdata('SS_LANG') == ''){
			
			if (strtolower($lang) == 'en' || strtolower($lang) == 'id')
				$lang = strtoupper($lang);
			else
				$lang = strtoupper('EN');
			$this->session->set_userdata('SS_LANG', $lang);
		}
		else if (!in_array($lang, array('en','id', 'EN','ID')) && $this->session->userdata('SS_LANG') == ''){
			redirect(base_url('en/contact.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/contact.html'));
			}
			else if (strtolower($lang) == 'en' || strtolower($lang) == 'id'){
				$lang = strtoupper($lang);
				$this->session->set_userdata('SS_LANG', $lang);
			}
			else {
				$lang = $this->session->userdata('SS_LANG');
			}
		}
		
		$bahasa = $this->session->userdata('SS_LANG');

		
		$this->load->model('Kantor_model');
		
		$this->load->library('googlemaps');                
		$config['center'] = '-6.149745897492707, 106.88505291938782';
		// $config['center'] = '-6.9302698107489, 107.61616140604';
		$config['zoom'] = '17';
		$config['map_height'] = 600;
		$this->googlemaps->initialize($config);
		
		$arrKota = array();
		$arrKotaGrup = array();
		$listKantor = $this->Kantor_model->listKantor();
		foreach($listKantor as $row){
			$kota = $row['kota'];
			$nama_grup = $row['nama_grup'];
			$kantor_grup = $row['kantor_grup'];
			
			if (!in_array($kota, $arrKota)) {
				$arrKota[] = $kota;
				$arrKotaGrup[$kota]['nama'][] = $nama_grup;
				$arrKotaGrup[$kota]['id'][] = $kantor_grup;
			}
			else{
				if (!in_array($nama_grup, $arrKotaGrup[$kota])) {
					$arrKotaGrup[$kota]['nama'][] = $nama_grup;
					$arrKotaGrup[$kota]['id'][] = $kantor_grup;
				}
			}
			
			$marker = array();
			$marker['position'] = trim($row['lat']).', '.trim($row['long']);
			$marker['infowindow_content'] = trim($row['nama_grup'].' '.$row['nama_kantor']).'<hr>'.trim($row['alamat']);
			$this->googlemaps->add_marker($marker);
			
		}
		
		asort($arrKota);
		foreach($arrKota as $key => $val)
			$allArrKota[] = $val;
			
		$data['arrKota'] = $allArrKota;
		$data['arrKotaGrup'] = $arrKotaGrup;
		$data['listKantor'] = $this->Kantor_model->listHeadKantor();
		
		$data['map'] = $this->googlemaps->create_map();
		
		$data['title'] = "SERA - Serasi Auto Raya";


		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telp', 'trim|required'); 
		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'trim|required'); 
		$this->form_validation->set_rules('subjek', 'Subject', 'trim|required');
        // EN_judulberita EN_isiberita
		
		
		$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';

		$secret_key = '6LeYAxkUAAAAAFPyvkuJG9MFSKCTTtxbNxw-gpAM'; 
		 	   
				  
				
		if ($this->form_validation->run() == FALSE) {  
		
				 
				

			if ($_POST) {
				
				//$nama = isset($_POST['nama']) ? trim(htmlentities($_POST['nama'])):'';
				//$komentar = isset($_POST['komentar']) ? trim(htmlentities($_POST['komentar'])):'';
				/* untuk menampung variabel post dari captcha google adalah g-recaptcha-reponse */
				
				//$error = 'Gagal kirim form: periksa nama, komentar dan captcha nya';
			
				//else {
				  // echo $error;
				//}


					
					  $this->session->set_flashdata('pesan', '<div class="alert alert-warning"> Ada yang belum dilengkapi. </div>');
			}

		} elseif($this->form_validation->run() == TRUE) {
			//if ($captcha != '') {
			 
					  //echo $error; 
					 
						$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telepon = $_POST['telepon'];
			$pekerjaan = $_POST['pekerjaan'];
			$perusahaan = $_POST['perusahaan'];
			$kategori = $_POST['kategori'];
			$subjek = $_POST['subjek']; 

			$insert = array(
				'nama' => $nama,
				'email' => $email,
				'telepon' => $telepon,
				'pekerjaan' => $pekerjaan,
				'perusahaan' => $perusahaan,
				'kategori' => $kategori,
				'subjek' => $subjek,
				'date'	=> date('Y-m-d H:i:s')
				);
			$this->db->insert('contact_form', $insert);
						$this->session->set_flashdata('pesan', '<div class="alert alert-success"> Terimakasih telah menghubungi kami. </div>');
				 redirect('contact','refresh');
		}  
		$data['lang'] = $lang; 
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Kontak/contact_front', $data, FALSE);	
		// $this->load->view('subfooter_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);	
	}

	function getGrup(){
		$this->load->model('Kantor_model');

		$kota = $_POST['kota'];
		$listData = $this->Kantor_model->getGrup($kota);
		echo json_encode(array('dataGrup' =>$listData));
	}
	function getKota(){
		$this->load->model('Kantor_model');

		$kantor_grup = $_POST['kantor_grup'];
		$listData = $this->Kantor_model->getKota($kantor_grup);
		echo json_encode(array('dataKota' =>$listData));
	}
	function getKantor(){
		$this->load->model('Kantor_model');

		$kota = $_POST['kota'];
		$kantor_grup = $_POST['kantor_grup'];

		$idx=0;
		$listData = $this->Kantor_model->getKantor($kota, $kantor_grup);
		foreach($listData as $row){
			$idx++;
			echo '<div class="result-list '.($idx % 2 == 0  ? '' : 'bg-gray').'">
			<h4>
				<a href="javascript:void(0)" onclick="newLocation('.$row['lat'].','.$row['long'].')" style="margin:0; padding:0;">
					<b class="text-purple">'.$row['nama_grup'].' '.@$row['nama_kantor'].'</b>
				</a>
			</h4>
			<p>'.$row['alamat'].'</p>
			<p>'.$row['tlp'].'</p>
		</div>';
	}
}

}

/* End of file Contact.php */
/* Location: ./application/modules/front/controllers/Contact.php */