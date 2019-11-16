<?php

class Investor_model extends CI_Model{
	var $menuId = 4;
	
	function menuInvestor($lang){
		$sql = "
		SELECT 
			*
		FROM menu a
		WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
			AND menu_id = '".$this->menuId."'
			AND status = '1'
		";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	function submenuInvestor($lang){
		$sql = "
		SELECT 
			a.*
		FROM menu_detail a
		WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
			AND menu_id = '".$this->menuId."'
			AND status = '1'
		ORDER BY [position] ASC
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function contentDetailInvestor($idContent, $lang){
		$sql = "
		SELECT *
		FROM menu_content a
		WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
			AND content_id = '".$idContent."'
			AND status = '1'
		";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function menuDetail($slug, $lang){
		$sql = "
		SELECT 
			menu_detail_id, menu_detail_name, title
		FROM menu_detail a
		WHERE language_id = (select language_id from master_language where language_name ='".$lang."')
			AND slug = 'investor-".$slug."'
			AND menu_id = '".$this->menuId."'
			AND status = '1'
		";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
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
	
	function getInvestor(){
		$sql = "select * from investor_report 
		WHERE id not in (4,5,8,9,11,12,14,16,17,21,22,23)
		order by tahun DESC, id ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function hirarkiReport(){
		$sql = "
		SELECT 
			DISTINCT id, kepala, posisi, nama, tipe, satuan, kelompok
		FROM investor_report
		WHERE id not in (4,5,8,9,11,12,14,16,17,21,22,23)
		ORDER BY id, kepala, posisi, nama, tipe, satuan, kelompok
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
?>