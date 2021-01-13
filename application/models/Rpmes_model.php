<?php
class Rpmes_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

	}
//login

	function Form1JoinRegister($agencyid)
	{
		$this->db->select('Agency_Name, UserType')
		->from('agency')
		->join('users', 'users.ID_Agency=agency.ID_Agency')
		->where(array('agency.ID_Agency' => $agencyid));
		$data = $this->db->get();
		return $data;
	}

	function Form1JoinView($projid)
	{
		$this->db->select('ProjectName, Location, Sector, FundingSource, ModeOfImplementation, ProjectScheduleStart, ProjectScheduleEnd')
		->from('project')
		->join('form1', 'project.ProjectID=form1.ProjectID', 'inner')
		->where('project.ProjectID', $projid);
		$data = $this->db->get();
		return $data->result();
	}

	function Form2JoinView()
	{
		$this->db->select('*')
		->from('project')
		->join('form2', 'project.ProjectID=form2.ProjectID', 'inner');
// ->where(array('project.ProjectID' => $agencyid));
		$data = $this->db->get();
		return $data->result();
	}

	function Form4JoinView()
	{
		$this->db->select('ProjectName')
		->from('project')
		->join('form4', 'project.ProjectID=form4.ProjectID', 'inner');
// ->where(array('project.ProjectID' => $agencyid));
		$data = $this->db->get();
		return $data->result();
	}

// SELECT Agency_Name FROM `agency` INNER JOIN `users` ON agency.ID_Agency=users.ID_Agency WHERE agency.`ID_Agency`="80";
//form 1P
	public function getForm1($projid)
	{
		$this->db->select('*');
		$this->db->from('form1');
		$this->db->where('ProjectID',$projid);
		$query = $this->db->get();
		return $query->result();
	}

	public function getAgency()
	{
		$this->db->select('*');
		$this->db->from('agency');
		$query = $this->db->get();
		return $query->result();
	}


	public function getForm1Last($id = null)
	{
		if (!is_null($id)) {
			$this->db->like("ID_Form1", $id);
		}

		$this->db->select_max('ID_Form1');
		$this->db->from('form1');
		$this->db->order_by('ID_Form1', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getForm1byId($ID_Form1)
	{
		$this->db->select('*');
		$this->db->from('form1');
		$this->db->where('ID_Form1', $ID_Form1);
		$query = $this->db->get();
		return $query->result();
	}



	//
	public function getProjectLast($id = null)
	{
		if (!is_null($id)) {
			$this->db->like("ProjectID", $id);
		}

		$this->db->select_max('ProjectID');
		$this->db->from('project');
		$this->db->order_by('ProjectID', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getProjectbyId($ID_Form1)
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('ProjectID', $ProjectID);
		$query = $this->db->get();
		return $query->result();
	}

	public function ApproveForm1($data)
	{
		$this->db->set(array('Confirmed' => $data['Confirmed']));
		$this->db->where('ID_Form1', $data['ID_Form1']);
		return $this->db->update('Form1');
	}

	public function Form1Register($data)
	{
		$result = $this->getForm1Last(date('ymd'));
// print_r($result);die();
		$lastrecord = $result[0]->ID_Form1;
		$lastdate = substr($lastrecord, 0, 6);
// echo $lastdate;echo date('y-m-d'); die();
		if ($lastdate == date('ymd')) {
			$lastid = (int)substr($lastrecord, 6);
			$lastid += 1;
			$data["form"]['ID_Form1'] = date('ymd') . $lastid;
		} else {
			$data["form"]['ID_Form1'] = date('ymd') . '1001';
		}

		if ($this->db->insert('project', $data["project"])) {
			$query = $this->db->query("SELECT LAST_INSERT_ID() AS 'ProjectID'");
			$result = $query->result();
			$data["form"]["ProjectID"] = $result[0]->ProjectID;
			return $this->db->insert('form1', $data["form"]);
		}
//return true;
	}




	public function TestUpdate($data)
	{

		$testdata = array(
			'test1' => $data['test1'],
			'test2' => $data['test2'],
			'test3' => $data['test3'],
			'test4' => $data['test4']
		);
		$this->db->set($testdata);
		$this->db->where('test_id', $data['test_id']);
		$this->db->update('tbl_test');
	}

	function Form1_Delete($ID_Form1)
	{
		$this->db->where('ID_Form1', $ID_Form1);
		$this->db->delete('form1');
	}
//end

//form 2
	public function getForm2()
	{
		$this->db->select('*');
		$this->db->from('form2');
		$query = $this->db->get();
		return $query->result();
	}

	public function getForm2Last($id = null)
	{
		if (!is_null($id)) {
			$this->db->like("ID_Form2", $id);
		}

		$this->db->select_max('ID_Form2');
		$this->db->from('form2');
		$this->db->order_by('ID_Form2', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getForm2byId($id)
	{
		$this->db->select('*');
		$this->db->from('form2');
		$this->db->where('ID_Form2', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function Form2Register($data)
	{
		$result = $this->getForm2Last(date('ymd'));
// print_r($result);die();
		$lastrecord = $result[0]->ID_Form2;
		$lastdate = substr($lastrecord, 0, 6);
// echo $lastdate;echo date('y-m-d'); die();
		if ($lastdate == date('ymd')) {
			$lastid = (int)substr($lastrecord, 6);
			$lastid += 1;
			$data['ID_Form2'] = date('ymd') . $lastid;
		} else {
			$data['ID_Form2'] = date('ymd') . '1001';
		}

		return $this->db->insert('form2', $data);
//return true;

} //end

//form 3
public function getForm3()
{
	$this->db->select('*');
	$this->db->from('form3');
	$query = $this->db->get();
	return $query->result();
}

public function getForm3Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form3", $id);
	}

	$this->db->select_max('ID_Form3');
	$this->db->from('form3');
	$this->db->order_by('ID_Form3', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm3byId($id)
{
	$this->db->select('*');
	$this->db->from('form3');
	$this->db->where('ID_Form3', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form3Register($data)
{
	$result = $this->getForm3Last(date('ymd'));
// print_r($result);die();
	$lastrecord = $result[0]->ID_Form3;
	$lastdate = substr($lastrecord, 0, 6);
// echo $lastdate;echo date('y-m-d'); die();
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form3'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form3'] = date('ymd') . '1001';
	}

	return $this->db->insert('form3', $data);
//return true;

} //end


//form 4
public function getForm4()
{
	$this->db->select('*');
	$this->db->from('form4');
	$query = $this->db->get();
	return $query->result();
}

public function getForm4Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form4", $id);
	}

	$this->db->select_max('ID_Form4');
	$this->db->from('form4');
	$this->db->order_by('ID_Form4', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm4byId($id)
{
	$this->db->select('*');
	$this->db->from('form4');
	$this->db->where('ID_Form4', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form4Register($data)
{
	$result = $this->getForm4Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form4;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form4'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form4'] = date('ymd') . '1001';
	}

	return $this->db->insert('form4', $data);
//return true;

} //end

public function getForm7Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form7", $id);
	}

	$this->db->select_max('ID_Form7');
	$this->db->from('form7');
	$this->db->order_by('ID_Form7', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm7byId($id)
{
	$this->db->select('*');
	$this->db->from('form7');
	$this->db->where('ID_Form7', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form7Register($data)
{
	$result = $this->getForm7Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form7;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form7'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form7'] = date('ymd') . '1001';
	}

	return $this->db->insert('form7', $data);
//return true;

} //end

public function getForm8Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form8", $id);
	}

	$this->db->select_max('ID_Form8');
	$this->db->from('form8');
	$this->db->order_by('ID_Form8', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm8byId($id)
{
	$this->db->select('*');
	$this->db->from('form8');
	$this->db->where('ID_Form8', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form8Register($data)
{
	$result = $this->getForm8Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form8;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form8'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form8'] = date('ymd') . '1001';
	}

	return $this->db->insert('form8', $data);
//return true;

} //end

public function getForm9Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form9", $id);
	}

	$this->db->select_max('ID_Form9');
	$this->db->from('form9');
	$this->db->order_by('ID_Form9', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm9byId($id)
{
	$this->db->select('*');
	$this->db->from('form9');
	$this->db->where('ID_Form9', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form9Register($data)
{
	$result = $this->getForm9Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form9;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form9'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form9'] = date('ymd') . '1001';
	}

	return $this->db->insert('form9', $data);
//return true;

} //end

public function getForm10Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form10", $id);
	}

	$this->db->select_max('ID_Form10');
	$this->db->from('form10');
	$this->db->order_by('ID_Form10', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm10byId($id)
{
	$this->db->select('*');
	$this->db->from('form9');
	$this->db->where('ID_Form10', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form10Register($data)
{
	$result = $this->getForm10Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form10;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form10'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form10'] = date('ymd') . '1001';
	}

	return $this->db->insert('form10', $data);
//return true;

} //end

//ito
public function getForm11Last($id = null)
{
	if (!is_null($id)) {
		$this->db->like("ID_Form11", $id);
	}

	$this->db->select_max('ID_Form11');
	$this->db->from('form11');
	$this->db->order_by('ID_Form11', 'DESC');
	$this->db->limit(1);
	$query = $this->db->get();
	return $query->result();
}

public function getForm11byId($id)
{
	$this->db->select('*');
	$this->db->from('form1');
	$this->db->where('ID_Form11', $id);
	$query = $this->db->get();
	return $query->result();
}

public function Form11Register($data)
{
	$result = $this->getForm11Last(date('ymd'));
	$lastrecord = $result[0]->ID_Form11;
	$lastdate = substr($lastrecord, 0, 6);
	if ($lastdate == date('ymd')) {
		$lastid = (int)substr($lastrecord, 6);
		$lastid += 1;
		$data['ID_Form11'] = date('ymd') . $lastid;
	} else {
		$data['ID_Form11'] = date('ymd') . '1001';
	}

	return $this->db->insert('form11', $data);
//return true;

} //end

public function getSector()
{
	$this->db->select('*');
	$this->db->from('sector');
	$query = $this->db->get();
	return $query->result();
}

public function getFundingSource()
{
	$this->db->select('*');
	$this->db->from('fundingsource');
	$query = $this->db->get();
	return $query->result();
}

public function getModeOfImplementation()
{
	$this->db->select('*');
	$this->db->from('implementation');
	$query = $this->db->get();
	return $query->result();
}

public function getProjectlist()
{
	$this->db->select('*');
	$this->db->from('project');
	$query = $this->db->get();
	return $query->result();
}

public function getProject($projid)
{
	$this->db->select('*');
	$this->db->from('project');
	$this->db->where('ProjectID', $projid);
	$query = $this->db->get();
	return $query->result();
}

public function CountProject()
{
	$this->db->select('*');
	$this->db->from('project');
	$query = $this->db->get();
	return $query->result();
}

public function getUsers()
{
	$this->db->select('*');
	$this->db->from('users');
	$query = $this->db->get();
	return $query->result();
}

public function getUsersArchive()
{
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where('Archive',1);
	$query = $this->db->get();
	return $query->result();
}



// 	function Form1JoinView()
// 	{
// 		$this->db->select('ProjectName, Location, Sector, FundingSource, ModeOfImplementation, ProjectScheduleStart, ProjectScheduleEnd')
// 		->from('project')
// 		->join('form1', 'project.ProjectID=form1.ProjectID', 'inner');
// // ->where(array('project.ProjectID' => $agencyid));
// 		$data = $this->db->get();
// 		return $data->result();
// 	}

public function getUsersId($ID_User)
{
	$this->db->select('*');
	$this->db->from('form1');
	$this->db->where('ID_Form1', $ID_User);
	$query = $this->db->get();
	return $query->result();
}

public function UserRegister($data)
{
	return $this->db->insert('users', $data);
}


public function UserUpdate($data)
{

	$data = array(
		'ID_User' => $data['ID_User'],
		'FName' => $data['FName'],
		'MName' => $data['MName'],
		'LName' => $data['LName'],
		'Office' => $data['Office'],
		'Email' => $data['Email'],
		'UName' => $data['UName'],
		'Pwd' => $data['Pwd'],
		'ID_Agency' => $data['ID_Agency']
	);
	$this->db->set($data);
	$this->db->where('ID_User', $data['ID_User']);
	return $this->db->update('users');
}

public function UserDisable($data)
{

	$data = array(
		'ID_User' => $data['ID_User'],
		'Confirmed' => $data['Confirmed']
	);
	$this->db->set($data);
	$this->db->where('ID_User', $data['ID_User']);
	return $this->db->update('users');
}

public function UserArchive($data)
{

	$data = array(
		'ID_User' => $data['ID_User'],
		'Archive' => $data['Archive'],
		'Confirmed' => $data['Confirmed'],

	);
	$this->db->set($data);
	$this->db->where('ID_User', $data['ID_User']);
	return $this->db->update('users');
}

public function Users_Delete($ID_User)
{
	$this->db->where('ID_User', $ID_User);
	return $this->db->delete('users');
}

public function Users_count()
{
	$this->db->select("count(ID_User) AS 'id'");
	$this->db->from('users');
	$query = $this->db->get();
	return $query->row_array();
}

public function pending_count()
{
	$this->db->select("*");
	$this->db->from('form1');
	$this->db->where('Confirmed', 0);
	$query = $this->db->get();
	return $query->num_rows();
}



public function datatable_archive($columns_searchable = array(), $columns_orderable = array(), $select = "*", $table = "", $limit = null, $offset = 0, $order = array(), $search = "")
{
	$this->db->select($select)->from($table)->where("Archive", 1)->limit($limit, $offset)->order_by($columns_orderable[$order[0]["column"]], $order[0]["dir"]);

	if ($search != "") {
		$this->db->group_start();	
		foreach ($columns_searchable as $key => $value) {
			$this->db->or_like($value, $search);
		}
		$this->db->group_end();
	}

	$query = $this->db->get();
	$rows = $query->result_array();
	return $rows;
}

public function datatable_form1($columns_searchable = array(), $columns_orderable = array(), $select = "*", $table = "", $limit = null, $offset = 0, $order = array(), $search = "")
{
	$this->db->select($select)->from($table)->join('form1', 'project.ProjectID=form1.ProjectID', 'inner')->limit($limit, $offset)->order_by($columns_orderable[$order[0]["column"]], $order[0]["dir"]);

	if ($search != "") {
		$this->db->group_start();	
		foreach ($columns_searchable as $key => $value) {
			$this->db->or_like($value, $search);
		}
		$this->db->group_end();
	}

	$query = $this->db->get();
	$rows = $query->result_array();
	return $rows;
}

public function datatable($limit = null, $offset = 0, $order = array(), $search = "")
{
// $this->set_default();
	$columns = array(
		"FName", "MName", "LName"
	);

	$columns_orderable = array(
		0 => "FName",
		1 => "Mname",
		2 => "LName",
		3 => "Office",
		4 => "Email",
		5 => "UName",
		7 => "Confirmed",
		8 => "Agency_Name"
	);

// $this->db->select("FName, MName, LName, Office, Email, UName, Confirmed")->from('users')->limit($limit, $offset);
	
	// $this->db->select("users.ID_User AS 'ID_User',FName, MName, LName, Office, Email, UName, Confirmed, Agency_Name, agency.ID_Agency AS 'ID_Agency'")->from('users')->where('Archieve',0)->where_not_in('users.ID_User', array($this->session->ID_User))->join('agency', 'users.ID_Agency=agency.ID_Agency')->limit($limit, $offset)->order_by($columns_orderable[$order[0]["column"]], $order[0]["dir"]);

	$this->db->select("users.ID_User AS 'ID_User',FName, MName, LName, Office, Email, UName, Confirmed, Agency_Name, agency.ID_Agency AS 'ID_Agency'");
	$this->db->from('users')->where('Archive',0);
	$this->db->join('agency', 'users.ID_Agency=agency.ID_Agency');
	$this->db->limit($limit, $offset);
	$this->db->order_by($columns_orderable[$order[0]["column"]], $order[0]["dir"]);

	if ($search != "") {
		$this->db->group_start();
		foreach ($columns as $key => $value) {
			$this->db->or_like($value, $search);
		}
		$this->db->group_end();
	}

	$query = $this->db->get();
	$rows = $query->result_array();
	return $rows;
}

public function save_logs($logdata)
{	

	$id = $this->session->userdata('ID_User');	
	date_default_timezone_set("Asia/Manila");				
	$this->db->insert(
		'logs',
		array(
			'ID_User' => $id,
			'text' => $logdata['text'],
			'datelogs' => date('Y-m-d H:i:a'),
			'Remote_IP_Address' => $logdata['Remote_IP_Address'],
			'Remote_Mac_Address' => $logdata['Remote_Mac_Address']
		)

	);
	return $this->db->affected_rows();
}

public function getLogs()
{
	$this->db->select('*');
	$this->db->from('logs');
	$this->db->order_by("ID_Logs","desc");
	$this->db->limit(10);
	$query = $this->db->get();
	return $query->result();
}

public function getAllActivityLogs()
{
	$this->db->select('*');
	$this->db->from('logs');
	$this->db->order_by("ID_Logs","desc");
	$query = $this->db->get();
	return $query->result();
}

public function getMonthYear($Month,$Year)
{
	$this->db->select('*');
	$this->db->from('project');
	$this->db->where("YEAR(ProjectScheduleStart)", $Year);
	$this->db->where("month(ProjectScheduleStart)", $Month);
	$query = $this->db->get();
	return $query->result();
}

public function getAllArchive($Archive)
{
	$this->db->query('set @InputArchive');
	$query = $this->db->query("CALL SP_GetAllArchiveForm(@InputArchive)");
	return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form1');
	// $this->db->join('project', 'form1.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form2');
	// $this->db->join('project', 'form2.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form3');
	// $this->db->join('project', 'form3.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form4');
	// $this->db->join('project', 'form4.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form5');
	// $this->db->join('project', 'form5.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form6');
	// $this->db->join('project', 'form6.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form7');
	// $this->db->join('project', 'form7.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
	// $this->db->select('ProjectName,Location,Sector,FundingSource,ModeOfImplementation,ProjectScheduleStart,ProjectScheduleEnd');
	// $this->db->from('form8');
	// $this->db->join('project', 'form8.ProjectID=project.ProjectID')
	// $this->db->where("Archive", $Archive);
	// $query = $this->db->get();
	// return $query->result();
}

}//end