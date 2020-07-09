function validate()
{

    var verify=0;
    var nomEntreprise = document.getElementById('nomEntreprise');
    var adresse = document.getElementById('adresse');
    var Ninea = document.getElementById('Ninea');
    var telephone = document.getElementById('telephone');
    var Registre_Commerce = document.getElementById('Registre_Commerce');

    if(nomEntreprise.value === ""){
        alert('remplir Nom entreprise');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";

        verify=1;

    }

    if(adresse.value ===""){
        alert('remplir adresse');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";


        verify=1;
    }
    if(Ninea.value ===""){
        alert('remplir Ninea');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";


        verify=1;
    }
    if(telephone.value ===""){
        alert('remplir telephone');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";


        verify=1;
    }

    if(Registre_Commerce.value ===""){
        alert('remplir Registre de commerce');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";


        verify=1;
    }

    if(Raison_Sociale.value ===""){
        alert('remplir Raison Sociale');
        nomEntreprise.placeholder == "veuillez remplir ce champ";
        nomEntreprise.style.backgroundColor="";


        verify=1;
    }
    if(verify === 0){
        return true;
    }
    else{

        return false;
 
           
} 
}

