<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('back/Menu_content_model','Menu_content_model');
		$this->load->model('back/Menu_detail_model','Menu_detail_model');
	}
	
	public function index()
	{
    $menuId = 1;
    $getContent = $this->getContent($menuId);
    $data['arrGroup'][$menuId] = @$getContent[0];
    $data['content'][$menuId] = @$getContent[1];
    
		$this->load->view('single_page', $data);
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
  
}
