<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller {



  function __construct()
  {
    parent::__construct();

    $this->load->model('Test_model','Test_model');
    $this->load->library('encryption');
  }



  function delete_test(){
    $test_id = $this->input->get('test_id');
    $test_id = $this->encryption->decrypt($test_id);
    $this->load->model('Test_model');
    $this->Test_model->delete_test($test_id);
    redirect('Test_controller/ViewTest');
  }

  public function TestRegister()
  {
    if(!empty($_POST))
    {
      $data =  array(
        'test1' => $this->input->post('test1'),
        'test2' => $this->input->post('test2'),
        'test3' => $this->input->post('test3'),
        'test4' => $this->input->post('test4'),
      );
      $this->Test_model->TestRegister($data);
      redirect('Test_controller/ViewTest');
    }
    else
    {
      $data['getTest'] = $this->Test_model->getTest();
      $this->load->view('test_register',$data);
    }

  }


  public function ViewTest()
  {
    $data['getTest'] = $this->Test_model->getTest();
    $this->load->view('view_test',$data);


  }

  function trial(){
    echo bin2hex($this->encryption->create_key(64));
  }
  //
  public function update_test()
  {
    $test_id = $this->input->get('test_id');
    $test_id = $this->encryption->decrypt($test_id);
    $result = $this->Test_model->getTestbyId($test_id);
    var_dump($result);
    $data = array (
      'test_id' => $result['test_id'],
      'test1' => $result['test1'],
      'test2' => $result['test2'],
      'test3' => $result['test3'],
      'test4' => $result['test4']
    );
    $this->load->view('update_test',$data);

  }


  public function UpdateTest()
  {
    $data =  array('test_id' => $this->input->post('test_id'),
                   'test1' => $this->input->post('test1'),
                   'test2' => $this->input->post('test2'),
                   'test3' => $this->input->post('test3'),
                   'test4' => $this->input->post('test4'),
                 );

    $this->Test_model->TestUpdate($data);
    redirect('Test_controller/ViewTest');
  }

}//end
