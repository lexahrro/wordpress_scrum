<?php
/*
Template Name: inscription
*/

/**
 * TEMPLATE NAME: INSCRIPTION
 */
include 'conf.php';


get_header(); ?>


<section class="section-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="caption-login">Inscription</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-login">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <br>
                    <input class="input-login" type="text" name="nom" value="" />
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <br>
                    <input class="input-login" type="text" name="prenom" value="" />
                </div>
                <div class="form-group">
                    <label for="prenom">Pseudo :</label>
                    <br>
                    <input class="input-login" type="text" name="pseudo" value="" />
                </div>
                <div class="form-group">
                    <label for="prenom">Adresse E-Mail :</label>
                    <br>
                    <input class="input-login" type="email" name="email" value="" />
                </div>
                <div class="form-group">
                    <label for="prenom">Mot de passe :</label>
                    <br>
                    <input class="input-login" type="password" name="mdp" value="" />
                </div>
                <br>
                <button type="submit" name="connexion" value="Connexion" class="btn btn-default center-block">Submit</button>
            </form>
                </div>
            </div>
        </div>
</section>

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
        $aError[]			=		'Veuillez vérifier la syntaxe de votre adresse email';
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
            echo 'Une erreur est survenuen veuillez contacter un administrateur';
        } else {
            echo 'Inscription validée';


        }
    }


}

?>
