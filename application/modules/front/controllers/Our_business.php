<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_business extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('slug');
	} 

	public function index(){
		$this->load->library('user_agent');
		
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
			redirect(base_url('en/our-business.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/our-business.html'));
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
		
		$menuDetail = $this->Home_model->menuDetailSs(3, $bahasa);
		$data['menuDetail'] = $menuDetail;
		$allContent = $this->Home_model->contentSubmenu($menuDetail['menu_detail_id'], $bahasa);
		$data['allContent'] = $allContent;
		  
		$data['title'] = 'Our Business - SERA - Serasi Auto Raya';
		$data['lang'] = $bahasa;
		
		if ($this->agent->is_mobile()){
			$this->load->view('Our/our_bisnis_front_mobile', $data, FALSE);
		} else {
			$this->load->view('Our/our_bisnis_front_ss', $data, FALSE);
		}
		
	}

}

/* End of file Our_business.php */
/* Location: ./application/modules/front/controllers/Our_business.php */