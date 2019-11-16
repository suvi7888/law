<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('media_model');
	}

	public function index()
	{  
		$bahasa = 'ID';
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
			redirect(base_url('en/media.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/media.html'));
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
		
		$link	= $this->media_model->getLink();


		$data = array(
			'title' 	=> "Media - Serasi Auto Raya" ,
			'news'		=> $this->Home_model->getNewsMedia("$bahasa",4),
			'info'		=> $this->Home_model->getNewsMedia("$bahasa",5),
			'headline'	=> $this->Home_model->getData('135',"$bahasa"), //carousel
			'lang'		=> $lang,
			'link'		=> $link
			 );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_news_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);			
	}



	public function press()
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
			redirect(base_url('en/media/press.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/media/press.html'));
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
		
		$data = array(
			'title' 	=> "Media Press - SERA - Serasi Auto Raya" ,
			'headline'	=> $this->Home_model->getData('132',"$bahasa"), //carousel
			'news'		=> $this->Home_model->getNewsMedia("$bahasa",8), 
			'lang'		=> $lang ); 


		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_press_front', $data);	 
		$this->load->view('footer_front', $data, FALSE);			
	}


	public function photo($cek=0)
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
			redirect(base_url('en/media/photo.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/media/photo.html'));
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
		
		
		// aaa
		$config['base_url'] = base_url($this->uri->segment(1).'/'.$this->uri->segment(2));
		
		$terhitung = array();
		$terhitungRow = $this->Home_model->getNumrowMediaPhotoVideo("$bahasa");
		foreach($terhitungRow as $row){
			$terhitung[] = $row['terhitung'];
		}
		
		
		$config['total_rows'] = max($terhitung);
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);

		/*Class bootstrap pagination yang digunakan*/
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		
		$this->load->library('pagination');
		$this->pagination->initialize($config);		 
		
		$data = array(
			'title' 	=> "Media Photo -  SERA - Serasi Auto Raya" ,
			// 'news'		=> $this->Home_model->getNewsMediaPhoto("$bahasa"), 
			'thisPhoto'	=> $this->Home_model->getNewsPhoto("$bahasa", $config['per_page'], $from), 
			'thisVideo'	=> $this->Home_model->getNewsVideo("$bahasa", $config['per_page'], $from), 
			'headline'	=> $this->Home_model->getData('133',"$bahasa"), //carousel
			'lang'		=> $lang 
			); 
			
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_photo_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);	
	}


	public function relasi()
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
			redirect(base_url('en/media/photo.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/media/photo.html'));
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
		
		$data = array(
			'title' 	=> "Media Relationship - SERA - Serasi Auto Raya" ,
			'data'		=> $this->Home_model->getData('44',"$bahasa"), //carousel
			'headline'	=> $this->Home_model->getData('112',"$bahasa"), //carousel
			'lang'		=> $lang
			);
		$this->load->view('header_front', $data, FALSE);	 
		$this->load->view('Media/media_relasi', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);	
	}





	public function detail($tahun = '' , $bulan = '',  $slug = '')
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
			redirect(base_url('en/news/'.$tahun.'/'.$bulan.'/'.$slug.'.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/news/'.$tahun.'/'.$bulan.'/'.$slug.'.html'));
			}
			else if (strtolower($lang) == 'en' || strtolower($lang) == 'id'){
				$lang = strtoupper($lang);
				$this->session->set_userdata('SS_LANG', $lang);
			}
			else {
				$lang = $this->session->userdata('SS_LANG');
			}
		}

		// echo $lang;
		// exit();
			
		$bahasa = $this->session->userdata('SS_LANG');

		$news 		= $this->media_model->getDetail($tahun, $bulan, $slug, $bahasa);

		// $news2 = array('1','2');

		// var_dump($news);
		// var_dump($news2);

		 if ($news) { 

			


			$data = array(
				'title' =>	$news->title.' - PT. Serasi Autoraya' ,
				'news'	=> 	$news,
				'lang'	=>	$lang
				);


			$this->load->view('header_front', $data, FALSE);	
			$this->load->view('News/page_detail', $data, FALSE);	
			$this->load->view('footer_front', $data, FALSE);	

		} else { redirect('','refresh'); }
	}



	// Business Unit 
	public function bu($namakat = '', $slugbu = '')
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
			redirect(base_url('en/media/'.$namakat.'/'.$slugbu.'.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/media/'.$namakat.'/'.$slugbu.'.html'));
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

		// get bisnis unit
		$q = $this->media_model->getBU($namakat, $slugbu, $bahasa);


		// kategori option link
		$link	= $this->media_model->getKategori($namakat);
		
		$data = array(
			'title' 	=> "SERA - Serasi Auto Raya" , 
			'kat'		=> $q,
			'link'		=> $link,
			'lang'		=> $lang,
			'slugbu'	=> $slugbu
			 );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_kat_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);	 
	}

	// Kategori Index
	public function kat($namakat = '', $id='')
	{  
	
		$this->load->library('pagination');

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
			if ($id == '')
				redirect(base_url('en/kategori/'.$namakat.'.html'));
			else 
				redirect(base_url('en/kategori/'.$namakat.'/'.$id.'.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				if ($id == '')
					redirect(base_url($lang.'/kategori/'.$namakat.'.html'));
				else 
					redirect(base_url($lang.'/kategori/'.$namakat.'/'.$id.'.html'));
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

		// get bisnis unit
		$q = $this->media_model->getKat($namakat, $bahasa);


		// kategori option link
		$link	= $this->media_model->getLink();



		// aaa
		$config['base_url'] = base_url("kategori/$namakat");
		$config['total_rows'] = $this->media_model->jumlah_page(str_replace('.html','',$namakat),$bahasa);
		$config['per_page'] = 3;
		$from = $this->uri->segment(4);

		/*Class bootstrap pagination yang digunakan*/
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);		 


		// aaa
		
		$data = array(
			'title' 	=> strtoupper($namakat)."- SERA - Serasi Auto Raya" , 
			// 'kat'		=> $q,
			'link'		=> $link,
			'lang'		=> $bahasa, 
			'kat' 		=> $this->media_model->halaman($namakat, $config['per_page'],$from,$bahasa),
			'jumlah_data' => 100
			);
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_indeks_kat_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);	

		// $route['kategori/(:any)']		= 'front/media/kat/$1';
		/*
		$bahasa 	= 'ID';
		$lang 		= '';

		if (strtoupper(@$_GET['lang']) == 'EN' || strtoupper(@$_GET['lang']) == 'ID')
			$this->session->set_userdata('SS_LANG', @$_GET['lang']);
		else if ($this->session->userdata('SS_LANG') == '') 
			$this->session->set_userdata('SS_LANG', 'EN');
		
		$bahasa = $this->session->userdata('SS_LANG');

		// get bisnis unit
		$q = $this->media_model->getKat($namakat, $bahasa);


		// kategori option link
		$link	= $this->media_model->getLink();
		
		$data = array(
			'title' 	=> strtoupper($namakat)."- SERA - Serasi Auto Raya" , 
			'kat'		=> $q,
			'link'		=> $link,
			'lang'		=> $lang
			 );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_indeks_kat_front', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);	 
		
		*/

	}



	// Tags
	public function tag($tag = '')
	{


		$bahasa 	= 'ID';
		$lang 		= '';

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
			redirect(base_url('en/media/tag/'.$tag.'.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = $this->session->userdata('SS_LANG');
				redirect(base_url('en/media/tag/'.$tag.'.html'));
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


		// kategori option link
		$link	= $this->media_model->getLink();
		 
			$d = $this->db->query("
			SELECT * from news_content a 
			JOIN master_language b ON a.language_id = b.language_id 
			JOIN master_category c ON a.category_id = c.category_id  
			where tagberita like '%$tag%' and b.language_name = 'EN' and c.category_id not in (9,10)")->result();
		//$d = $this->db->query("SELECT * from news_content a where tagberita like '%$tag%'")->result();
		
		$data = array( 
			'title'		=> "Tag @$tag - PT.Serasi Autoraya",
			'headline'	=> $this->Home_model->getData('112',"$bahasa"), //carousel
			'data'		=> $d,
			'link'		=> $link,
			'lang'		=> $lang 
			 );
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Media/media_tags', $data, FALSE);	 
		$this->load->view('footer_front', $data, FALSE);




	}

	
}

/* End of file Media.php */
/* Location: ./application/modules/front/controllers/Media.php */
