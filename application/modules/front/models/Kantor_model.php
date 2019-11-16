<?php

class Kantor_model extends CI_Model{
	
	function listHeadKantor(){
		$sql = "SELECT a.*, nama_grup
		FROM kantor a 
		LEFT JOIN kantor_group b ON a.kantor_grup=b.id
		WHERE a.status = '1' AND a.id_kantor < 1000
		ORDER BY a.id_kantor ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function listKantor(){
		$sql = "SELECT a.*, nama_grup
		FROM kantor a 
		LEFT JOIN kantor_group b ON a.kantor_grup=b.id
		WHERE a.status = '1'
		ORDER BY a.id_kantor ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insertKantor($dataInsert){
		return $this->db->insert('kantor', $dataInsert);
	}
	function detailKantor($id){
		$sql = "SELECT * FROM kantor WHERE id_kantor='$id'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	function updateKantor($dataUpdate, $whereUpdate){
		$this->db->where($whereUpdate);
		return $this->db->update('kantor', $dataUpdate);
	}
	
	function grupKantor(){
		$sql = "SELECT * FROM kantor_group ORDER BY id ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insertGrup($dataInsert){
		return $this->db->insert('kantor_group', $dataInsert);
	}
	function detailGrupKantor($id){
		$sql = "SELECT * FROM kantor_group WHERE id='$id'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	function updateGrup($dataUpdate, $whereUpdate){
		$this->db->where($whereUpdate);
		return $this->db->update('kantor_group', $dataUpdate);
	}
	
	function getGrup($kota){
		$sql = "
		SELECT DISTINCT b.id, nama_grup
		FROM kantor a 
		LEFT JOIN kantor_group b ON a.kantor_grup=b.id
		WHERE a.kota = '$kota' AND a.status = '1'
		ORDER BY nama_grup ASC
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getKota($kantor_grup){
		$sql = "
		SELECT DISTINCT kota
		FROM kantor a 
		WHERE a.kantor_grup = '$kantor_grup' AND a.status = '1'
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getKantor($kota, $kantor_grup){
		$sql = "
		SELECT a.*, nama_grup
		FROM kantor a 
		LEFT JOIN kantor_group b ON a.kantor_grup=b.id
		WHERE a.kota = '$kota' AND a.kantor_grup = '$kantor_grup' AND a.status = '1'
		ORDER BY a.id_kantor ASC
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
}

?>
