<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Invitation_model extends CI_Model{
        public function inviter($idA, $idObjA, $idB, $idObjB){
            $request="insert into Invitation values(null, %s, %s, %s, %s, (select now()), (select now()))";
            $request=sprintf($request, $idA, $idB, $idObjB, $idObjA);
            $this->db->query($request);
        }
        public function getInvitationsByUser($idUser){
            $request="select * from Invitation where (idSender=%s or idDestinataire=%s) and idInvitation not in (select idInvitation from InvitationAccept union select idInvitation from InvitationRefus)";
            $request=sprintf($request, $idUser, $idUser);
            $result=$this->db->query($request);
            $invites=array();
            for($i=0; $i<count($result->result_array()); $i++){
                $invites[$i]=$result->result_array()[$i];
            }
            return $invites;
        }
        public function getInvitationsSent($idUser){
            $request="select * from Invitation where idSender=%s and idInvitation not in (select idInvitation from InvitationAccept union select idInvitation from InvitationRefus)";
            $request=sprintf($request, $idUser);
            $result=$this->db->query($request);
            $invites=array();
            for($i=0; $i<count($result->result_array()); $i++){
                $invites[$i]=$result->result_array()[$i];
            }
            return $invites;
        }
        public function getInvitationByID($id){
            $request="select * from Invitation where idInvitation=%s";
            $request=sprintf($request, $id);
            $result=$this->db->query($request);
            $invite=$result->row_array();
            return $invite;
        }
        public function accepter($idInvit){
            $request="insert into InvitationAccept values(null, %s, (select now()), (select now()))";
            $request=sprintf($request, $idInvit);
            $this->db->query($request);
        }
        public function refuser($idInvit){
            $request="insert into InvitationRefus values(null, %s, (select now()), (select now()))";
            $request=sprintf($request, $idInvit);
            $this->db->query($request);
        }
        public function getNbEchanges(){
            $result=$this->db->query("select count(idInvitationAccept) as nbEchanges from InvitationAccept");
            return $result->row_array()["nbEchanges"];
        }
        public function getEchangesObjet($idObjet){
            $request="";
        }
    }
?>