<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Categorie_model extends CI_Model{
        public function getAllCategories(){
            $result=$this->db->query("select * from categorie");
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['idcategorie']=$row['idcategorie'];
                $liste[$i]['nom']=$row['nom'];
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
    }
?>