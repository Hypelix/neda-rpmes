<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rpmes_login_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (is_null($this->session->UName))
			$this->load->view('admin_login');

		else {
			$data['getLogs'] = $this->Rpmes_model->getLogs();
			$this->load->view('dashboard', $data);	
		}
	}

	public function login()
	{
		if (!empty($_POST)) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->Rpmes_login_model->login($username, $password);

			if ($result===TRUE) {
				$user = $this->Rpmes_login_model->getUser_Row($username);
				$row = $user->row();
				$arraydata = array(
					'ID_User' => $row->ID_User,
					'UName' => $row->UName,
					'FName' => $row->FName,
					'MName' => $row->MName,
					'LName' => $row->LName,
					'Office' => $row->Office,
					'Email' => $row->Email,
					'Confirmed' => $row->Confirmed,
					'AgencyID'  => $row->ID_Agency,
					'ID_User'  => $row->ID_User
				);
				$this->session->set_userdata($arraydata);

				$getagency = $this->Rpmes_model->Form1JoinRegister($this->session->AgencyID);
				$value = $getagency->row();
				$this->session->set_userdata('AgencyName', $value->Agency_Name);
				$this->session->set_userdata('UserType', $value->UserType);

				$this->logging("has logged in");
				redirect('Rpmes_controller/');
			} else {
				$this->session->set_flashdata('SUCCESSMSG', 'Username and Password is Wrong');
				$this->logging("Failed to logged in");
				redirect('login','reload');
// $this->load->view('admin_login');
			}
		} else {
			if (is_null($this->session->UName))
				$this->load->view('admin_login');
			else {
				$data['getLogs'] = $this->Rpmes_model->getLogs();
				$this->load->view('dashboard', $data);
			}
		}
	}


	public function logout()
	{
		$this->logging("has logout");
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}

	public function logging($text)
	{
		$string=exec('getmac');
		$mac=substr($string, 0, 17); 

		$whoami = $this->session->FName."	 ".$this->session->LName;
		$logs = "$whoami $text";
		$logdata['text'] =  $logs;
		$logdata['Remote_IP_Address'] =  $this->input->ip_address();
		$logdata['Remote_Mac_Address'] =  $mac=substr($string, 0, 17); 
		$this->Rpmes_model->save_logs($logdata);
		// var_dump($logdata);die();
	}


	public function gg()
	{
		echo "hi";
	}
}