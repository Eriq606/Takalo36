<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Identify extends CI_Controller{
        public function index(){
            $mail=$this->input->post('email');
            $pass=$this->input->post('pass');
            $this->load->model('identify_model', 'identification');
            $id=$this->identification->checkIdentifiant($mail, $pass);
            if($id!=false){
                redirect('setup/index/'.$id);
            }else{
                redirect('login');
            }
        }
        public function logAdmin(){
            $mail=$this->input->post('email');
            $pass=$this->input->post('pass');
            $this->load->model('identify_model', 'identification');
            $id=$this->identification->checkIdentifiant($mail, $pass);
            if($id!=false){
                redirect('setup/setupAdmin/'.$id);
            }else{
                redirect('login');
            }
        }
    }
?>