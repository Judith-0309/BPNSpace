<?php
//=======================================Coding by JLAS====================

//inclure les pages client particulier et class_particulier
//include '../view/clientparticulier/particulier.php';

//include '../model/class_particulier.php';


include_once '../config/autoload.php';  //On inclut le fichier autoload.php
use model\Clientparticulier;    //on use la classe Clientparticulier qui se trouve dans model/Clientparticulier
use model\DbConnect;

   if(!empty($_POST)){
    //var_dump($_POST);
    //creer l'objet personne(instancier la class clientparticulier qui se trouve dans class_particulier)
     //on cree un personnage(Clientparticulier)
     
    //$physique = new model\Clientparticulier(
        $physique = new Clientparticulier(
         //on recupere les donnees saisies par l'utlisateur
        $_POST["nom"],$_POST["prenom"],$_POST["telephone"],
        $_POST["Genre"], $_POST["Email"], $_POST["Adresse"],
        $_POST["Profession"],$_POST["salarie"],$_POST["salaire_actuel"],
        $_POST["nom_employeur"],$_POST["cni"]  

    );
   
    //echo 'client ajouté';
   //(pour voir les inputs)
  
    //die();//(bloquer l'envoie des donnees)

    //on enregistre la personne en appelant la fonction enregistrer creer dans class_particulier
    $enregistrement=$physique->enregistrer();
   // var_dump($physique);
//    var_dump($enregistrement);
//    die();
    if ($enregistrement) {
       echo ' enregistrement reussi';
    } else {
        echo 'echec enregistrement';
    }
    
   

}
?>









































