<?php
namespace TGS\Arffornia\Model;

require('model/Manager.php');

class ConnexionManager extends Manager
{
    public function __verifExistingAccout($pseudo)
    {
        $db = $this->__dbConnect();
        $req = $db->prepare('SELECT id, pass, id_groupe FROM membre WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $verif = $req->fetch();

        return $verif;
    }
}
