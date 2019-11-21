<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('back/Menu_content_model','Menu_content_model');
		$this->load->model('back/Menu_detail_model','Menu_detail_model');
	}
	
	
	public function index()
	{
		$this->load->view('template');
	}
	function _remap($method){
		if ($method == 'index') { 
			$page = 'home'; 
			$menuId = 1;
			
			$arrGroup = [];
			$list = $this->Menu_content_model->listContent($menuId);
			foreach($list as $row){
				$group = substr($row['position'],0,1);
				if (!in_array($group, $arrGroup)) $arrGroup[] = $group;
				$content[$group][] = $row;
			}
			$data['arrGroup'] = $arrGroup;
			$data['content'] = $content;
		}
		else 
			$page = $this->uri->segment(1);
		
		$data['page'] = $page;
		$this->load->view('template', $data);
	}
}
