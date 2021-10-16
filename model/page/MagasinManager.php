<?php
namespace TGS\Arffornia\Model;

require('model/Manager.php');

class MagasinManager extends Manager
{
    //get all articles into database
    public function __getArticles()
    {
      $db = $this->__dbConnect();
      $req = $db->query('SELECT id, item, description, cost, max_number, picture_link FROM shop');

      return $req;
    }

    //get article clicked into database
    public function __getArticle($id)
    {
      $db = $this->__dbConnect();
      $req = $db->prepare('SELECT item, description, cost, max_number, picture_link, contain FROM shop WHERE id = ? ');
      $req->execute(array($id));
      $article = $req->fetch();

      return $article;
    }
}
