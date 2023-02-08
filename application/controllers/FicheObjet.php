<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class FicheObjet extends CheckSession{
        public function __construct(){
            parent::__construct();
        }
        public function showObjet($idobjet){
            $this->load->model("objet_model", "objet");
            $objet=$this->objet->getObjetByID($idobjet);
            $data['objet']=$objet;
            $envoye=$this->objet->verifyIfEchange($idobjet);
            $data['envoye']=$envoye;
            $this->load->view("templates/header");
            $this->load->view('echange', $data);
            $this->load->view("templates/footer");
        }
    }
?>