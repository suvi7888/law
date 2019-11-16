<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{  
		$bahasa = 'EN';
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
			redirect(base_url('en/career.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/career.html'));
			}
			else if (strtolower($lang) == 'en' || strtolower($lang) == 'id'){
				$lang = strtoupper($lang);
				$this->session->set_userdata('SS_LANG', $lang);
			}
			else {
				$lang = $this->session->userdata('SS_LANG');
			}
		}
		

        $bahasa = $lang;
  
  
		$data = array(
			'title' 	=> "Career - Serasi Auto Raya" ,
			'satu'		=> $this->Home_model->getData('46',"$bahasa"), //carousel
			'dua'		=> $this->Home_model->getData('47',"$bahasa"), //carousel
			'tiga'		=> $this->Home_model->getData('48',"$bahasa"), //carousel
			'join'		=> $this->Home_model->getData('55',"$bahasa"), //carousel
			'carousel'		=> $this->Home_model->getData('118',"$bahasa"), //carousel
			'foto'		=> $this->Home_model->getDataResult_Foto('22',"$bahasa"), //carousel

			 );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Karir/karir_front', $data, FALSE);	
		// $this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);	
	}

}

/* End of file Career.php */
/* Location: ./application/modules/front/controllers/Career.php */