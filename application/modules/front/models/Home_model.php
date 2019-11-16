<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	public function getNewsCSR($bahasa = '', $kategori = '')
  {
     $this->db->select('*')
     ->from('news_content a')
     ->join('master_language b','a.language_id = b.language_id')
     ->join('master_category c','a.category_id = c.category_id')
     ->where('a.parent_id',$kategori)
     ->where('b.language_name',$bahasa)
     ->where('a.status',1)
     ->order_by('a.create_date', 'desc')
     ->limit(6);

     $q = $this->db->get();
     return $q->result();  
 }


 public function getData($id='' , $language_id = null )
 {
  $this->db->select('*')
  ->from('menu_content as a')
  ->join('master_language as b','a.language_id = b.language_id')
  ->where('a.content_id',$id)
  ->where('b.language_name', $language_id)
  ->where('a.status','1');

  $query = $this->db->get();
  return $query->row(); 
}


public function getDataResult($id='' , $language_id = null )
{
  $this->db->select('*')
  ->from('menu_content as a')
  ->join('master_language as b','a.language_id = b.language_id')
  ->where('a.menu_detail_id',$id)
  ->where('b.language_name', $language_id)
  ->where('a.status','1');

  $query = $this->db->get();
  return $query->result(); 
}


public function getDataResult_Foto($id='' , $language_id = null )
{
  $this->db->select('*')
  ->from('menu_content as a')
  ->join('master_language as b','a.language_id = b.language_id')
  ->where('a.menu_detail_id',$id)
  ->where('b.language_name', $language_id)
  ->where('a.status','1')
  ->order_by('a.position','ASC');

  $query = $this->db->get();
  return $query->result(); 
}

public function brand($menu_detail_id='', $language_id = '')
{

    $this->db->select('*')
    ->from('menu_content as a')
    ->join('master_language as b','a.language_id = b.language_id')
    ->where('a.menu_detail_id',$menu_detail_id)
    ->where('b.language_name', $language_id)
    ->where('a.status',1)
    ->order_by('a.position','ASC'); 
    $query = $this->db->get(); 
    return $query->result();
}



public function menuDetail($menu_detail_id='', $language_id = '')
{

  $this->db->select('*')
  ->from('menu_content as a')
  ->join('master_language as b','a.language_id = b.language_id')
  ->where('a.menu_detail_id',$menu_detail_id)
  ->where('b.language_name', $language_id)
  ->where('a.status',1); 

  $query = $this->db->get();
/*
		$query = $this->db->query("
			SELECT * from menu_content a
			inner join master_language b on a.language_id = b.language_id
			where menu_detail_id = '$menu_detail_id' 
			and language_name = '$language_id and a.status = '1' ");*/

			return $query->result();
		}


	// mendapatkan berita 
		public function getNews($bahasa = '')
		{
			$this->db->select('*')
			->from('news_content a')
			->join('master_language b','a.language_id = b.language_id')
			->where('a.category_id',4)
			->where('b.language_name',$bahasa)
			->where('a.status',1)
			->order_by('a.datepost', 'desc')
			->limit(4);

			$q = $this->db->get();
			return $q->result();  
		}

		public function getNewsMedia($bahasa = '', $kategori = '')
		{
			$this->db->select('*')
			->from('news_content a')
			->join('master_language b','a.language_id = b.language_id')
			->join('master_category c','a.category_id = c.category_id')
			->where('a.category_id',$kategori)
			->where('b.language_name',$bahasa)
			->where('a.status',1)
			->order_by('a.datepost', 'desc')
			->limit(6);

			$q = $this->db->get();
			return $q->result();  
		}

		public function getNewsMediaPhoto($bahasa)
		{ 
          $where = "a.category_id in ('9','10') ";
		//$where = "a.category_id = '9' or a.category_id = '10'";
		/*

		$this->db->where($where);*/


		$this->db->select('*')
		->from('news_content a')
		->join('master_language b','a.language_id = b.language_id')
		->join('master_category c','a.category_id = c.category_id')
		->where($where)//->where('a.category_id',10) 
		// ->where('a.category_id',9)
		// ->or_where('a.category_id',10)
		->where('b.language_name',$bahasa)
		->where('a.status',1)
		->order_by('a.datepost', 'desc');
		// ->limit(6);

		$q = $this->db->get();
		return $q->result();  
	}
		
		public function getNewsPhoto($bahasa,$limit=0,$offset=9)
		{
			$where = "a.category_id in ('9') ";

			$this->db->select('*')
			->from('news_content a')
			->join('master_language b','a.language_id = b.language_id')
			->join('master_category c','a.category_id = c.category_id')
			->where($where)
			->where('b.language_name',$bahasa)
			->where('a.status',1)
			->limit($limit)
			->offset($offset)
			->order_by('a.datepost', 'desc');

			$q = $this->db->get();
			return $q->result();  
		}
		public function getNewsVideo($bahasa,$limit=0,$offset=9)
		{
			$where = "a.category_id in ('10') ";

			$this->db->select('*')
			->from('news_content a')
			->join('master_language b','a.language_id = b.language_id')
			->join('master_category c','a.category_id = c.category_id')
			->where($where)
			->where('b.language_name',$bahasa)
			->where('a.status',1)
			->limit($limit)
			->offset($offset)
			->order_by('a.datepost', 'desc');

			$q = $this->db->get();
			return $q->result();  
		}
		public function getNumrowMediaPhotoVideo($bahasa = 'id'){
			$sql = "
				SELECT count(*) terhitung
				FROM news_content a
				JOIN master_language b ON a.language_id = b.language_id
				JOIN master_category c ON a.category_id = c.category_id
				WHERE
					a.category_id IN ('9', '10')
					AND b.language_name = '".$bahasa."'
					AND a.status = '1'
				GROUP BY a.category_id 
			";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		
	## suvi sanusi
	# all content base on menu detail
	function contentSubmenu($menuDetailId, $lang){
		$sql = "
		SELECT *
		FROM menu_content a
		WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
     AND menu_detail_id = '".$menuDetailId."'
     AND status = '1'
     ORDER BY [position] ASC
     ";
     $query = $this->db->query($sql);
     return $query->result_array();
 }

	## suvi sanusi
	# menu detail base on menu_id
 function menuDetailSs($menuId, $lang){
  $sql = "
  SELECT 
  menu_detail_id, menu_detail_name, title
  FROM menu_detail a
  WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
  AND menu_id = '".$menuId."'
  AND status = '1'
  ";
  $query = $this->db->query($sql);
  return $query->row_array();
}

    ## suvi sanusi
    # sitemap
function allUrlSiteMap(){
    $sql = "
    SELECT 
		url,
		CASE
			WHEN lastUpdate >= lastCreate THEN lastUpdate
			WHEN lastCreate > lastUpdate THEN lastCreate
			ELSE ISNULL(lastUpdate, lastCreate)
		END as lastUpdate
	FROM (
		select
		md.menu_id
		,(ml.language_name + '/' + md.slug + '.html') url
		,(select max(mc.create_date) from menu_content mc WHERE md.menu_detail_id = mc.menu_detail_id ) lastCreate
		,(select max(mc.update_date) from menu_content mc WHERE md.menu_detail_id = mc.menu_detail_id ) lastUpdate
		,m.menu_name
		from menu m
		left join menu_detail md
		ON m.menu_id = md.menu_id
		left join master_language ml 
		ON ml.language_id = md.language_id AND ml.language_id = m.language_id
		where  md.status = 1
		and m.status = 1

		UNION ALL

		select 
		9999999 menu
		,(ml.language_name 
		+ '/news/' + CONVERT(VARCHAR(5),DATEPART(YEAR, nc.create_date)) 
		+ '/' + substring(CONVERT(VARCHAR(10),100+DATEPART(MONTH, nc.create_date)),2,2)
		+ '/' + nc.slug + '.html'
		) url
		,nc.create_date
		,nc.update_date
		,'news'
		from news_content nc
		left join master_language ml 
		ON ml.language_id = nc.language_id
		WHERE nc.status = 1
    )nTable
    WHERE url not like '% %' AND menu_id not in (1,7)
    ORDER BY lastUpdate DESC
    ";
    $query = $this->db->query($sql);
    return $query->result_array();
}

}

/* End of file Home_model.php */
/* Location: ./application/modules/front/models/Home_model.php */