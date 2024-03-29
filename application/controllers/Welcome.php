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
  private function getContent($menuId){
    $arrGroup = [];
    $content = [];
    $list = $this->Menu_content_model->listContent($menuId);
    foreach($list as $row){
      $group = substr($row['position'],0,1);
      if (!in_array($group, $arrGroup)) $arrGroup[] = $group;
      $content[$group][] = $row;
    }
    return [$arrGroup, $content];
  }
  
  
	function _remap($method){
		if ($method == 'index') { 
			$page = 'home'; 
			$menuId = 1;
			$getContent = $this->getContent($menuId);
			$data['arrGroup'] = @$getContent[0];
			$data['content'] = @$getContent[1];
		}
    else if ($method == 'about') { 
			$page = 'about'; 
			$menuId = 2;
			$getContent = $this->getContent($menuId);
			$data['arrGroup'] = @$getContent[0];
			$data['content'] = @$getContent[1];
		}
		else 
			$page = $this->uri->segment(1);
		
		$data['page'] = $page;
		$this->load->view('template', $data);
	}
}
