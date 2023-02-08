<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Invitations extends CheckSession{
        public function __construct(){
            parent::__construct();
        }
        public function listeInvit(){
            $this->load->model("invitation_model", "invite");
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
        public function detailInvit($idInvit){
            $this->load->model("invitation_model", "invite");
            $this->load->model("objet_model", "objet");
            $invite=$this->invite->getInvitationByID($idInvit);
            $objetSend=$this->objet->getObjetByID($invite['idObjectPropose']);
            $objetDemand=$this->objet->getObjetByID($invite['idObjectDemande']);
            $sender["idutilisateur"]=$objetSend["idUtilisateur"];
            $sender["nom"]=$objetSend["nom"];
            $receiver["idutilisateur"]=$objetDemand["idUtilisateur"];
            $receiver["nom"]=$objetDemand["nom"];
            $data["objetSend"]=$objetSend;
            $data["objetDemand"]=$objetDemand;
            $data["sender"]=$sender;
            $data["receiver"]=$receiver;
            $data["idInvite"]=$idInvit;
            $this->load->view("infoechange", $data);
        }
        public function accepter($idInvit, $idA, $idObjA, $idB, $idObjB){
            $this->load->model("invitation_model", "invite");
            $this->load->model("objet_model", "objet");
            $this->invite->accepter($idInvit);
            $this->objet->changeOwner($idObjA, $idB);
            $this->objet->changeOwner($idObjB, $idA);
            redirect("invitations/listeInvit");
        }
        public function refuser($idInvit){
            $this->load->model("invitation_model", "invite");
            $this->invite->refuser($idInvit);
            redirect("invitations/listeInvit");
        }
    }
?>