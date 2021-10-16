<?php
//titre
$GLOBALS['title'] = $getArticle['item'] . " - Arffornia";

ob_start();
?>

<div class="principal_bg">
  <div class="contain_article">
    <div >
        <img class="picture_article" src="<?= $getArticle['picture_link'] ?>" alt="">
    </div>
    <div class="title_article">
      <?= $getArticle['item'] ?> :
    </div>
    <div class="info_article">

      <p><?= $getArticle['description'] ?>  </p>
      <table class="contain_info_article">

          <tr>
              <td>Contenue : </td>
              <td><?= $getArticle['contain'] ?></td>
          </tr>
          <tr>
              <td>Limite d'achat : </td>
              <td><?= $max_buy ?></td>
          </tr>
          <tr>
              <td>Prix : </td>
              <td><?= $getArticle['cost'] ?></td>
          </tr>

      </table>
    </div>

    <div class="buy_article_button">
      <form class="" action="" method="post">
        <input class="snign_up_button" name="buy_now" type="submit" value="Acheter">
      </form>
    </div>

  </div>
</div>

<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
?>
