function validate()
{
    var verify = 0;
    var Numero_Compte = document.getElementById('Numero_Compte');
    var Cle_Rib = document.getElementById('Cle_Rib');
    var Date_ouverture = document.getElementById('Date_ouverture');
    var Depot_initial = document.getElementById('Depot_initial');
    var Frais_Ouverture = document.getElementById('Frais_Ouverture');

    if(Numero_Compte.value === ""){
        alert('remplir Numero de compte');
        Numero_Compte.style.background = "#C82525";
        Numero_Compte.placeholder = "veuillez remplir ce champ";
        
       verify=1;
    }
    

    if(Cle_Rib.value === ""){
        alert('remplir Cle_Rib');
        Cle_Rib.style.background = "#C82525";
        Cle_Rib.placeholder = "veuillez remplir ce champ";
       
        verify=1;
    }

    if(Depot_initial.value === ""){
        alert('Depot_initial');
  

        verify=1;
    }


    if(Date_ouverture.value === ""){
        alert('remplir Date_ouverture');
        
        verify=1;
    }

    if(Frais_Ouverture.value === ""){
        alert('remplir Frais_Ouverture');
        
        verify=1;
    }

    if(verify === 0){
        return true;
    }
    else{

        return false;

    }


}

    
