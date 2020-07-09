<?php
namespace model;
//code by judith
//include '..DbConnect.php';
//creer une classe <<Clientparticulier>>
//\

use DbConnect;

class Clientparticulier
{
//declaration des variables privées
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $genre;
    private $email;
    private $adresse;
    private $profession;
    private $salarie;
    private $salarie_actuel;
    private $nom_employeur;
    private $cni;

    // declarer une méthode dont le but est d'afficher les attributs
    public function __construct($nom,$prenom,$telephone,$genre,$email,$adresse,$profession,
    $salarie,$salarie_actuel,$nom_employeur,$cni)
    {
        //on envoie les donnees dans l'insistance
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->telephone=$telephone;
        $this->genre=$genre;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->profession=$profession;
        $this->salarie=$salarie;
        $this->salaire_actuel=$salarie_actuel;
        $this->nom_employeur=$nom_employeur;
        $this->cni=$cni;
    
    }
   
//getters
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getNom()
    {
        return $this->nom;
    }
        public function getPrenom()
    {
            return $this->prenom;
    }
        public function getTelephone()
    {
            return $this->telephone;
    }
        public function getGenre()
    {
            return $this->genre;
    }
        public function getEmail()
    {
            return $this->email;
    }
        public function getAdresse()
    {
            return $this->adresse;
    }
        public function getProfession()
    {
            return $this->profession;
    }
        public function getSalarie()
    {
            return $this->salarie;
    }
        public function getSalaireActuel()
    {
            return $this->salarie_actuel;
    }
        public function getNomEmployeur()
    {
            return $this->nomEmployeur;
    }
        public function getCni()
    {
            return $this->cni;
    }


    //use  model\particulier\Clientparticulier;
        //creer une fonction enregistrer
        public function enregistrer(){

            $connect = new \model\DbConnect();
            $db = $connect->getConnexion();


        //formater la requete et essayerde lier les donnees declarees et les donnees de la base de donnee
        $req= $db->prepare("INSERT INTO `clientphysique`(`idClientPhysique`, `nom`, `prenom`, `telephone`,
        `genre`, `email`, `adresse`, `profession`, `salarie`, `salaire_actuel`, `nom_employeur`, `cni`)
         VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)");
         $resultat=$req->execute(array(
            $this->getNom(),
             $this->getPrenom(),
             $this->getTelephone(),
             $this->getGenre(),
             $this->getEmail(),
             $this->getAdresse(),
             $this->getProfession(),
             $this->getSalarie(),
             $this->getSalaireActuel(),
             $this->getNom(),
             $this->getCni(),


         ));
         return $resultat;
         
        }
}
?>