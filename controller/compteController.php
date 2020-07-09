<?php

//inclure les pages entreprises.php et class_particulier.php
//include '../view/Compte/compte.php';
include '../model/class_compte.php';





   if(!empty($_POST)){
    //var_dump($_POST);
    //creer l'objet personne(instancier la class cliententreprise qui se trouve dans class_entreprise)
     //on cree un personnage(Cliententreprise)
    $compte = new OuvertureCompte(
         //on recupere les donnees saisies par l'utlisateur
        $_POST["typeCompte"],NULL,NULL,$_POST["NumeroCompte"],
        $_POST["CleRib"],$_POST["EtatCompte"],$_POST["DepotInitial"],
        $_POST["DateOuverture"] );
     //var_dump($_POST);
    
  //  echo 'compte cree';
  
  
    //die();//(bloquer l'envoie des donnees)

    //on enregistre l'entreprise en appelant la fonction enregistrer creer dans class_entreprise
    $validate=$compte->enregistrer();
    if ($validate) {
        echo ' enregistrement reussi';
     } else {
         echo 'echec enregistrement';
     }
    
   // return $validate;
   //var_dump($validate);
 // die();
   

}
?>









































