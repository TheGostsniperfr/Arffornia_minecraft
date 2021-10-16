<?php
session_start();

//Initialization authentification
require('controller/auth/auth.php');

//Initialization $url
$GLOBALS['url'] = '';

//Initialization $error
$GLOBALS['error'] = '';

//Initialization $content
$GLOBALS['content'] = '';

//Initialization $title
$GLOBALS['title']= '';

//Convert url to array
if (isset($_GET['url'])) {
    $GLOBALS['url'] = explode('/', $_GET['url']);
}

//Routage
try {
    if (($GLOBALS['url'] == '')) { //Home
        require('controller/page/home.php');
        home_view();
    } elseif ($GLOBALS['url'][0] == 'Magasin') { //Magasin
        require('controller/page/magasin.php');
        magasin_view();
    } elseif ($GLOBALS['url'][0] == 'Règlement' and empty($GLOBALS['url'][1])) {
        require('controller/page/reglement.php');
        règlementView();
    } elseif ($GLOBALS['url'][0] == 'Inscription'and empty($GLOBALS['url'][1])) { //Inscription
        require('controller/auth/inscription.php');
        inscri_view();
    } elseif ($GLOBALS['url'][0] == 'Connexion'and empty($GLOBALS['url'][1])) { //Connexion
        require('controller/auth/connexion.php');
        connect_view();
    } elseif ($GLOBALS['url'][0] == 'Profil') { //Profil
        require('controller/page/profil.php');
        profil_view();
    } elseif ($GLOBALS['url'][0] == 'Deconnexion'and empty($GLOBALS['url'][1])) { //Deconnexion
        require('controller/auth/deconnexion.php');
    } else { //Pas de page = error 404
        require('controller/page/error_404.php'and empty($GLOBALS['url'][1]));
        error_404_view();
    }
} catch (\Exception $e) { //Affiche l'erreur
    $GLOBALS['error'] = $e->getMessage();
}

//append info into template
require('view/template.php');
