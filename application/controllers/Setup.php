<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Setup extends CI_Controller{
        public function index($id){
            if($id==null){
                redirect('login');
            }
            $this->load->model('identify_model', 'identifier');
            $userActu=$this->identifier->getUserByIdentifiant($id);
            $this->session->set_userdata('userActu', $userActu);
            redirect('listeObjet/index/1');
        }
        public function setupAdmin($id){
            if($id==null){
                redirect('login');
            }
            $this->load->model('identify_model', 'identifier');
            $userActu=$this->identifier->getUserByIdentifiant($id);
            $userActu['admin']="true";
            $this->session->set_userdata('userActu', $userActu);
            redirect('homepage');
        }
    }
?>