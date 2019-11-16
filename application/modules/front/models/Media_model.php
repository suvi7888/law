<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Media_model extends CI_Model { 

	public function getDetail($tahun, $bulan,  $slug, $bahasa)
	{

		/*select * from news_content
		where year(datepost) = '2017'
		and MONTH(datepost) = '02'*/


		$q = $this->db->query("SELECT a.*, b.category_name,b.category_id, b.slugkategori from news_content a
			inner join master_category b on a.category_id = b.category_id
			inner join master_language c on a.language_id = c.language_id
			where c.language_name = '$bahasa' and year(a.datepost) = '$tahun' and month(a.datepost) = '$bulan' and slug = '$slug' ");

		return $q->row();
		
	} 



	public function getBU($namakat, $slugbu, $bahasa)
	{
		/*$q = $this->db->query("SELECT d.slugkategori, b.nama_bu, b.slug_bu, a.* from news_content a
			left join master_bisnis_unit b on a.id_bu = b.id
			inner join master_language c on a.language_id = c.language_id
			inner join master_category d on a.category_id = d.category_id
			where b.slug_bu = '$slugbu' and d.slugkategori = '$namakat'
			and c.language_name = '$bahasa'");*/
			
		$q = $this->db->query("SELECT d.slugkategori as slugmaster, b.nama_bu, b.slug_bu, a.*, 
			e.category_name as lain, e.slugkategori as slugms from news_content a
			left join master_bisnis_unit b on a.id_bu = b.id
			inner join master_language c on a.language_id = c.language_id
			inner join master_category d on a.category_id = d.category_id
		  left join master_category e on a.parent_id = e.category_id
			where (e.slugkategori = '$slugbu' ) 
			and d.slugkategori = '$namakat'
			and c.language_name = '$bahasa'
			order by a.create_date desc");

		return $q->result();
	}
	
	
	
	public function getKategori($namakat)
		{
			$q = $this->db->query("
				select b.slugkategori as slug_bu, b.category_name as nama_bu, a.slugkategori as link from master_category a
				inner join master_category b on a.category_id = b.relasi
				where a.slugkategori = '$namakat'");

			return $q->result();
		}


	public function getKat($namakat, $bahasa)
	{
		$q = $this->db->query("SELECT d.slugkategori, a.* from news_content a
			-- left join master_bisnis_unit b on a.id_bu = b.id
			inner join master_language c on a.language_id = c.language_id
			inner join master_category d on a.category_id = d.category_id
			where  d.slugkategori = '$namakat'
			and c.language_name = '$bahasa'");

		return $q->result();
	}


	public function getLink()
	{
		$q = $this->db->query("SELECT * from master_bisnis_unit order by id ");

		return $q->result();
	}
	
	function halaman($kategori,$number,$offset,$bahasa){

        if (isset($offset)) { $offset;} else { $offset  = 0; } 
           // $q =  $this->db->query("select * from view_news");

           // $this->db->select('*')->from('view_news')->limit($number)->offset($offset);
           $this->db->select('d.slugkategori, a.*')->from('news_content a')->join('master_language c','a.language_id = c.language_id')
		   ->join('master_category d','a.category_id = d.category_id')->where('d.slugkategori',$kategori)
		   ->where('c.language_name',$bahasa)->limit($number)->offset($offset)->order_by('a.create_date','desc'); 

           $query = $this->db->get();
            return $query->result(); 
    } 

     function jumlah_page($kategori,$bahasa){

        if (isset($offset)) { $offset;} else { $offset  = 0; } 
           $q =  $this->db->query("select * from view_news");

           // $this->db->select('*')->from('view_news')->limit($number)->offset($offset);
           $this->db->select('d.slugkategori, a.*')->from('news_content a')->join('master_language c','a.language_id = c.language_id')->join('master_category d','a.category_id = d.category_id')->where('d.slugkategori',$kategori)->where('c.language_name',$bahasa); 

           $query = $this->db->get();
            return $query->num_rows(); 
    } 
} 