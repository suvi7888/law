<?php

class Profile_model extends CI_Model{
	var $menuId = 2;
	
	function menuProfile($lang){
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
	function submenuProfile($lang){
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
	function contentDetailProfile($idContent, $lang){
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
			AND slug = 'profile-".$slug."'
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
}
?>