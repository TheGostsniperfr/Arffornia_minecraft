<?php

require_once('model/page/ProfilManager.php');

function profil_view()
{
    //check if user was connected
    if (!isset($_SESSION['id']) and !isset($_SESSION['pseudo'])) {

        require('view/page/error_404View.php');
        throw new \Exception("Page non trouvé", 1);
    } else {
        //get info of user
        $profilManager = new \TGS\Arffornia\Model\ProfilManager();
        $infoPlayer = $profilManager->__infoProfil($_SESSION['pseudo']);

        $pseudo = $_SESSION['pseudo'];
        $coins = $infoPlayer['coins'];
        $email = $infoPlayer['email'];
        $date_inscription = $infoPlayer['date_incription'];

        require('view/page/profilView.php');
    }

    if (isset($_POST['password']) && isset($_POST['new_password'])) {
        if (!empty($_POST['password']) && !empty($_POST['new_password'])) {
            $password = htmlspecialchars($_POST['password']);
            $new_password = htmlspecialchars($_POST['new_password']);
            if ($password != $new_password) {
                //change password
                $profilManager = new \TGS\Arffornia\Model\ProfilManager();
                $verifPassword = $profilManager->__verifPassword($_SESSION['id']);
                if (!$verifPassword) {
                    throw new \Exception("Mauvais identifiant ou mot de passe !", 1);
                } elseif (password_verify($password, $verifPassword['pass'])) {
                    $profilManager->__newPassword($_SESSION['id'], $new_password);
                    header('Location: http://localhost/Arffornia/Profil');
                } else {
                    throw new \Exception("Mauvais mot de passe !", 1);
                }
            }
        } else {
            throw new \Exception("Tous les champs ne sont pas remplit", 1);
        }
    }
    if(isset($GLOBALS['url'][1])){
      if($GLOBALS['url'][1] == 'delete_account'){

        //remove to whitelist
        $host = 'thegostserveur.ddns.net';  // Server host name or IP
        $port = 25575;                      // Port rcon is listening on
        $password = 'ackmce';               // rcon.password setting set in server.properties
        $timeout = 3;                       // How long to timeout.



        $rcon = new Rcon($host, $port, $password, $timeout);

        if ($rcon->connect())
        {
          $rcon->sendCommand("whitelist remove " . $pseudo);
        }

        //delete account in SQLiteDatabase
        $profilManager = new \TGS\Arffornia\Model\ProfilManager();
        $delete_account = $profilManager->__DeleteAccount($_SESSION['id']);


        //delete session and redirection to home
        $_SESSION = array();
        session_destroy();

        header('Location: http://localhost/Arffornia');
      }
    }
}
