<?php

class Website_model extends CI_Model{
	
	function listWebsite(){
		$sql = "SELECT * FROM master_website";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insertWebsite($dataInsert){
		return $this->db->insert('master_website', $dataInsert);
	}
	
	function detailWebsite($id_website){
		$sql = "
		SELECT *
		FROM master_website
		WHERE id_website = '$id_website'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	
	function updateWebsite($dataUpdate, $whereUpdate) {
		$this->db->where($whereUpdate);
		return $this->db->update('master_website', $dataUpdate);
	}
	
####################################################
	// permainan untuk data tables.
    // dimulai dari sini
    var $table          = 'master_website';
    var $column_order   = array('id_website', 'title', 'base_url'); //set column field database for datatable orderable
    var $column_search  = array('id_website', 'title', 'base_url'); //set column field database for datatable orderable
    var $order          = array('id_website' => 'asc'); // default order 
	
	function _get_datatables_query(){
		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item){ // loop column 
			if($_POST['search']['value']){ // if datatable send POST for search
				
				if($i===0){ // first loop
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else{
					$this->db->or_like($item, $_POST['search']['value']);
				}
				
				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
	}
	function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }
	function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
####################################################

}

?>
