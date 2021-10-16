<?php

require_once('model/page/MagasinManager.php');

function magasin_view()
{
    if (!empty($GLOBALS['url'][1])) {

        //ahat de l'item
        if (isset($_POST['buy_now'])) {
            //verif si connect
            if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
              //verif si argent suffisante


            }
        } else {

        //affichage de la page
        $magasinManager = new \TGS\Arffornia\Model\MagasinManager();
        $getArticle = $magasinManager->__getArticle($GLOBALS['url'][1]);

        //nombre max d'article pouvant être acheter par le même joueur
        $max_buy = '';

        if ($getArticle['max_number'] == -1) {
            $max_buy = 'Aucune limite';
        } elseif ($getArticle['max_number'] == 0) {
            $max_buy = 'Produit indisponible';
        } else {
            //mettre table associé pour savoir le nombre de fois qu'un joueur a achter le produit
            $max_buy = $getArticle['max_number'];
        }

        require('view/page/articleView.php');
      }
    } else {

    //get article into database
        $magasinManager = new \TGS\Arffornia\Model\MagasinManager();
        $getArticles = $magasinManager->__getArticles();

        require('view/page/magasinView.php');
    }
}
