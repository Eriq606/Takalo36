<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class ListeObjet extends CheckSession{
        public function index($idcat){
            $this->load->model('Objet_model', 'objet');
            $this->load->model('Categorie_model', 'categorie');
            $liste=$this->objet->getObjetsByCategorie($idcat);
            $categories=$this->categorie->getAllCategories();
            $data['liste']=$liste;
            $data['categories']=$categories;
            $data['categorieActu']=$idcat;
            $this->load->view('home', $data);
        }
    }
?>