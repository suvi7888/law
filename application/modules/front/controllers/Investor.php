<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Investor/Investor_report_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);		
	}




	public function corporate_governance()
	{
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Investor/investor_governance', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);		
	}


	public function shareholder()
	{
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Investor/shareholder_front', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);		
	}


	public function secretary()
	{
		$data = array(
			'title' => "SERA - Serasi Auto Raya" , );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Investor/investor_secretary', $data, FALSE);	
		$this->load->view('subfooter_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);		
	}

	function _remap($method){
		if ($method == 'index') $method = 'report';
		$lang = $this->uri->segment(1);
		$thisLang = $this->session->userdata('SS_LANG');

		if (strtolower($lang) != 'en' && strtolower($lang) != 'id'){
			// echo '1';
			if ($this->session->userdata('SS_LANG') != ''){
				$lang = $this->session->userdata('SS_LANG');
			} else {
				$lang = strtoupper('EN');
				$this->session->set_userdata('SS_LANG', $lang);
			}
			redirect(base_url(strtolower($lang).'/investor-'.$method.'.html'));
		}
		else if ($this->session->userdata('SS_LANG') == '' || $lang != $thisLang){
			$lang = strtoupper($lang);
			$this->session->set_userdata('SS_LANG', $lang);
			// echo '2';
		}
		else {
			$lang = $this->session->userdata('SS_LANG');
		}
		
		
		$fileView = $method;
		$fileView = ($fileView == '' || $fileView == 'index') ? 'report' : $fileView;
		
		$this->load->model('Investor_model');
		$detailMenu = $this->Investor_model->menuInvestor($lang);
		
		$data['submenu'] = $this->Investor_model->submenuInvestor($lang);
		$data['activeMenu'] = $fileView;
		$data['lang'] = $lang;
		
		## ambil menu_detail_id berdasarkan slug dan ID dan lang
		$menuDetail = $this->Investor_model->menuDetail($fileView, $lang);
		$data['menuDetail'] = $menuDetail;
		$allContent = $this->Investor_model->contentSubmenu($menuDetail['menu_detail_id'], $lang);
		$data['allContent'] = $allContent;
		
		## title 
		$data['title'] = "SERA - Serasi Auto Raya | ".@$detailMenu['menu_name']." | ".@$menuDetail['title'];
		// $data['title'] = "SERA - Serasi Auto Raya | ".$detailMenu['menu_name'];
		
		// echo $fileView;
		if ($method == 'index' || $fileView == 'report'){
			
			$hirarkiReport = $this->Investor_model->hirarkiReport();
		
			$periode = array();
			$head = array();
			$arrKel = array();
			$listData = $this->Investor_model->getInvestor();
			foreach($listData as $row){
				$id = $row['id'];
				$tahun = $row['tahun'];
				$kepala = $row['kepala'];
				$tipe = $row['tipe'];
				$satuan = $row['satuan'];
				$kelompok = $row['kelompok'];
				
				$contentBaru[$tahun][$id] = $row;
				
				if (!in_array($tahun, $periode)) {
					$periode[] = $tahun;
				}
				if (!in_array($kelompok, $arrKel)) {
					$arrKel[] = $kelompok;
				}
				
				## set Parent Child
				if ($kepala == 0){
					$allHead[$tahun][] = $id;
					$tipeHead[$tahun][$id] = $tipe;
					$idHead[$tahun][$id] = array();
				} else{
					$idHead[$tahun][$kepala][] = $id;
				}
				
				## set nilai untuk yang tipenya adalah SUM
				if (@$tipeHead[$tahun][$kepala] == 'sum')
					@$contentBaru[$tahun][$kepala]['nilai'] += $row['nilai'];
				
			}
			
			foreach($hirarkiReport as $row){
				$id = $row['id'];
				$kelompok = $row['kelompok'];
				$thisRow = array();
				$thisRow['id'] = $row['id'];
				$thisRow['kepala'] = $row['kepala'];
				$thisRow['nama'] = $row['nama'];
				$thisRow['tipe'] = $row['tipe'];
				$thisRow['satuan'] = $row['satuan'];
				$thisRow['kelompok'] = $row['kelompok'];
				
				for($idxTahun=0; $idxTahun<count($periode); $idxTahun++){
					$tahun = $periode[$idxTahun];
					$thisRow[$tahun] = @$contentBaru[$tahun][$id]['nilai'];
				}
				$allRow[$kelompok][] = $thisRow;
			}
			
			// set hanya untuk 3 tahun saja
			$allPeriode = array();
			for($i=0; $i<count($periode); $i++){
				if($i<3) // maksimal 3 tahun terakhir
					$allPeriode[$i] = $periode[$i];
			}
			
			$data['allRow'] = $allRow;
			$data['arrPeriode'] = $allPeriode;
			$data['arrKelompok'] = $arrKel;
			
			// $SS_ROOT = dirname(__FILE__);
			$this->load->view('header_front', $data, FALSE);
			$this->load->view('Investor/'.$fileView, $data, FALSE);
			$this->load->view('Profile/footerProfile');
			$this->load->view('footer_front', $data, FALSE);
		}
		else if ($method != 'index'){
			
			
			$SS_ROOT = dirname(__FILE__);
				$this->load->view('header_front', $data, FALSE);
				$this->load->view('Investor/'.$fileView, $data, FALSE);
				$this->load->view('Profile/footerProfile');
				$this->load->view('footer_front', $data, FALSE);
			
			$checkFileView = $SS_ROOT . SS_DS . '..'.SS_DS . 'views'.SS_DS.'Investor'.SS_DS. $fileView . '.php';
			if(file_exists($checkFileView)){
				// echo 'ada';
			}
			else {
				// echo "ga ada";
				// $this->about_us();
				/*
				// echo 'gagal';
				$this->load->view('header_front', $data, FALSE);	
				$this->load->view('Investor/about-us', $data, FALSE);
				$this->load->view('Investor/footerInvestor', $data, FALSE);
				$this->load->view('footer_front', $data, FALSE);
				*/
			}
		}
		else{
			$data = array(
				'title' => "SERA - Serasi Auto Raya" , );
			$this->load->view('header_front', $data, FALSE);	
			$this->load->view('Investor/report', $data, FALSE);	
			$this->load->view('Profile/footerProfile');
			$this->load->view('footer_front', $data, FALSE);
			
			// echo 'salah';
			// $this->about_us();
		}
		
	}

}

/* End of file Investor.php */
/* Location: ./application/modules/front/controllers/Investor.php */