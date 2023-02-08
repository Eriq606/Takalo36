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
        public function modifObjet($idObjet){
            $this->load->model("objet_model", "objet");
            $objet=$this->objet->getObjetByID($idObjet);
            $data['objet']=$objet;
            $this->load->view("templates/header");
            $this->load->view('modif', $data);
            $this->load->view("templates/footer");
        }
        public function updateObjet(){
            $titre=$this->input->post("titre");
            $desc=$this->input->post("desc");
            $prix=$this->input->post("prix");
            $idObj=$this->input->post("idObject");
            $this->load->model("objet_model", "objet");
            $this->objet->modifierObjet($idObj, $titre, $desc, $prix);
            redirect(site_url("listeObjet/mesObjets"));
        }
        public function historique($idObjet){
            $this->load->model("invitation_model", "invite");
            $this->load->model("identify_model", "identify");
            $this->load->model("objet_model", "objet");
            $listeInvites=$this->invite->getEchangesObjet($idObjet);
            $objet=$this->objet->getObjetByID($idObjet);
            $senders=array();
            $receivers=array();
            for($i=0; $i<count($listeInvites); $i++){
                $senders[$i]=$this->identify->getUserByID($listeInvites[$i]["idSender"]);
                $receivers[$i]=$this->identify->getUserByID($listeInvites[$i]["idDestinataire"]);
            }
            $data["listeInvit"]=$listeInvites;
            $data["senders"]=$senders;
            $data["receivers"]=$receivers;
            $data["objet"]=$objet;
            $this->load->view("templates/header");
            $this->load->view("historique", $data);
            $this->load->view("templates/footer");
        }
    }
?>