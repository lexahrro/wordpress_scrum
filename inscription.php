<?php
/*
Template Name: inscription
*/

/**
 * TEMPLATE NAME: INSCRIPTION
 */
include 'conf.php';


get_header(); ?>

<form action="" method="post">
    Nom : <input type="text" name="nom" value="" />

    Prenom : <input type="text" name="prenom" value="" />

    Pseudo : <input type="text" name="pseudo" value="" />

    Adresse Email : <input type="email" name="email" value="" />

    Mot de passe: <input type="password" name="mdp" value="" />

    <input type="submit" name="connexion" value="Connexion" />
</form>



<?php
if(!empty($_POST['connexion'])){
    $aError = array();

    if (empty($_POST['nom']) ) {
        $aError[]			=		'Veuillez saisir un nom';
    } elseif (preg_match('/[0-9 ;\.,?:!_\?+=§%<>$@\\\[\]\{\}`\#\(\)\*µ£\|\/]/', $_POST['nom']) || strlen($_POST['nom']) > 50) {
        $aError[]			=		' Votre nom n\'a pas bien été saisie';
    }
    if (empty($_POST['prenom']) ) {
        $aError[]			=		'Veuillez saisir un prénom';
    } elseif (preg_match('/[0-9 ;\.,?:!_\?+=§%<>$@\\\[\]\{\}`\#\(\)\*µ£\|\/]/', $_POST['prenom']) || strlen($_POST['prenom']) > 50) {
        $aError[]			=		' Votre prénom n\'a pas bien été saisie';
    }
    if (empty($_POST['pseudo']) ) {
        $aError[]			=		'Veuillez saisir un prénom';
    } elseif (preg_match('/[0-9 ;\.,?:!_\?+=§%<>$@\\\[\]\{\}`\#\(\)\*µ£\|\/]/', $_POST['pseudo']) || strlen($_POST['pseudo']) > 50) {
        $aError[]			=		' Votre prénom n\'a pas bien été saisie';
    }
    if ( empty($_POST['email']) ) {
        $aError[]			=		'Veuillez saisir votre adresse email';
    } elseif (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $aError[]			=		'Veuillez vérifier la synthaxe de votre adresse email';
    }
    if ( empty($_POST['mdp']) ) {
        $aError[]			=		'Veuillez saisir un mot de passe';
    }
    if(empty($aError)){
        $sQuery				=	'
			INSERT INTO
				profil  
					(
						nom,prenom,email,mdp,pseudo
					)
			VALUES
				(
					:nom,:prenom,:email,:mdp,:pseudo
				)
			;
		';
        $aParamUser			=	[
            ':nom'			=>	$_POST['nom'],
            ':prenom'		=>	$_POST['prenom'],
            ':email'		=>	$_POST['email'],
            ':mdp'			=>	$_POST['mdp'],
            ':pseudo'       =>  $_POST['pseudo'],
        ];
        $oQuery				=	$bdd->prepare ( $sQuery );
        $bReturn = $oQuery->execute( $aParamUser );
        if ($bReturn == 0 ) {
            echo 'Une erreur est survenue veuillez contacter un adminitrateur';
        } else {
            echo 'vous êtes bien inscris';


        }
    }


}


