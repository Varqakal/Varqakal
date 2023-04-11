<?php

class Etudiant{
private $Matricule;
private $Nom; 
private $Prenom;
private $Age;
private $Datenaiss;

// la methode get
public function getMatricule(){
   return $this->Matricule; 
}
public function getNom(){
    return $this->Nom; 
 }  
 public function getPrenom(){
    return $this->Prenom; 
 }
 public function getAge(){
    return $this->Age; 
 }
 public function getDatenaiss(){
    return $this->Datenaiss; 
 }
//  la methode set 
 public function setMatricule($Matricule){
    return $this->Matricule= $Matricule; 
 }

 public function setNom($Nom){

     if(!empty($Nom) and strlen($Nom)>3){
        return $this->Nom=$Nom; 
     }
  }  
  public function setPrenom($Prenom){
     return $this->Prenom=$Prenom; 
  }
  public function setAge($Age){
     return $this->Age=$Age; 
  }
  public function setDatenaiss($Datenaiss){
     return $this->Datenaiss=$Datenaiss; 
  }


   public function enregistrement(){
        include 'connexionDB.php';
        $req = $dbb->prepare("insert into Etudiant (matricule, nom, prenom , age, datenaiss) Values (:matricule, :nom, :prenom, :age, :datenaiss)");
        $req->execute(array(':matricule'=>$this->getMatricule(),
                           ':nom'=>$this->getNom(),
                           ':prenom'=>$this->getPrenom(),
                           ':age'=>$this->getAge(),
                           ':datenaiss'=>$this->getDateNaiss()));

                echo " Enregistrement effectué !!";

   }
}


?>