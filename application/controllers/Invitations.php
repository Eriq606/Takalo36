<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Invitation extends CheckSession{
        public function listeInvit(){
            $this->load->model("invitation_model", " invite");
            $this->load->model("identify_model", "identify");
            $listeInvit=$this->invite->getInvitationsByUser($this->session->userActu["idutilisateur"]);
            $senders=array();
            $receivers=array();
            for($i=0; $i<count($listeInvit); $i++){
                $senders[$i]=$this->identify->getUserByID($listeInvit[$i]['idSender']);
                $receivers[$i]=$this->identify->getUserByID($listeInvit[$i]['idDestinataire']);
            }
            $data["listeInvit"]=$listeInvit;
            $data["senders"]=$senders;
            $data["receivers"]=$receivers;
            $this->load->view("invitation", $data);
        }
    }
?>