<?php

require_once('model/auth/ConnexionManager.php');

function connect_view()
{
    require('view/auth/connexionView.php');

    //connexion
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
        if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $password = htmlspecialchars($_POST['password']);
            //existing account verification
            $connexionManager = new \TGS\Arffornia\Model\ConnexionManager();
            $verif = $connexionManager->__verifExistingAccout($pseudo);
            if (!$verif) {
                throw new \Exception("Mauvais identifiant ou mot de passe !", 1);
            } elseif (password_verify($password, $verif['pass'])) {
                session_start();
                $_SESSION['id'] = $verif['id'];
                $_SESSION['id_groupe'] = $verif["id_groupe"];
                $_SESSION['pseudo'] = $pseudo;
                header('Location: http://localhost/Arffornia/');
            } else {
                throw new \Exception("Mauvais identifiant ou mot de passe !", 1);
            }
        }
    }
}
