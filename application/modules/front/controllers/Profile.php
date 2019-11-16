<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){ 
		parent::__construct();
		$this->load->helper('suvi'); 
		$this->load->library('user_agent');
	}

	public function index(){
		$this->about_us();
		/* $data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/profile_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE); */
		
	}
	public function about_us(){
		$lang = $this->session->userdata('SS_LANG');
		
		$this->load->model('Profile_model');
		$detailMenu = $this->Profile_model->menuProfile($lang);
		
		$data['title'] = "SERA - Serasi Auto Raya | ".$detailMenu['menu_name'];
		$data['submenu'] = $this->Profile_model->submenuProfile($lang);
		$data['activeMenu'] = 'about-us';
		$data['lang'] = $lang;
		
		$data['bg'] = $this->Profile_model->contentDetailProfile(21, $lang); ## BG
		$data['us'] = $this->Profile_model->contentDetailProfile(1, $lang); ## Siapa Kami | Who We Are
		$data['video'] = $this->Profile_model->contentDetailProfile(2, $lang); ## VIDEO

		$this->load->view('header_front', $data, FALSE);	
			$this->load->view('Profile/about-us', $data, FALSE);
			$this->load->view('Profile/footerProfile', $data, FALSE);
		$this->load->view('footer_front', $data, FALSE);
	}
	public function history(){

		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/profile_history_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
	}
	public function vision(){

		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/vision_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
	}
	public function value(){

		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/corp_value_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
	}
	public function inovation(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/inovation_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
	}
	public function business(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/business_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
		
	}
	public function management(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/management_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
		
	}
	public function awards(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/awards_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
		
	}
	public function csr(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/csr', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
		
	}
	public function safety(){
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Profile/safety_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
		
	}

	function _remap($method){
		if ($method == 'index') $method = 'about-us';
		$lang = $this->uri->segment(1);
		$thisLang = $this->session->userdata('SS_LANG');

		/* if ($method == 'about_us-id') {
			$method = 'about-us';
			$lang = 'id';
		} else if ($method == 'about_us-en') {
			$method = 'about-us';
			$lang = 'en';
		} */
		if (strtolower($lang) != 'en' && strtolower($lang) != 'id'){
			// echo '1';
			if ($this->session->userdata('SS_LANG') != ''){
				$lang = $this->session->userdata('SS_LANG');
			} else {
				$lang = strtoupper('EN');
				$this->session->set_userdata('SS_LANG', $lang);
			}
			redirect(base_url(strtolower($lang).'/profile-'.$method.'.html'));
		}
		else if ($this->session->userdata('SS_LANG') == '' || $lang != $thisLang){
			$lang = strtoupper($lang);
			$this->session->set_userdata('SS_LANG', $lang);
			// echo '2';
		}
		else {
			$lang = $this->session->userdata('SS_LANG');
		}
		
		
		// video_youtube('https://www.youtube.com/watch?v=L8j4ZvARBO8');
		
		// $fileView = substr($method,0,strripos($method,'.'));
		$fileView = $method;
		$fileView = ($fileView == '' || $fileView == 'index') ? 'about-us' : $fileView;
		
		$this->load->model('Profile_model');
		$detailMenu = $this->Profile_model->menuProfile($lang);
		
		$data['submenu'] = $this->Profile_model->submenuProfile($lang);
		$data['activeMenu'] = $fileView;
		$data['lang'] = $lang;
		
		## ambil menu_detail_id berdasarkan slug dan ID dan lang
		$menuDetail = $this->Profile_model->menuDetail($fileView, $lang);
		$data['menuDetail'] = $menuDetail;
		$allContent = $this->Profile_model->contentSubmenu($menuDetail['menu_detail_id'], $lang);
		$data['allContent'] = $allContent;
		
		## title 
		$data['title'] = "SERA - Serasi Auto Raya | ".@$detailMenu['menu_name']." | ".@$menuDetail['title'];

		// Berita
		$this->load->model('Home_model');
		//$data['beritacsr']=$this->Home_model->getNewsMedia("$lang",11); 
		$data['beritacsr']=$this->Home_model->getNewsCSR("$lang",11);
		
		if ($fileView == 'about-us'){
			$data['bg'] = $this->Profile_model->contentDetailProfile(21, $lang); ## BG
			$data['us'] = $this->Profile_model->contentDetailProfile(1, $lang); ## Siapa Kami | Who We Are
			$data['video'] = $this->Profile_model->contentDetailProfile(2, $lang); ## VIDEO

			$this->load->view('header_front', $data, FALSE);	
				$this->load->view('Profile/'.$fileView, $data, FALSE);
				$this->load->view('Profile/footerProfile', $data, FALSE);
			$this->load->view('footer_front', $data, FALSE);
		}
		else if ($method != 'index'){
			
			
			$SS_ROOT = dirname(__FILE__);
			
			$checkFileView = $SS_ROOT . SS_DS . '..'.SS_DS . 'views'.SS_DS.'Profile'.SS_DS. $fileView . '.php';
			if(file_exists($checkFileView)){
				// echo 'ada';
				$this->load->view('header_front', $data, FALSE);
				$this->load->view('Profile/'.$fileView, $data, FALSE);
				$this->load->view('Profile/footerProfile', $data, FALSE);
				$this->load->view('footer_front', $data, FALSE);
			}
			else {
				redirect(base_url('profile'));
			}
		}
		else{
			$fileView = 'about-us';
			$data['bg'] = $this->Profile_model->contentDetailProfile(21, $lang); ## BG
			$data['us'] = $this->Profile_model->contentDetailProfile(1, $lang); ## Siapa Kami | Who We Are
			$data['video'] = $this->Profile_model->contentDetailProfile(2, $lang); ## VIDEO

			$this->load->view('header_front', $data, FALSE);	
				$this->load->view('Profile/'.$fileView, $data, FALSE);
				$this->load->view('Profile/footerProfile', $data, FALSE);
			$this->load->view('footer_front', $data, FALSE);
			
			// echo 'salah';
			// $this->about_us();
		}
		
	}

}

/* End of file Profile.php */
/* Location: ./application/modules/front/controllers/Profile.php */