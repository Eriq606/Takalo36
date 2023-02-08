<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Identify_model extends CI_Model{
        public function checkIdentifiant($mail, $pass){
            $request="select ididentifiant from identifiant where email='%s' and motdepasse='%s'";
            $request=sprintf($request, $mail, $pass);
            $result=$this->db->query($request);
            if($result=$result->row_array()){
                return $result['ididentifiant'];
            }else{
                return false;
            }
        }
        public function getUserByIdentifiant($ID){
            $request="select * from utilisateur where ididentifiant='%s'";
            $request=sprintf($request, $ID);
            $result=$this->db->query($request);
            return $result->row_array();
        }
    }
?>