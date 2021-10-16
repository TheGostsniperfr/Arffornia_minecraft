<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?= $GLOBALS['title'] ?></title>
    <link rel="stylesheet" href="/Arffornia/public/CSS/style.css">
    <link rel="icon" href="/Arffornia/public/image/favicon.ico">
    <script src="https://kit.fontawesome.com/60f085d187.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- Navbar -->
    <?php require('view/layout/header.php'); ?>

    <!-- Error popup -->
    <?php
    if($GLOBALS['error'] != ''){ ?>
      <div class="error_container">
        <span id="error_text"><i class="fas fa-exclamation-triangle"></i><?= " Erreur : " . $GLOBALS['error'] ?></span>
      </div>
  <?php  }
     ?>

     <!-- Page content -->
    <?= $GLOBALS['content'] ?>

    <?php require('view/layout/foother.php') ?>

  </body>
</html>
