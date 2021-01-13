<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once(APPPATH . "controllers/Rpmes_login_controller.php");

// class Rpmes_controller extends Rpmes_login_controller
class Rpmes_controller extends CI_Controller

{

	function __construct()
	{

		parent::__construct();

		if ($this->session->UName == NULL){
			$this->session->set_flashdata('SUCCESSMSG', 'Please Login');
			redirect('login');

		}else{
			
			if ($this->session->Confirmed == 1) {
				$this->session->unset_userdata('UName'); 
				$this->session->set_flashdata('FAILMSG', 'Your Account is Inactive');
				redirect('login');
			}
		}
	}

	public function test()
	{
		$key = bin2hex($this->encryption->create_key(16));
		echo $key;
	}


	public function Users_Archive_List()
	{

		$this->load->view('userarchivelist');
	}

	public function datatable_users_archive()
	{
		$data = $this->input->post();

		// To be changed
		$columns_searchable = array(
			"FName"
		);

		// To be changed
		$columns_orderable = array(
			"FName","LName","UName","MName"
		);

		$output = $this->Rpmes_model->datatable_archive(
			$columns_searchable,
			$columns_orderable, 
			"ID_User, FName, LName,UName,MName", // Columns in database (To be changed)
			"users", // Table (To be changed)
			$data["length"],
			$data["start"],
			$data["order"],
			$data["search"]["value"]
		);
		$recordsTotal = count($this->Rpmes_model->getUsersArchive());
		echo json_encode(array(
			"data" => $output,
			"draw" => $data["draw"],
			"recordsTotal" => $recordsTotal,
			"recordsFiltered" => $data['search']['value'] != "" ? count($output) : $recordsTotal
		));
	}

	public function datatable_form1()
	{
		$data = $this->input->post();

		// To be changed
		$columns_searchable = array(
			"ProjectName,Location,Sector,FundingSource"
		);

		// To be changed
		$columns_orderable = array(
			"ProjectName,Location,Sector,FundingSource"
		);

		$output = $this->Rpmes_model->datatable_form1(
			$columns_searchable,
			$columns_orderable, 
			"*", // Columns in database (To be changed)
			"project", // Table (To be changed)
			$data["length"],
			$data["start"],
			$data["order"],
			$data["search"]["value"]
		);
		$recordsTotal = count($this->Rpmes_model->getUsersArchive());
		echo json_encode(array(
			"data" => $output,
			"draw" => $data["draw"],
			"recordsTotal" => $recordsTotal,
			"recordsFiltered" => $data['search']['value'] != "" ? count($output) : $recordsTotal
		));
	}

	public function index()
	{

		// $row[""]
		$data = array(
			'row' => $this->Rpmes_model->Users_count(),
			'getLogs' => $this->Rpmes_model->getLogs()
		);

		$this->load->view('dashboard', $data);
	}

	public function AllActivityLogs()
	{

		$data['getAllActivityLogs'] = $this->Rpmes_model->getAllActivityLogs();
		$this->load->view('allactivitylogs', $data);
	}

//Form1

	public function MonthYear()
	{
		$month = date('m', strtotime($this->input->post("MonthYear")));
		$year = date('Y', strtotime($this->input->post("MonthYear")));
		echo json_encode($this->Rpmes_model->getMonthYear($month,$year));

	}

	public function logging($text)
	{
		$string=exec('getmac');
		

		$whoami = $this->session->UName;
		$logs = "Account $whoami $text";
		$logdata['text'] =  $logs;
		$logdata['Remote_IP_Address'] =  $this->input->ip_address();
		$logdata['Remote_Mac_Address'] =  $mac=substr($string, 0, 17); 
		$this->Rpmes_model->save_logs($logdata);
	}


// 	public function Form1()
// 	{

// // $this->load->view('header/admin_banner');
// 		$data = array(
// 			'getForm1' => $this->Rpmes_model->getForm1(),
// 			'getProject' => $this->Rpmes_model->Form1JoinView()
// 		);

// 		$this->load->view('form1_view', $data);
// 		$logtext = "Submitted  Form1 ";
// 		$this->logging($logtext);

// 	}

	public function Form1_fuck()
	{
		$projid = $this->input->get('id');
// $this->load->view('header/admin_banner');
		$data = array(
			'getForm1' => $this->Rpmes_model->getForm1($projid),
			'Form1JoinView' => $this->Rpmes_model->Form1JoinView($projid)
		);

		$this->load->view('form1_print', $data);


	}

	public function Form1()
	{
		$this->load->view('datatable/form1_datatable');
	}

	public function Form1_Register()
	{
		if ($this->Rpmes_model->pending_count() > 0)
		{
			echo '<script type="text/javascript">
			window.onload = function () { alert("Oops there is still a pending project to be confirmed"); 
			window.location.href="Form1";}
			</script>';
						// redirect('Rpmes_controller/Form1');    
		}
		$data = array(
			'getSector' => $this->Rpmes_model->getSector(),
			'getFundingSource' => $this->Rpmes_model->getFundingSource(),
			'getModeOfImplementation' => $this->Rpmes_model->getModeOfImplementation(),
		);
		$this->load->view('add/form1_register', $data);

		if (!empty($_POST)) {

			$data =  array(
				"project" => array(
					'ProjectName' => $this->input->post('ProjectName'),
					'Location' => $this->input->post('Location'),
					'sector' => $this->input->post('Sector'),
					'FundingSource' => $this->input->post('FundingSource'),
					'ModeOfImplementation' => $this->input->post('ModeOfImplementation'),
					'ProjectScheduleStart' => $this->input->post('ProjectScheduleStart'),
					'ProjectScheduleEnd' => $this->input->post('ProjectScheduleEnd')
				),

				"form" => array(	
					'Submitted_by' => $this->session->ID_User,
					'CurrentYear' => date('Y'),
					'Submitted_Date' => date('Y/m/d'),
					'FS_Jan' => $this->input->post('FS_Jan'),
					'FS_Feb' => $this->input->post('FS_Feb'),
					'FS_Mar' => $this->input->post('FS_Mar'),
					'FS_Apr' => $this->input->post('FS_Apr'),
					'FS_May' => $this->input->post('FS_May'),
					'FS_Jun' => $this->input->post('FS_Jun'),
					'FS_Jul' => $this->input->post('FS_Jul'),
					'FS_Aug' => $this->input->post('FS_Aug'),
					'FS_Sep' => $this->input->post('FS_Sep'),
					'FS_Oct' => $this->input->post('FS_Oct'),
					'FS_Nov' => $this->input->post('FS_Nov'),
					'FS_Dec' => $this->input->post('FS_Dec'),
					'FS_Total' => $this->input->post('FS_Total'),
					'Percentage_Jan' => $this->input->post('Percentage_Jan'),
					'Percentage_Feb' => $this->input->post('Percentage_Feb'),
					'Percentage_Mar' => $this->input->post('Percentage_Mar'),
					'Percentage_Apr' => $this->input->post('Percentage_Apr'),
					'Percentage_May' => $this->input->post('Percentage_May'),
					'Percentage_Jun' => $this->input->post('Percentage_Jun'),
					'Percentage_Jul' => $this->input->post('Percentage_Jul'),
					'Percentage_Aug' => $this->input->post('Percentage_Aug'),
					'Percentage_Sep' => $this->input->post('Percentage_Sep'),
					'Percentage_Oct' => $this->input->post('Percentage_Oct'),
					'Percentage_Nov' => $this->input->post('Percentage_Nov'),
					'Percentage_Dec' => $this->input->post('Percentage_Dec'),
					'Percentage_Total' => $this->input->post('Percentage_Total'),
					'OI_Jan' => $this->input->post('OI_Jan'),
					'OI_Feb' => $this->input->post('OI_Feb'),
					'OI_Mar' => $this->input->post('OI_Mar'),
					'OI_Apr' => $this->input->post('OI_Apr'),
					'OI_May' => $this->input->post('OI_May'),
					'OI_Jun' => $this->input->post('OI_Jun'),
					'OI_Jul' => $this->input->post('OI_Jul'),
					'OI_Aug' => $this->input->post('OI_Aug'),
					'OI_Sep' => $this->input->post('OI_Sep'),
					'OI_Oct' => $this->input->post('OI_Oct'),
					'OI_Nov' => $this->input->post('OI_Nov'),
					'OI_Dec' => $this->input->post('OI_Dec'),
					'OI_Total' => $this->input->post('OI_Total'),
					'EG_M_Jan' => $this->input->post('EG_M_Jan'),
					'EG_F_Jan' => $this->input->post('EG_F_Jan'),
					'EG_M_Feb' => $this->input->post('EG_M_Feb'),
					'EG_F_Feb' => $this->input->post('EG_F_Feb'),
					'EG_M_Mar' => $this->input->post('EG_M_Mar'),
					'EG_F_Mar' => $this->input->post('EG_F_Mar'),
					'EG_M_Apr' => $this->input->post('EG_M_Apr'),
					'EG_F_Apr' => $this->input->post('EG_F_Apr'),
					'EG_M_May' => $this->input->post('EG_M_May'),
					'EG_F_May' => $this->input->post('EG_F_May'),
					'EG_M_Jun' => $this->input->post('EG_M_Jun'),
					'EG_F_Jun' => $this->input->post('EG_F_Jun'),
					'EG_M_Jul' => $this->input->post('EG_M_Jul'),
					'EG_F_Jul' => $this->input->post('EG_F_Jul'),
					'EG_M_Aug' => $this->input->post('EG_M_Aug'),
					'EG_F_Aug' => $this->input->post('EG_F_Aug'),
					'EG_M_Sep' => $this->input->post('EG_M_Sep'),
					'EG_F_Sep' => $this->input->post('EG_F_Sep'),
					'EG_M_Oct' => $this->input->post('EG_M_Oct'),
					'EG_F_Oct' => $this->input->post('EG_F_Oct'),
					'EG_M_Nov' => $this->input->post('EG_M_Nov'),
					'EG_F_Nov' => $this->input->post('EG_F_Nov'),
					'EG_M_Dec' => $this->input->post('EG_M_Dec'),
					'EG_F_Dec' => $this->input->post('EG_F_Dec'),
					'EG_F_Total' => $this->input->post('EG_F_Total'),
					'EG_M_Total' => $this->input->post('EG_M_Total')
				),
			);


// var_dump($data);die;

// var_dump($data);
$this->Rpmes_model->Form1Register($data);
redirect('Rpmes_controller/Form1');
}
} //end

public function Approve_Form1()
{
	$ID_Form1 = $this->input->get('ID_Form1');
	$data['getForm1'] = $this->Rpmes_model->getForm1byId($ID_Form1);
	$this->load->view('update_test', $data);
}


public function ApproveForm1()
{

	$data =  array(
		'ID_Form1' => $this->input->post('ID_Form1'),
		'Confirmed' => $this->input->post('Approve'),
	);

	$this->Rpmes_model->ApproveForm1($data);
	redirect('Rpmes_controller/Form1');

}

function Form1_Delete()
{
	$ID_Form1 = $this->input->get('ID_Form1');
	$this->load->model('Rpmes_model');
	$this->Rpmes_model->Form1_Delete($ID_Form1);
	redirect('Test_controller/ViewTest');
}

function Backend_Form1_Delete()
{
	$ID_Form1 = $this->input->post('ID_Form1');
	$this->load->model('Rpmes_model');
	$this->Rpmes_model->Form1_Delete($ID_Form1);
	$this->session->set_flashdata('SUCCESSMSG_DELETE', 'You have Successful Delete a record');
	redirect('Rpmes_controller/B_Form1_View');
}

/////////////////////////////////////////////////////////////////|form2|//////////////////////////////////////////////////////////////

// public function Form2()
// {
// 	if (!empty($_POST)) {
// 		$data =  array(
// 			'ID_Agency' => "80",
// 			'FName' => $this->input->post('FName'),
// 			'MName' => $this->input->post('MName'),
// 			'LName' => $this->input->post('LName'),
// 		);
// 		if ($this->Rpmes_model->UserRegister($data)) {
// // echo $this->session->flashdata('item');
// 			echo "success";
// 		} else {
// 			echo "failed";
// 		}
// 	} else {
// 		$data['getUsers'] = $this->Rpmes_model->getUsers();
// 		$this->load->view('register', $data);
// 	}
// }

// public function Form2TableRecord()
// {
// 	$data = $this->Rpmes_model->getUsers();
// 	$output = "";
// 	foreach ($data as $row) {
// 		$output .= "<tr>
// 		<td>$row->FName</td>
// 		<td>$row->MName</td>
// 		<td>$row->LName</td>
// 		</tr>";
// 	}
// 	echo $output;
// }

public function Form2()
{
	$data = array(
		'getForm2' => $this->Rpmes_model->getForm2(),
		'getProject' => $this->Rpmes_model->Form2JoinView()
	);
	$this->load->view('Form2_view',$data);
}


public function Form2_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'ProjectID' => $this->input->post('ProjectID'),
			'AllocationPeriod' => $this->input->post('AllocationPeriod'),
			'AllocationMonth' => $this->input->post('AllocationMonth'),
			'ReleasesPeriod' => $this->input->post('ReleasesPeriod'),
			'ReleasesMonth' => $this->input->post('ReleasesMonth'),
			'ObligationPeriod' => $this->input->post('ObligationPeriod'),
			'ObligationMonth' => $this->input->post('ObligationMonth'),
			'Dis_Period' => $this->input->post('Dis_Period'),
			'	' => $this->input->post('Dis_Month'),
			'Oi' => $this->input->post('Oi'),
			'Target_to_Date' => $this->input->post('Target_to_Date'),
			'Target_for_Month' => $this->input->post('Target_for_Month'),
			'Actual_to_Date' => $this->input->post('Actual_to_Date'),
			'Actual_for_Month' => $this->input->post('Actual_for_Month'),
			'EG_M' => $this->input->post('EG_M'),
			'EG_F' => $this->input->post('EG_F'),
			'Remarks' => $this->input->post('Remarks'),
		);
		$this->Rpmes_model->Form2Register($data);
		redirect('Rpmes_controller/Form2');
	} else {
		$data['getTest'] = $this->Rpmes_model->getForm2();
//$this->load->view('add/form_2_p2', $data);
		$this->load->view('add/Form2_Register', $data);
		$logtext = "Submitted  Form1 ";
		$this->logging($logtext);
	}
} //end

/////////////////////////////////////////////////////////////////|form3|//////////////////////////////////////////////////////////////

public function form3()
{
	$data['getForm3'] = $this->Rpmes_model->getForm3();
	$this->load->view('form3_view',$data);

}




public function Form3_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'Submitted_Date' => date('y-m-d'),
			'ProjectID' => $this->input->post('ProjectID'),
			'Findings' => $this->input->post('Findings'),
			'ReasonCause' => $this->input->post('ReasonCause'),
			'Recommendation' => $this->input->post('Recommendation'),
		);
		$this->Rpmes_model->Form3Register($data);
		redirect('Rpmes_controller/Form3');
	} else {
//echo ($this->input->post('data-id'));
		$data['getProjectlist'] = $this->Rpmes_model->getProjectlist();
		$this->load->view('add/Form3_Register', $data);
	}
} //end

public function getProject()
{
	$projId = $this->input->post('ProjectID');
	echo json_encode($this->Rpmes_model->getProject($projId)[0]);
}


/////////////////////////////////////////////////////////////////|Form4|/////////////////////////////////////////////////////////

public function form4()
{
	$data = array(
		'getForm4' => $this->Rpmes_model->getForm4(),
		'getProject' => $this->Rpmes_model->Form4JoinView()
	);
	$this->load->view('form4_view',$data);	
	// var_dump($data);die;
}

public function Form4_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'ProjectID' => $this->input->post('ProjectID'),
			'Proj_Obj' => $this->input->post('Proj_Obj'),
			'res_Indi' => $this->input->post('res_Indi'),
			'Observed_res' => $this->input->post('Observed_res'),
		);

		$this->Rpmes_model->Form4Register($data);
		redirect('Rpmes_controller/Form4');
	} else {
//echo ($this->input->post('data-id'));
		$data['getProjectlist'] = $this->Rpmes_model->getProjectlist();
		$this->load->view('add/Form4_Register', $data);
	}
} //end

/////////////////////////////////////////////////////////////////|Form7|/////////////////////////////////////////////////////////

public function Form7_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'ProjectID' => $this->input->post('ProjectID'),
			'Location' => $this->input->post('Location'),
			'Agency' => $this->input->post('Agency'),
			'DateFieldVisit' => $this->input->post('DateFieldVisit'),
			'Major_Findings' => $this->input->post('Major_Findings'),
			'Issues' => $this->input->post('Issues'),
			'Recommendations' => $this->input->post('Recommendations')
		);

		$this->Rpmes_model->Form7Register($data);
		redirect('Rpmes_controller/');
	} else {
//echo ($this->input->post('data-id'));
		$data['getProjectlist'] = $this->Rpmes_model->getProjectlist();
		$this->load->view('add/Form7_Register', $data);
	}
}

/////////////////////////////////////////////////////////////////|Form8|/////////////////////////////////////////////////////////

public function Form8_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'ID_User'  => $this->session->userdata('ID_User'),
			'Np' => $this->input->post('Np'),
			'Location' => $this->input->post('Location'),
			'Agency' => $this->input->post('Agency'),
			'Date_pss' => $this->input->post('Date_pss'),
			'Concerned_Agency' => $this->input->post('Concerned_Agency'),
			'Agreements' => $this->input->post('Agreements'),
			'ActionTaken' => $this->input->post('ActionTaken'),

		);

		$this->Rpmes_model->Form8Register($data);
		redirect('Rpmes_controller/');
	} else {
//echo ($this->input->post('data-id'));
		$this->load->view('add/Form8_Register');
	}
}

/////////////////////////////////////////////////////////////////|Form9|/////////////////////////////////////////////////////////

public function Form9_Register()
{
	if (!empty($_POST)) {
		$data =  array(
			'ID_User'  => $this->session->userdata('ID_User'),
			'Date_F9' => $this->input->post('Date_F9'),
			'Objectives' => $this->input->post('Objectives'),
			'Lead_Office' => $this->input->post('Lead_Office'),
			'Participating_Offices' => $this->input->post('Participating_Offices'),
			'Male' => $this->input->post('Male'),
			'Female' => $this->input->post('Female')

		);

		$this->Rpmes_model->Form9Register($data);
		redirect('Rpmes_controller/');
	} else {
//echo ($this->input->post('data-id'));
		$this->load->view('add/Form9_Register');
	}
}


////////////////////////////////////////////////////////////////|Form10|/////////////////////////////////////////////////////////

public function Form10_Register()
{
	date_default_timezone_set("Asia/Manila");	

	if (!empty($_POST)) {
		$data =  array(
			'ID_User'  => $this->session->userdata('ID_User'),
			'ResolutionNo' => $this->input->post('ResolutionNo'),
			'ResolutionTitle' => $this->input->post('ResolutionTitle'),
			'Date_Approved' => $this->input->post('Date_Approved'),
			'Actions' => $this->input->post('Actions'),
			'Date_sub' => date('Y-m-d')

		);

		$this->Rpmes_model->Form10Register($data);
		redirect('Rpmes_controller/');
	} else {
//echo ($this->input->post('data-id'));
		$this->load->view('add/Form10_Register');
	}
}

////////////////////////////////////////////////////////////////|Form11|/////////////////////////////////////////////////////////

public function Form11_Register()
{
	date_default_timezone_set("Asia/Manila");	

	if (!empty($_POST)) {
		$data =  array(
			'ID_User'  => $this->session->userdata('ID_User'),
			'ProgramTitle' => $this->input->post('ProgramTitle'),
			'Location' => $this->input->post('Location'),
			'Agency' => $this->input->post('Agency'),
			'Nature' => $this->input->post('Nature'),
			'Details' => $this->input->post('Details'),
			'Strategies' => $this->input->post('Strategies'),
			'Responsible' => $this->input->post('Responsible'),
			'Lessons' => $this->input->post('Lessons'),
			'Date_sub' => date('Y-m-d')

		);

		$this->Rpmes_model->Form11Register($data);
		redirect('Rpmes_controller/');
	} else {
//echo ($this->input->post('data-id'));
		$this->load->view('add/Form11_Register');
	}
}

/////////////////////////////////////////////////////////////////|Users|/////////////////////////////////////////////////////////

public function users()
{
	$data['getAgency'] = $this->Rpmes_model->getAgency();
	$this->load->view('user_view', $data);


}

public function UsersTableRecord()
{
	$data = $this->input->post();
	$output = $this->Rpmes_model->datatable(
		$data["length"],
		$data["start"],
		$data["order"],
		$data["search"]["value"]
	);
	$recordsTotal = count($this->Rpmes_model->getUsers());
	echo json_encode(array(
		"data" => $output,
		"draw" => $data["draw"],
		"recordsTotal" => $recordsTotal,
		"recordsFiltered" => $data['search']['value'] != "" ? count($output) : $recordsTotal
	));



}


// $this->db->count_all("form1");

public function Add_User()
{
	$adddata =  array(
		'FName' => $this->input->post('FName'),
		'MName' => $this->input->post('MName'),
		'LName' => $this->input->post('LName'),
		'Office' => $this->input->post('Office'),
		'Email' => $this->input->post('Email'),
		'UName' => $this->input->post('UName'),
		'Pwd' => $this->encryption->encrypt(password_hash($this->input->post('Pwd'), PASSWORD_ARGON2ID)),
		// 'Pwd' => password_hash($this->input->post('Pwd'), PASSWORD_ARGON2ID),
		'ID_Agency' => $this->input->post('Agency')
	);

	if ($this->Rpmes_model->UserRegister($adddata)) {
		echo json_encode(array("success" => true, "message" => "Add successfully"));
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Add"));
	}
}

public function Update_User()
{
	$data =  array(
		'ID_User' => $this->input->post('ID_User'),
		'FName' => $this->input->post('FName'),
		'MName' => $this->input->post('MName'),
		'LName' => $this->input->post('LName'),
		'Office' => $this->input->post('Office'),
		'Email' => $this->input->post('Email'),
		'UName' => $this->input->post('UName'),
		'Confirmed' => $this->input->post('Confirmed'),
		'Pwd' => $this->encryption->encrypt(password_hash($this->input->post('Pwd'), PASSWORD_ARGON2ID)),
		// 'Pwd' => password_hash($this->input->post('Pwd'), PASSWORD_ARGON2ID),	
		'ID_Agency' => $this->input->post('Agency')
	);


	if ($this->Rpmes_model->UserUpdate($data)) {
		echo json_encode(array("success" => true, "message" => "Updated successfully"));
		$logtext = "Edited UserID " . $data['ID_User'];
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Update"));
		$logtext = "Failed in editing " . $data['ID_User'];
	}
	$this->logging($logtext);
}


public function Disable_User()
{
	$data =  array(
		'ID_User' => $this->input->post('ID_User'),
		'Confirmed' => $this->input->post('Confirmed')
	);



	if ($this->Rpmes_model->UserDisable($data)) {
		echo json_encode(array("success" => true, "message" => "Disable successfully"));
		$logtext = "Edited UserID " . $data['ID_User'];
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Disable"));
		$logtext = "Failed in editing " . $data['ID_User'];
	}
	$this->logging($logtext);
}

public function Enable_User()
{
	$data =  array(
		'ID_User' => $this->input->post('ID_User'),
		'Confirmed' => $this->input->post('Confirmed')
	);



	if ($this->Rpmes_model->UserDisable($data)) {
		echo json_encode(array("success" => true, "message" => "Enable successfully"));
		$logtext = "Edited UserID " . $data['ID_User'];
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Enable"));
		$logtext = "Failed in editing " . $data['ID_User'];
	}
	$this->logging($logtext);
}


function Users_Delete()
{
	$ID_User = $this->input->post('ID_User');
	// $this->load->model('Rpmes_model');
	if ($this->Rpmes_model->Users_Delete($ID_User)) {
		echo json_encode(array("success" => true, "message" => "Delete successfully"));
		$logtext = "Deleted UserID " . $ID_User;
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Delete"));
		$logtext = "Failed in deleting " . $ID_User;
	}
	$this->logging($logtext);
}

public function Archive_User()
{
	$data =  array(
		'ID_User' => $this->input->post('ID_User'),
		'Archive' => $this->input->post('Archive'),
		'Confirmed' => $this->input->post('Confirmed')
	);

	// $this->load->model('Rpmes_model');

	if ($this->Rpmes_model->UserArchive($data)) {
		echo json_encode(array("success" => true, "message" => "Delete successfully"));
		$logtext = "Delete UserID " . $data['ID_User'];
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Delete"));
		$logtext = "Failed in Delete " . $data['ID_User'];
	}
	$this->logging($logtext);
}

public function Restore_User()
{
	$data =  array(
		'ID_User' => $this->input->post('ID_User'),
		'Archive' => $this->input->post('Archive'),
		'Confirmed' => $this->input->post('Confirmed')
	);

	// $this->load->model('Rpmes_model');

	if ($this->Rpmes_model->UserArchive($data)) {
		echo json_encode(array("success" => true, "message" => "Restore successfully"));
		$logtext = "Restore UserID " . $data['ID_User'];
	} else {
		echo json_encode(array("success" => false, "message" => "Failed on Restore"));
		$logtext = "Failed in Delet " . $data['ID_User'];
	}
	$this->logging($logtext);
}



// function printform1(){
// 	$this->load->library('Pdf');
// 	$pdf = new Pdf('l', 'mm', 'A4', true, 'UTF-8', false);
// 	$pdf->SetTitle('Pdf Example');
// 	$pdf->SetHeaderMargin(30);
// 	$pdf->SetTopMargin(20);
// 	$pdf->setFooterMargin(20);
// 	$pdf->SetAutoPageBreak(true);
// 	$pdf->SetAuthor('Author');
// 	$pdf->SetDisplayMode('real', 'default');
// 	$pdf->Write(5, 'CodeIgniter TCPDF Integration');
// 	$pdf->Output('pdfexample.pdf', 'I');
// }






}//end



