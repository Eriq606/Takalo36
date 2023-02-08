<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class ChoixObjet extends CheckSession{
        public function __construct(){
            parent::__construct();
        }
        public function choixObjet($idAutreObjet, $idAutre){
            $this->load->model("objet_model", "objet");
            $mesObjets=$this->objet->getObjetsByUser($this->session->userActu['idutilisateur']);
            $data['mesObjets']=$mesObjets;
            $data['objetActu']=0;
            $data['idAutreObjet']=$idAutreObjet;
            $data['idAutre']=$idAutre;
            $this->load->view("templates/header");
            $this->load->view('choixechange', $data);
            $this->load->view("templates/footer");
        }
        public function changeObject($idObject, $idAutreObjet, $idAutre){
            $this->load->model("objet_model", "objet");
            $mesObjets=$this->objet->getObjetsByUser($this->session->userActu['idutilisateur']);
            $data['mesObjets']=$mesObjets;
            $data['objetActu']=$idObject;
            $data['idAutreObjet']=$idAutreObjet;
            $data['idAutre']=$idAutre;
            $this->load->view("templates/header");
            $this->load->view('choixechange', $data);
            $this->load->view("templates/footer");
        }
    }
?>