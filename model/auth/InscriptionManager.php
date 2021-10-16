<?php
namespace TGS\Arffornia\Model;

require('model/Manager.php');

class InscriptionManager extends Manager
{

  public function __verifAccount()
  {
    $db = $this->__dbConnect();
    $req = $db->query('SELECT pseudo, email FROM membre');

    return $req;
  }

  public function __addAccount($pseudo, $password, $email)
  {
    $db = $this->__dbConnect();
    $req = $db->prepare('INSERT INTO membre(pseudo, pass, email, id_groupe, coins) VALUES(?, ?, ?, 1, 0)');
    $newAccount = $req->execute(array($pseudo, password_hash($_POST['password'], PASSWORD_DEFAULT), $email));

    return $newAccount;
  }
}
