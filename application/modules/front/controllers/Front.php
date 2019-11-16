<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('url');
	}

	public function index(){  
        base_url();
        // echo '<hr>';
        @$_SERVER['PATH_INFO'];
        // echo '<hr>';
		$segment = $this->uri->segment(1);
		$thisLang = $this->session->userdata('SS_LANG');
        current_url();
       
        
        
        // die(); 
        if (@$_SERVER['PATH_INFO'] == ''){
            if ($this->session->userdata('SS_LANG') == ''){
                $this->session->set_userdata('SS_LANG', 'ID');
                redirect(base_url('beranda.html'));
            }
            else if($this->session->userdata('SS_LANG') == 'ID'){
                redirect(base_url('beranda.html'));
            }
            else if($this->session->userdata('SS_LANG') == 'EN'){
                redirect(base_url('home.html'));
            }
            
        }
        else {
            if (strtolower($segment) == 'en'){
                $this->session->set_userdata('SS_LANG', 'EN');
                redirect(base_url('home.html'));
            }
            else if (strtolower($segment) == 'id') {
                $this->session->set_userdata('SS_LANG', 'ID');
                redirect(base_url('beranda.html'));
            } 
            else if (strtolower($segment) == 'beranda') {
                $this->session->set_userdata('SS_LANG', 'ID');
            }
            else if (strtolower($segment) == 'home') {
                $this->session->set_userdata('SS_LANG', 'EN');
            }
            else {
                $this->session->set_userdata('SS_LANG', 'ID');
                redirect(base_url('beranda.html'));
            }
            
        }
        
        /*
		if ($this->session->userdata('SS_LANG') == ''){
			if (strtolower($bahasa) == 'en' || strtolower($bahasa) == 'id')
				$bahasa = strtoupper($bahasa);
			else
				$bahasa = strtoupper('EN');
			
			$this->session->set_userdata('SS_LANG', $bahasa);
			redirect(base_url(strtolower($bahasa).'.html'));
		}
		else {
			if (strtolower($bahasa) == 'en' || strtolower($bahasa) == 'id'){
				$bahasa = strtoupper($bahasa);
				$this->session->set_userdata('SS_LANG', $bahasa);
			}
			else {
				$bahasa = $this->session->userdata('SS_LANG');
				redirect(base_url(strtolower($bahasa).'.html'));
			}
		}
		*/
		// $bahasa = 'EN'; 
		// if (strtoupper(@$_GET['lang']) == 'EN' || strtoupper(@$_GET['lang']) == 'ID')
			// $this->session->set_userdata('SS_LANG', @$_GET['lang']);
		// else if ($this->session->userdata('SS_LANG') == '') 
			// $this->session->set_userdata('SS_LANG', 'EN');
		
		$bahasa = $this->session->userdata('SS_LANG');

		$lang = '';


		$data = array(
			'title' 	=> "SERA - Serasi Auto Raya" , 
			'ov'		=> $this->Home_model->getData('15',"$bahasa"), //overview
			'carousel'	=> $this->Home_model->menuDetail('12',"$bahasa"), //carousel
			'our'		=> $this->Home_model->getData('10',"$bahasa"), //carousel
			'ourtrans'	=> $this->Home_model->getData('16',"$bahasa"), //carousel
			'ourcar'	=> $this->Home_model->getData('17',"$bahasa"), //carousel
			'ourlog'	=> $this->Home_model->getData('18',"$bahasa"), //carousel 
			'csr'		=> $this->Home_model->getData('19',"$bahasa"), // untuk bagian CSR 
			'karir'		=> $this->Home_model->getData('20',"$bahasa"), // untuk bagian karir
			'lang'		=> $lang,
			'addjs'		=> "addJS/home",
			'news'		=> $this->Home_model->getNews("$bahasa"),
			'ourvalue'	=> $this->Home_model->menuDetail('25',"$bahasa"), //our value
			'brand'		=> $this->Home_model->brand('30',"$bahasa"), //our value
			'ourvalueImg'	=> $this->Home_model->menuDetail('29',"$bahasa"), //our value Image  
			'story_1'	=> $this->Home_model->getData('136',"$bahasa"), //our value
			'story_2'	=> $this->Home_model->getData('137',"$bahasa"), //our value
			'story_3'	=> $this->Home_model->getData('138',"$bahasa"), //our value
			'story_4'	=> $this->Home_model->getData('139',"$bahasa"), //our value
			'story_5'	=> $this->Home_model->getData('140',"$bahasa"), //our value
			'story_6'	=> $this->Home_model->getData('141',"$bahasa"), //our value
			'story_7'	=> $this->Home_model->getData('142',"$bahasa"), //our value			
			'story_8'	=> $this->Home_model->getData('143',"$bahasa"), //our value
			);

		// $this->output->cache(5);
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('showcase_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);
        // $this->session->set_userdata('SS_LANG', '');
	}


	public function cookies()
	{
		//$this->output->cache(30);
		$data = array(
			'title' 	=> "Cookies - Serasi Auto Raya" , 
			);

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
			redirect(base_url('en/cookies.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/cookies.html'));
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

		$lang = '';

		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Footer/cookies_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);	
	}



	public function privacy()
	{
		$this->output->cache(30);
		$data = array(
			'title' 	=> "Privacy - Serasi Auto Raya" , 
			);

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
			redirect(base_url('en/cookies.html'));
		}
		else {
			if (!in_array($lang, array('en','id', 'EN','ID'))){
				$lang = strtolower($this->session->userdata('SS_LANG'));
				redirect(base_url($lang.'/cookies.html'));
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

		$lang = '';

		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Footer/cookies_front', $data, FALSE);	
		$this->load->view('footer_front', $data, FALSE);	
	}



	public function notfound() 
	{
 
		// $this->output->cache(30);
		$data = array(
			'title' 	=> "Not Found - Serasi Auto Raya" , 
			);

		$bahasa = 'EN'; 
		if (strtoupper(@$_GET['lang']) == 'EN' || strtoupper(@$_GET['lang']) == 'ID')
			$this->session->set_userdata('SS_LANG', @$_GET['lang']);
		else if ($this->session->userdata('SS_LANG') == '') 
			$this->session->set_userdata('SS_LANG', 'EN');
		
		$bahasa = $this->session->userdata('SS_LANG');

		$lang = '';

		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('404front');	 
		$this->load->view('footer_front', $data, FALSE);	
	}
	
	public function site_map()
	{ 
		$this->output->cache(30);
		$bahasa = 'EN'; 
		if (strtoupper(@$_GET['lang']) == 'EN' || strtoupper(@$_GET['lang']) == 'ID')
			$this->session->set_userdata('SS_LANG', @$_GET['lang']);
		else if ($this->session->userdata('SS_LANG') == '') 
			$this->session->set_userdata('SS_LANG', 'EN');
		
		$bahasa = $this->session->userdata('SS_LANG');

		$lang = '';


		$data = array(
			'title' 	=> "SERA - Serasi Auto Raya" , 
			'news'		=> $this->Home_model->getNewsMedia("$bahasa",4),
			'info'		=> $this->Home_model->getNewsMedia("$bahasa",5),
			);
		$this->load->view('header_front', $data, FALSE);	
		$this->load->view('Footer/site_map', $data, FALSE);
		$this->load->view('footer_front', $data, FALSE);		
	}

    function genSitemap(){
        // echo 'masuk';
$domDocument = new DOMDocument('1.0', "UTF-8");

$xslt = $domDocument->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="sitemap.xsl"');
$domDocument->appendChild($xslt);

$urlset = $domDocument->createElement('urlset');
    ## attr urlset
    $domAttribute = $domDocument->createAttribute('xmlns:xsi');
    $domAttribute->value = 'http://www.w3.org/2001/XMLSchema-instance';
    $urlset->appendChild($domAttribute);
    ## attr urlset
    $domAttribute = $domDocument->createAttribute('xsi:schemaLocation');
    $domAttribute->value = 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd';
    $urlset->appendChild($domAttribute);
    ## attr urlset
    $domAttribute = $domDocument->createAttribute('xmlns');
    $domAttribute->value = 'http://www.sitemaps.org/schemas/sitemap/0.9';
    $urlset->appendChild($domAttribute);
    
$domDocument->appendChild($urlset);
#############################
# head url
$url = $domDocument->createElement("url");
$urlset->appendChild($url);
	
	$loc = $domDocument->createElement('loc', base_url('en.html'));
	$url->appendChild($loc);
	$lastmod = $domDocument->createElement('lastmod', '2017-03-17');
	$url->appendChild($lastmod);
	$changefreq = $domDocument->createElement('changefreq', 'weekly');
	$url->appendChild($changefreq);
	$priority = $domDocument->createElement('priority', '0.8');
	$url->appendChild($priority);
#############################
# head url
$url = $domDocument->createElement("url");
$urlset->appendChild($url);
	
	$loc = $domDocument->createElement('loc', base_url('id.html'));
	$url->appendChild($loc);
	$lastmod = $domDocument->createElement('lastmod', '2017-03-17');
	$url->appendChild($lastmod);
	$changefreq = $domDocument->createElement('changefreq', 'weekly');
	$url->appendChild($changefreq);
	$priority = $domDocument->createElement('priority', '0.8');
	$url->appendChild($priority);
#############################
$allUrlSiteMap = $this->Home_model->allUrlSiteMap();
foreach($allUrlSiteMap as $row){
$url = $domDocument->createElement("url");
$urlset->appendChild($url);
	
	$loc = $domDocument->createElement('loc', strtolower(base_url($row['url'])) );
	$url->appendChild($loc);
	$lastmod = $domDocument->createElement('lastmod', substr(($row['lastUpdate'] != null ? $row['lastUpdate'] : $row['lastCreate']),0,10) );
	$url->appendChild($lastmod);
	$changefreq = $domDocument->createElement('changefreq', 'weekly');
	$url->appendChild($changefreq);
	$priority = $domDocument->createElement('priority', '0.8');
	$url->appendChild($priority);
}
#############################
#############################
# head url
$url = $domDocument->createElement("url");
$urlset->appendChild($url);
	
	$loc = $domDocument->createElement('loc', base_url('en/contact.html'));
	$url->appendChild($loc);
	$lastmod = $domDocument->createElement('lastmod', '2017-03-17');
	$url->appendChild($lastmod);
	$changefreq = $domDocument->createElement('changefreq', 'weekly');
	$url->appendChild($changefreq);
	$priority = $domDocument->createElement('priority', '0.8');
	$url->appendChild($priority);
# head url
$url = $domDocument->createElement("url");
$urlset->appendChild($url);
	
	$loc = $domDocument->createElement('loc', base_url('id/contact.html'));
	$url->appendChild($loc);
	$lastmod = $domDocument->createElement('lastmod', '2017-03-17');
	$url->appendChild($lastmod);
	$changefreq = $domDocument->createElement('changefreq', 'weekly');
	$url->appendChild($changefreq);
	$priority = $domDocument->createElement('priority', '0.8');
	$url->appendChild($priority);
#############################
$generate = $domDocument-> save("sitemap.xml");
// print_r($generate);
    }
}

/* End of file Front.php */
/* Location: ./application/modules/front/controllers/Front.php */