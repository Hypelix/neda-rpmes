<?php
class Rpmes_login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
//login
	function login($username, $password)
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('UName', $username);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{		
			$user_row = $query->row();
			return password_verify($password, $this->encryption->decrypt($user_row->Pwd));
			// return password_verify($password, $user_row->Pwd);
		}
		return FALSE;
	}

	public function getUser_Row($username)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('UName', $username);
		$query = $this->db->get();
		return $query;
	}



}//end