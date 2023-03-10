<?php
    require_once(APPPATH.'controllers/AdminSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Homepage extends AdminSession{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->load->model('categorie_model', 'categorie');
            $allCategories=$this->categorie->getAllCategories();
            $data['allCategories']=$allCategories;
            $this->load->view("templates/header");
            $this->load->view('categorie', $data);
            $this->load->view("templates/footer");
        }
    }
?>