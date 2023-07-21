<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Remote_Login extends CI_Model
{
	private $table_name = 'user_autologin';
	private $users_table_name = 'users';

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_name = $ci->config->item('db_table_prefix', 'tank_auth').$this->table_name;
		$this->users_table_name	= $ci->config->item('db_table_prefix', 'tank_auth').$this->users_table_name;
	}

	
	function get($key)
	{
		$this->db->select($this->users_table_name.'.id');
		$this->db->select($this->users_table_name.'.username');
		$this->db->select($this->users_table_name.'.role_id');
		$this->db->select($this->table_name.'.expires');
		$this->db->from($this->users_table_name);
		$this->db->join($this->table_name, $this->table_name.'.user_id = '.$this->users_table_name.'.id');
		$this->db->where($this->table_name.'.key_id', $key);
		$query = $this->db->get();
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	
	function set($user_id, $key, $expires)
	{
		return $this->db->insert($this->table_name, array(
			'user_id' 		=> $user_id,
			'key_id'	 	=> $key,
			'expires'               => $expires,
			'remote' 		=> 1,
		));
	}

	
	function delete($user_id, $key)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('key_id', $key);
		$this->db->delete($this->table_name);
	}

	
	function clear($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete($this->table_name);
	}

	
	function purge($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('expires <', date("Y-m-d H:m:i", time()));
		$this->db->where('remote', 1);
		$this->db->delete($this->table_name);
	}
}


