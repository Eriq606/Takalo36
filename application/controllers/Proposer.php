<?php
    require_once(APPPATH.'controllers/CheckSession.php');
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Proposer extends CheckSession{
        public function index($idSender, $idSendObject, $idReceive, $idReceiveObj){
            $this->load->model("invitation_model", "invite");
            $this->invite->inviter($idSender, $idSendObject, $idReceive, $idReceiveObj);
            redirect(site_url("ficheObjet/showObjet/".$idReceiveObj));
        }
    }
?>