<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Invitation_model extends CI_Model{
        public function inviter($idA, $idObjA, $idB, $idObjB){
            $request="insert into Invitation values(null, %s, %s, %s, %s, (select now()), (select now()))";
            $request=sprintf($request, $idA, $idB, $idObjB, $idObjA);
            $this->db->query($request);
        }
        public function getInvitationsByUser($idUser){
            $request="select * from Invitation where idSender=%s or idDestinataire=%s";
            $request=sprintf($request, $idUser);
            $result=$this->db->query($request);
            $invites=array();
            for($i=0; $i<count($result->result_array()); $i++){
                $invites[$i]=$result->result_array()[$i];
            }
            return $invites;
        }
        public function getInvitationsSent($idUser){
            $request="select * from Invitation where idSender=%s";
            $request=sprintf($request, $idUser);
            $result=$this->db->query($request);
            $invites=array();
            for($i=0; $i<count($result->result_array()); $i++){
                $invites[$i]=$result->result_array()[$i];
            }
            return $invites;
        }
    }
?>