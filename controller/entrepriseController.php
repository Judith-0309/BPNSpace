<?php

//inclure les pages entreprises.php et class_particulier.php
//include '../view/cliententreprise/entreprise.php';
include '../model/class_entreprise.php';
 




   if(!empty($_POST)){
    //var_dump($_POST);
    //creer l'objet personne(instancier la class cliententreprise qui se trouve dans class_entreprise)
     //on cree un personnage(Cliententreprise)
    $entreprise = new ClientEntreprise(
         //on recupere les donnees saisies par l'utlisateur
        $_POST["nomEntreprise"], $_POST["ninea"], $_POST["registreCom"], $_POST["adresse"],
        $_POST["email"], $_POST["telephone"],$_POST["raisonSociale"]

    );
   
   
  
  
    //die();//(bloquer l'envoie des donnees)

    //on enregistre l'entreprise en appelant la fonction enregistrer creer dans class_entreprise
    $enregistrement=$entreprise->enregistrer();
    if ($enregistrement) {
        echo ' entreprise ajoutée';
     } else {
         echo 'echec enregistrement';
     }
   
  // var_dump($enregistrement);
  //die();
   

}
?>









































