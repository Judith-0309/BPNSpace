<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" href="public/css/entreprise.css">
 
   
        <title>CLIENT Entreprise</title>

    </head>

        <body>
            <nav>
                <img src="public/img/bplogo.png" alt="logo BP" class="img">  
        
                    <h1>BANQUE DU PEUPLE</h1>

                        <ul>
                            <li><a href="">Accueil</a></li>
                            <li><a href="">Liste client</a></li>
                            <li><a href="">Gestion Compte</a></li>
                            <li><a href="">Ajout Client</a></li>
                            <li><a href="">Virement</a></li>
                        </ul>
            </nav>

                <form action='cliententrepriseC' method="POST"  id="myform">
                    <fieldset class="container"><br><br />
                        <legend id="open">Gestion Client Entreprise</legend>

                            <label for="nomEntreprise">nomEntreprise*</label>
                            <input id="nomEntreprise" name="nomEntreprise" type="text"/>

                            <label for="adresse">adresse*</label>
                            <input id="adresse" name="adresse" type="text"/><br><br/>

                            <label for="Email">Email*</label>
                            <input id="Email" name="email" type="Email"/>

                            <label for="telephone">telephone*</label>
                            <input id="telephone" name="telephone" type="tel" /><br><br/>

                            <label for="Ninea">Ninea*</label>
                            <input id="Ninea" name="ninea" type="double"/>

                            <label for="Registre_Commerce">Registre_Commerce*</label>
                            <input id="Registre_Commerce" name="registreCom" type="double"/><br><br/>

                            <label for="Raison_Sociale">Raison Sociale*</label>
                            <input id="Raison_Sociale" name="raisonSociale" type="text"/><br><br/>

                    </fieldset>

                            <div class="button"><br><br/>

                                <input type="submit" name="envoyer" value="ENVOYER" onclick="return validate()"/>
                                <input type="reset" value="ANNULER"/>
                            </div><br><br/>
                </form>
                    <script src="public/js/mainE.js"></script>


   
        </body>

</html>