<?php

class PersonnelController extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->helper('url');
    }


    public function index()
    {
        $data['personnel'] = $this->DataModel->getPersonnel();
        $this->load->view('personnel',$data);
    }

    public function Insert(){

        $formData = array(

            'name'=>$this->input->post('name'),
            'gender'=>$this->input->post('gender'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email')
        );

        $result =  $this->DataModel->insertPersonnel($formData);
        if($result){

            redirect('/PersonnelController/index');
        }else{
            echo $result;
        }


    }


}
