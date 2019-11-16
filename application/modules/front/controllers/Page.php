<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __contstruct()
	{
		parent::__contstruct();
		$this->load->helper('url');
	}

	public function index($idpage = '', $slugpage = '')
	{
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
			redirect(base_url('en/page/'.$idpage.'/'.$slugpage.'.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/page/'.$idpage.'/'.$slugpage.'.html'));
			}
			else if (strtolower($lang) == 'en' || strtolower($lang) == 'id'){
				$lang = strtoupper($lang);
				$this->session->set_userdata('SS_LANG', $lang);
			}
			else {
				$lang = $this->session->userdata('SS_LANG');
			}
		}
		

		// page/30/orenz-taxi

		$q = $this->db->query("SELECT * from menu_content a
			inner join master_language b on a.language_id = b.language_id
			where menu_detail_id = '19' 
			and content_id='$idpage' and language_name = '$lang' ")->row();




		if ($q) {
			// echo "ada"; 
			// $lang = '';
			// if (strtoupper(@$_GET['lang']) == 'EN' || strtoupper(@$_GET['lang']) == 'ID')
			// 	$this->session->set_userdata('SS_LANG', @$_GET['lang']);
			// else if ($this->session->userdata('SS_LANG') == '') 
			// 	$this->session->set_userdata('SS_LANG', 'EN');
			
			// // $bahasa = $this->session->userdata('SS_LANG');   
			$data = array(
				'title' =>	$q->title.' - PT. Serasi Autoraya' ,
				'news'	=> 	$q,
				'lang'	=>	$lang
				);


			$this->load->view('header_front', $data, FALSE);	
			$this->load->view('Page/bisnis_detail', $data, FALSE);	
			$this->load->view('footer_front', $data, FALSE);	  





		} else {
			redirect(site_url(''),'refresh');
		}

		
	}

}

/* End of file Page.php */
/* Location: ./application/modules/front/controllers/Page.php */