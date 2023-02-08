<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class AdminSession extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(!isset($this->session->userActu["admin"])){
                redirect("login");
            }
        }
        public function statistique(){
            $this->load->model("identify_model", "identify");
            $this->load->model("invitation_model", "invite");
            $nbUsers=$this->identify->getNbUsers();
            $nbEchange=$this->invite->getNbEchanges();
            $data["nbUsers"]=$nbUsers;
            $data["nbEchange"]=$nbEchange;
            $this->load->view("templates/header");
            $this->load->view("statistique", $data);
            $this->load->view("templates/footer");
        }
    }
?>