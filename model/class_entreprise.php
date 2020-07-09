<?php
//code by judith


include '../dbConnect.php';
//creer une classe <<Cliententreprise>>

class ClientEntreprise
{
//declaration des variables privées
    private $id;
    private $nomEntreprise;
    private $Ninea;
    private $adresse;
    private $Raison_Sociale;
    private $telephone;
    private $Email;
    private $RegistreCom;
    

    // declarer une méthode dont le but est d'afficher les attributs
    public function __construct($nomEntreprise, $Ninea, $adresse, $Raison_Sociale, $telephone, $Email,$registreCom)
    {
        //on envoie les donnees dans l'insistance
        $this->nomEntreprise=$nomEntreprise;
        $this->Ninea=$Ninea;
        $this->adresse=$adresse;
        $this->Raison_Sociale=$Raison_Sociale;
        $this->telephone=$telephone;
        $this->Email=$Email;
        $this->registreCom=$registreCom;
       
    }
   
//getters
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }
        public function getNinea()
    {
            return $this->Ninea;
    }
        public function getAdresse()
    {
            return $this->adresse;
    }
        public function getRaisonSociale()
    {
            return $this->Raison_Sociale;
    }
        public function getTelephone()
    {
            return $this->telephone;
    }
        public function getEmail()
    {
            return $this->Email;
    }
        public function getRegistreCom()
    {
            return $this->registreCom;
    }
     


        //creer une fonction enregistrer
        public function enregistrer(){
            $connect = new dbConnect();
            $db = $connect->getConnexion();


//formater la requete et essayerde lier les donnees declarees et les donnees de la base de donnee
        $req= $db->prepare("INSERT INTO `cliententreprise`(`idEntreprise`, `nomEntreprise`, `ninea`, 
        `registreCom`, `adresse`, `email`,`telephone`, `raison_sociale`) VALUES (NULL,?,?,?,?,?,?,?)");

         $resultat=$req->execute(array(
            $this->getNomEntreprise(),
            $this->getNinea(),
            $this->getRegistreCom(),
            $this->getAdresse(),
            $this->getEmail(),
            $this->getTelephone(),
            $this->getRaisonSociale(),
  
         ));
         return $resultat;
         
        }
      

}
?>