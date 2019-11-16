<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_admin_model extends CI_Model {

	var $table          = 'master_menu_admin';
	var $column_order   = array('id_menu','nama_menu'); 
    	    //set column field database for datatable orderable
    var $column_search  = array('id_menu','nama_menu'); //set column field database for datatable searchable 
    var $order          = array('id_menu' => 'asc'); // default order 


    private function _get_datatables_query()
    {

    	$this->db->from($this->table);  
        // $this->db->order_by('id','DESC'); 


    	$i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                	$this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
                }
                $i++;
            }

        if(isset($_POST['order'])) // here order processing
        {
        	$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
        	$order = $this->order;
        	// $this->db->order_by(key($order), $order[key($order)]); 
        	$this->db->order_by('id_menu','DESC');
        }
    }

    function get_datatables()
    {
    	$this->_get_datatables_query();
    	if($_POST['length'] != -1)
    		$this->db->limit($_POST['length'], $_POST['start']);
    	$query = $this->db->get();
    	return $query->result();
    }

    function count_filtered()
    {
    	$this->_get_datatables_query();
    	$query = $this->db->get();
    	return $query->num_rows();
    }

    public function count_all()
    {
    	$this->db->from($this->table);
    	return $this->db->count_all_results();
    } 

    // End untuk kebutuhan datatable 




	// Tambahan
    function insertMenuAdmin($data) {
		// $this->db->where($whereUpdate);
    	return $this->db->insert('master_menu_admin', $data);
    }


	// get menu admin
    function getMenuAdmin($data) { 
    	$this->db->select('*')->from('master_menu_admin')->where('id_menu',$data);
    	$q = $this->db->get();
    	return $q->row();  
    }


    function updateMenuAdmin($data, $where) { 
		$this->db->where($where);
		return $this->db->update('master_menu_admin', $data); 
    }

}

/* End of file Menu_admin_model.php */
/* Location: ./application/modules/back/models/Menu_admin_model.php */