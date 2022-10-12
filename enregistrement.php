<?php
require_once("connexionDB.php");
 //Récupération des données
$idcours = htmlspecialchars($_POST['idCours']);
$noms = htmlspecialchars($_POST['nom']);
$prenoms = htmlspecialchars($_POST['prenoms']);
$tel = htmlspecialchars($_POST['telephone']);
$adres = htmlspecialchars($_POST['adresse']);
$email = htmlspecialchars($_POST['email']);
$nomComplet = $noms.' '.$prenoms;


// Vérification de l'existence des variables
if(isset($noms) AND isset($prenoms) AND isset($tel)  AND isset($adres) AND isset($email))
{
    // Vérifier que les données réçues ne sont pas vides
    if($noms!='' && $prenoms !='' && $tel !=''  && $adres !='' && $email !='')
    {    
        $verif_User = $bdd->query("SELECT COUNT(*) FROM enregistrement_eleves WHERE nom_eleve = '".$nomComplet."' AND id_cours='".$idcours."' ");
            if($verif_User->fetchColumn() != 0)
            { //Login inexistant
                echo 'Vous vous etes déjà enrégistré pour ce cours' ;
            }else
            {
                    //Insertion des données dans la base de données
                            try{
                                $requete = $bdd->prepare("INSERT INTO enregistrement_eleves (nom_eleve,telephone_eleve,email_eleve,adresse_eleve,id_cours,date_enreg) VALUES(?, ?, ?, ?, ?, NOW())");
                                $requete->execute(array($nomComplet,$tel,$email,$adres,$idcours));
                            echo 'Merci votre enregistrement est effectué avec succès' ;
                            }catch(Exception $e)
                                    {
                                        $e -> getMessage();
                                    }
                        $requete->closeCursor(); // Termine le traitement de la requête
            }
        
    }else
    {
        //Rédirection à la page du formulaire pour afficher le message d'erreur qui informe au client de remplir tous les champs avant l'envoi de la commande
      echo 'Des champs sont vides';
    }
}

?>