<?php
//code by judith
namespace model;

//include '../dbConnect.php';

//creer une classe <<OuvertureCompte>>
//declaration des variables privées
use DbConnect;
class OuvertureCompte
{
    private $id;
    private $typeCompte;
    private $idEntreprise;
    private $idClientPhysique;
    private $NumeroCompte;
    private $CleRib;
    private $EtatCompte;
    private $DepotInitial;
    private $DateOuverture;
    

    // declarer une méthode dont le but est d'afficher les attributs
    public function __construct($typeCompte, $idEntreprise, $idClientPhysique, 
    $NumeroCompte, $CleRib, $EtatCompte, $DepotInitial, $DateOuverture)
    {
        //on envoie les donnees dans l'insistance
        $this->typeCompte=$typeCompte;
        $this->idEntreprise=$idEntreprise;
        $this->idClientPhysique=$idClientPhysique;
        $this->NumeroCompte=$NumeroCompte;
        $this->CleRib=$CleRib;
        $this->EtatCompte=$EtatCompte;
        $this->DepotInitial=$DepotInitial;
        $this->DateOuverture=$DateOuverture;
       
    }
   
//getters
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
    public function getIdClientPhysique()
    {
        return $this->idClientPhysique;
    }

        public function getNumeroCompte()
    {
            return $this->NumeroCompte;
    }
        public function getCleRib()
    {
            return $this->CleRib;
    }
        public function getEtatCompte()
    {
            return $this->EtatCompte;
    }
        public function getDepotInitia()
    {
            return $this->DepotInitial;
    }
        public function getDateOuverture()
    {
            return $this->DateOuverture;
    }
       


        //creer une fonction enregistrer
        public function enregistrer(){
            try{
            $connect = new dbConnect();
            $db = $connect->getConnexion();


//prend le contenu du formulaire et essayer del'inserer dans la base de donnees et donne un feedback à l'utilisateur
        $req= $db->exec("INSERT INTO `compte`(`idCompte`, `typeCompte`, `Numero_Compte`, `Cle_Rib`, `Etat_Compte`, `Depot_Initial`, `Date_Ouverture`) 
        VALUES (NULL,'".$this->getTypeCompte()."',".$this->getNumeroCompte().",".$this->getCleRib().",'".$this->getEtatCompte()."',".$this->getDepotInitia().",'".$this->getDateOuverture()."')");
                 
        //         var_dump(array(

        //             $this->getTypeCompte(),
        //             (int)$this->getNumeroCompte(),
        //             (int)$this->getCleRib(),
        //             $this->getEtatCompte(),
        //             (double)$this->getDepotInitia(),
        //             $this->getDateOuverture()));
        //         die;
        // $result=$req->execute(array(

        //     $this->getTypeCompte(),
        //     (int)$this->getNumeroCompte(),
        //     (int)$this->getCleRib(),
        //     $this->getEtatCompte(),
        //     (double)$this->getDepotInitia(),
        //     $this->getDateOuverture()
           

  
        //  ));
         //var_dump($_POST);
         return $req;
    }catch(PDOEXCEPTION $ex){
        echo 'erreur :'  .$ex ->getMessage();
 }

}

}
