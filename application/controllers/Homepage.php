<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Homepage extends CheckSession{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->load->model('categorie_model', 'categorie');
            $allCategories=$this->categorie->getAllCategories();
            $data['allCategories']=$allCategories;
            $this->load->view('categorie', $data);
        }
    }
?>