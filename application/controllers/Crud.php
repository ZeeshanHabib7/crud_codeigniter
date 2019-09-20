<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crudmodel');
    }
    public function crudController(){
     
     
        $data['users']=$this->Crudmodel->getData();
        // print_r($data);
        $this->load->view('layouts/header');
        $this->load->view('Crudview/index',$data);
        $this->load->view('layouts/footer');
       
    }
    public function add(){
     
        $this->load->view('layouts/header');
        $this->load->view('Crudview/add');
        $this->load->view('layouts/footer');
    }
    public function submit(){
        $result=$this->Crudmodel->submit();
        if($result){
            $this->session->flashdata('success_msg','Record Added Successfully');
        }else{
            $this->session->flashdata('success_msg','Record Failed');

        }

        redirect(base_url('crud/crudcontroller'));
    }

    public function edit($id){
        $data['user'] = $this->Crudmodel->getDatabyId($id);
        $this->load->view('layouts/header');
        $this->load->view('Crudview/edit',$data);
        $this->load->view('layouts/footer');
    }
    
    public function update(){
      $result = $this->Crudmodel->update();
      if($result){
        $this->session->flashdata('success_msg','Record updated Successfully');
    }else{
        $this->session->flashdata('success_msg','Record Failed to update');
    }    
    redirect(base_url('crud/crudcontroller'));
    }

    public function delete($id){
        $result = $this->Crudmodel->delete($id);
		if($result){
			$this->session->flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('crud/crudcontroller'));
	}

}
?>