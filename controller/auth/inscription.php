<?php

require_once('model/auth/InscriptionManager.php');
require_once('library/rcon.php');
use Thedudeguy\Rcon;

function inscri_view()
{
    require('view/auth/inscriptionView.php');

    //Inscription

    //Account info verification
    if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['email'])) {
        if (!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['email'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $password = htmlspecialchars($_POST['password']);
            $confirm_password= htmlspecialchars($_POST['confirm_password']);
            $email = htmlspecialchars($_POST['email']);
            //verif password
            if ($password == $confirm_password) {
                //verif Email
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //check double account
                    $inscriptionManager = new \TGS\Arffornia\Model\InscriptionManager();
                    $verif = $inscriptionManager->__verifAccount();
                    while ($info = $verif->fetch()) {
                        if ($pseudo == $info['pseudo'] || $email == $info['email']) {
                            throw new \Exception("Pseudo ou email déjà utilisé", 1);
                        }
                    }
                    //register new account
                    //$newAccount = $inscriptionManager->__addAccount($pseudo, $password, $email);

                    //add whitelist the pseudo of player
                    $host = 'thegostserveur.ddns.net';  // Server host name or IP
                    $port = 25575;                      // Port rcon is listening on
                    $password = 'ackmce';               // rcon.password setting set in server.properties
                    $timeout = 3;                       // How long to timeout.



                    $rcon = new Rcon($host, $port, $password, $timeout);

                    if ($rcon->connect())
                    {
                      $rcon->sendCommand("whitelist add " . $pseudo);
                    }



                    if ($newAccount === false) {
                        throw new Exception('Impossible d\'ajouter le commentaire !');
                    } else {
                        header('Location: http://localhost/Arffornia/');
                    }
                } else {
                    throw new \Exception("Email non valide", 1);
                }
            } else {
                throw new \Exception("Mot de passe contradictoire", 1);
            }
        } else {
            throw new \Exception("Tous les champs ne sont pas remplit", 1);
        }
    }
}
