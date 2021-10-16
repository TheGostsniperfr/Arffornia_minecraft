<?php
//titre
$GLOBALS['title'] = "Magasin - Arffornia";

ob_start();
?>

<div class="principal_bg">
  <div class="article_container">

  <?php while ($articles = $getArticles->fetch()) { ?>
    <a href="Magasin/<?= $articles['id']?>">
      <div class="article_contain">
        <div>
          <img class="article_picture" src=" <?= $articles['picture_link'] //picture 512x512 px?> " alt="">
        </div>
        <div class="horizontal_line"></div>
        <div class="article_title">
           <?= $articles['item'] ?>
        </div>
        <div class="article_info">
          <?= $articles['description'] ?>
        </div>
      </div>
      </a>

  <?php } ?>

  </div>
</div>
<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
?>
