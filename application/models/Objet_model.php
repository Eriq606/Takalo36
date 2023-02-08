<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Objet_model extends CI_Model{
        public function getImageObject($idObjet){
            $request="select * from imageObject where idObject=%s";
            $request=sprintf($request, $idObjet);
            $result=$this->db->query($request);
            $images=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $images[$i]['idImageObject']=$row['idImageObject'];
                $images[$i]['idObject']=$row['idObject'];
                $images[$i]['urlImage']=$row['urlImage'];
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $images;
        }
        public function getAllObjets(){
            $result=$this->db->query("select * from (select object.*, utilisateur.nom, categorie.nom as nomcategorie from object join utilisateur on object.idutilisateur=utilisateur.idutilisateur join categorie on object.idcategorie=categorie.idCategorie) as objetcomplet");
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['idObject']=$row['idObject'];
                $liste[$i]['idUtilisateur']=$row['idUtilisateur'];
                $liste[$i]['nom']=$row['nom'];
                $liste[$i]['titre']=$row['titre'];
                $liste[$i]['description']=$row['description'];
                $liste[$i]['prixEstimatif']=$row['prixEstimatif'];
                $liste[$i]['idCategorie']=$row['idCategorie'];
                $liste[$i]['nomCategorie']=$row['nomCategorie'];
                $liste[$i]['images']=$this->getImageObject($liste[$i]['idObject']);
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
        public function getObjetByID($id){
            $request="select * from (select object.*, utilisateur.nom, categorie.nom as nomcategorie from object join utilisateur on object.idutilisateur=utilisateur.idutilisateur join categorie on object.idcategorie=categorie.idCategorie) as objetcomplet where idobject=%s";
            $request=sprintf($request, $id);
            $result=$this->db->query($request);
            $liste=array();
            $row=$result->row_array();
            $liste['idObject']=$row['idobject'];
            $liste['idUtilisateur']=$row['idUtilisateur'];
            $liste['nom']=$row['nom'];
            $liste['titre']=$row['titre'];
            $liste['description']=$row['description'];
            $liste['prixEstimatif']=$row['prixEstimatif'];
            $liste['idCategorie']=$row['idCategorie'];
            $liste['nomCategorie']=$row['nomcategorie'];
            $liste['images']=$this->getImageObject($liste['idObject']);
            return $liste;
        }
        public function getObjetsByCategorie($idCategorie){
            $request="select * from (select object.*, utilisateur.nom, categorie.nom as nomcategorie from object join utilisateur on object.idutilisateur=utilisateur.idutilisateur join categorie on object.idcategorie=categorie.idCategorie) as objetcomplet where idcategorie=%s";
            $request=sprintf($request, $idCategorie);
            $result=$this->db->query($request);
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['idObject']=$row['idobject'];
                $liste[$i]['idUtilisateur']=$row['idUtilisateur'];
                $liste[$i]['nom']=$row['nom'];
                $liste[$i]['titre']=$row['titre'];
                $liste[$i]['description']=$row['description'];
                $liste[$i]['prixEstimatif']=$row['prixEstimatif'];
                $liste[$i]['idCategorie']=$row['idCategorie'];
                $liste[$i]['nomCategorie']=$row['nomcategorie'];
                $liste[$i]['images']=$this->getImageObject($liste[$i]['idObject']);
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
        public function getObjetsByUser($idUser){
            $request="select * from (select object.*, utilisateur.nom, categorie.nom as nomcategorie from object join utilisateur on object.idutilisateur=utilisateur.idutilisateur join categorie on object.idcategorie=categorie.idCategorie) as objetcomplet where idUtilisateur=%s";
            $request=sprintf($request, $idUser);
            $result=$this->db->query($request);
            $liste=array();
            for($i=0; $row=$result->result_array()[$i]; $i++){
                $liste[$i]['idObject']=$row['idobject'];
                $liste[$i]['idUtilisateur']=$row['idUtilisateur'];
                $liste[$i]['nom']=$row['nom'];
                $liste[$i]['titre']=$row['titre'];
                $liste[$i]['description']=$row['description'];
                $liste[$i]['prixEstimatif']=$row['prixEstimatif'];
                $liste[$i]['idCategorie']=$row['idCategorie'];
                $liste[$i]['nomCategorie']=$row['nomcategorie'];
                $liste[$i]['images']=$this->getImageObject($liste[$i]['idObject']);
                if(!isset($result->result_array()[$i+1])){
                    break;
                }
            }
            return $liste;
        }
        public function verifyIfEchange($idObj){
            $this->load->model("invitation_model", "invite");
            $listeInvites=$this->invite->getInvitationsSent($this->session->userActu["idutilisateur"]);
            for($i=0; $i<count($listeInvites); $i++){
                if($listeInvites[$i]["idObjectDemande"]==$idObj){
                    return true;
                }
            }
            return false;
        }
        public function changeOwner($idObj, $newOwner){
            $request="update object set idUtilisateur=%s where idobject=%s";
            $request=sprintf($request, $newOwner, $idObj);
            $this->db->query($request);
        }
    }
?>