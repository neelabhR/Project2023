<?php

 
class MY_Model extends CI_Model {

	
	protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	public $rules = array();
	protected $_timestamps = FALSE;

	function __construct() {
		parent::__construct();
	}

     public function count($where=NULL) {
        if($where != NULL) {
            $this->db->where($where);
        }
        return $this->db->count_all_results($this->_table_name);
    }

 	public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}

 	public function get($id = NULL, $single = FALSE){

		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}

		$this->db->order_by($this->_order_by);
		return $this->db->get($this->_table_name)->$method();
	}

	public function get_by($where = FALSE, $single = FALSE, $like = FALSE){
		if($where != FALSE) {
			$this->db->where($where);
		}
		if($like != FALSE) {
			$this->db->like($like);
		}
		return $this->get(NULL, $single);
	}

	public function save($data, $id = NULL){

		
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}

		
		if ($id === NULL) {
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}

	public function delete_multi($id){
		if (!$id) {
			return FALSE;
		}
		$this->db->where_in($this->_primary_key, $id);
		$this->db->delete($this->_table_name);
	}

}