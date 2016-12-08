<?php
/*
Template Name: login
*/

/**
 * TEMPLATE NAME: LOGIN
 */
session_start();
include 'conf.php';

get_header(); ?>

<form action="" method="post">
    Pseudo: <input type="text" name="pseudo" value="" />

    Mot de passe: <input type="password" name="mot_de_passe" value="" />

    <input type="submit" name="connexion" value="Connexion" />
</form>
<?php




if(isset($_POST['connexion'])) {
    if(empty($_POST['pseudo'])) {

        echo "Le champ Pseudo est vide.";
    } else {
        if(empty($_POST['mot_de_passe'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = htmlentities($_POST['mot_de_passe'], ENT_QUOTES, "ISO-8859-1");

            if(!$bdd){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = "SELECT * FROM profil WHERE email = :email AND mdp = :mdp";
                $Param = [
                    ':email' => $Pseudo,
                    ':mdp' => $MotDePasse
                ];
                $Query = $bdd->prepare($Requete);
                $Query->execute($Param);
                $User = $Query->fetch();

                if($Pseudo != $User['email'] && $MotDePasse != $User['mdp']) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['pseudo'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                }
            }
        }
    }
}
?>


<?php get_footer(); ?>
