<?php
class Test_model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	public function TestRegister($data)
	{
		$result = $this->getTestLast(date('y-m-d'));
		// print_r($result);die();
		$lastrecord = $result[0]->test_id;
		$lastdate = substr($lastrecord, 0, 8);
		// echo $lastdate;echo date('y-m-d'); die();
		if($lastdate == date('y-m-d'))
		{
			$lastid = (int) substr($lastrecord, 9);
			$lastid += 1;
			$data['test_id'] = date('y-m-d-') . $lastid;
		}
		else
		{
			$data['test_id'] = date('y-m-d-') . '1001';
		}

		return $this->db->insert('tbl_test',$data);
		//return true;
	}

	public function TestUpdate($data)
	{

		$eventdata = array('test1' => $data['test1'],
			'test2' => $data['test2'],
			'test3' => $data['test3'],
			'test4' => $data['test4']			
		);
		$this->db->set($eventdata);
		$this->db->where('test_id',$data['test_id']);
		$this->db->update('tbl_test');				

	}

	public function getTest()
	{
		$this->db->select('*');
		$this->db->from('tbl_test');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getTestLast($id = null)
	{
		if(!is_null($id))
		{
			$this->db->like("test_id", $id);
		}

		$this->db->select('*');
		$this->db->from('tbl_test');
		$this->db->order_by('test_id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getTestbyId($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_test');
		$this->db->where('test_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	
	function delete_test($test_id) {
		$this->db->where('test_id', $test_id);
		$this->db->delete('tbl_test');
	}



	



}
