<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(isset($this->session->userActu)){
                $this->session->unset_userdata('userActu');
            }
        }
        public function index(){
            $this->load->view('index');
        }
        public function loginAd(){
            $this->load->view("loginAdmin");
        }
    }
?>