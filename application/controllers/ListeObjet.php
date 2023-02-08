<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class ListeObjet extends CheckSession{
        public function index($idcat=1){
            $this->load->model('Objet_model', 'objet');
            $this->load->model('Categorie_model', 'categorie');
            $liste=$this->objet->getObjetsByCategorie($idcat);
            $categories=$this->categorie->getAllCategories();
            $data['liste']=$liste;
            $data['categories']=$categories;
            $data['categorieActu']=$idcat;
            $this->load->view("templates/header");
            $this->load->view('home', $data);
            $this->load->view("templates/footer");
        }
        public function mesObjets($idcat=1){
            $this->load->model('Objet_model', 'objet');
            $this->load->model('Categorie_model', 'categorie');
            $liste=$this->objet->getObjetsByUser($this->session->userActu["idutilisateur"]);
            $categories=$this->categorie->getAllCategories();
            $data['liste']=$liste;
            $data['categories']=$categories;
            $data['categorieActu']=$idcat;
            $this->load->view("templates/header");
            $this->load->view('objet', $data);
            $this->load->view("templates/footer");
        }
        public function recherche(){
            $titre=$this->input->post("search");
            $idCat=$this->input->post("search_cat");
            $this->load->model('Objet_model', 'objet');
            $this->load->model('Categorie_model', 'categorie');
            $listeSearch=$this->objet->searchObjectCat($titre, $idCat);
            $categories=$this->categorie->getAllCategories();
            $data["liste"]=$listeSearch;
            $data['categories']=$categories;
            $this->load->view("templates/header");
            $this->load->view("search", $data);
            $this->load->view("templates/footer");
        }
    }
?>