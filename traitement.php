<?php
include 'etudiant.class.php';

$etud = new Etudiant();
$etud->setMatricule($_POST['matricule']);
$etud->setNom($_POST['nom']);
$etud->setPrenom($_POST['prenom']);
$etud->setAge($_POST['age']);
$etud->setDateNaiss($_POST['datenaiss']);


if($_POST["btn"] == "Save"){
    $etud->enregistrement();
}
elseif($_POST["btn"]  ==  "Update"){
    echo "Bouton UPDATE";
}
elseif($_POST["btn"] == "Delete"){
    echo " Bouton Delete";
}

?>