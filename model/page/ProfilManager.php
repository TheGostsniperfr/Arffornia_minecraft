<?php
namespace TGS\Arffornia\Model;

require('model/Manager.php');

class ProfilManager extends Manager
{
    public function __infoProfil($pseudo)
    {
        $db = $this->__dbConnect();
        $req = $db->prepare('SELECT email, date_incription, coins FROM membre WHERE pseudo = ?');
        $req->execute(array($pseudo));
        $infoPlayer = $req->fetch();

        return $infoPlayer;
    }

    public function __verifPassword($id)
    {
        $db = $this->__dbConnect();
        $req = $db->prepare('SELECT pass FROM membre WHERE id = ?');
        $req->execute(array($id));
        $verif = $req->fetch();

        return $verif;
    }

    public function __newPassword($id, $new_password)
    {
        $db = $this->__dbConnect();
        $req = $db->prepare('UPDATE membre SET pass= ? WHERE id = ?');
        $req->execute(array(password_hash($new_password, PASSWORD_DEFAULT), $id));
    }

    public function __DeleteAccount($id)
    {
      $db = $this->__dbConnect();
      $req = $db->prepare('DELETE FROM membre WHERE id = ?');
      $req->execute(array($id));
    }
}
