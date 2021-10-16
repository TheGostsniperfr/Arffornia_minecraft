<?php

//titre
$GLOBALS['title'] = "Accueil - Arffornia";

ob_start();
?>


<div id="particles-js" class="fassade">
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <!-- slogan -->
  <div class="fassade_contain">
    <p class="fassade_text">Lorsqu'on rêve tout seul, ce n'est qu'un rêve </br>Alors que lorsqu'on rêve à plusieurs c'est une réalité ! </br><span id="title_fassade_text_bis"><span id="title_fassade_text">Arffornia</span> un rêve, une réalité.</span></p>
  </div>

</div>

<div class="containerBar">

  <!-- Number of people connected -->
  <div class="nb_connected">
    <i class="fas fa-chart-area" style="padding-right: 5px;"></i>
    <span>Joueur en ligne : <?= nb_connected() ?></span>
  </div>

  <!-- Rejoin button -->
  <div class="rejoin_button_container">
    <button onclick="window.location.href='public/dowload/Arffornia_V.2.exe';" type="button" name="button" class="rejoin_button">Nous rejoindre !</button>
  </div>

  <!-- lien discord  -->
  <div class="discord_button" onclick="window.location.href='https://discord.gg/CWH6w67';">
    <i class="fab fa-discord"></i>
    Discord
  </div>

</div>

<div class="presentation_container"> <!-- création de 3 cases avec icon + trait de séparation + description ( a la vertical et couleur discord) -->

  <!-- openworld -->
  <div class="presentation_contain">
    <img src="public/image/world.png" class="presentation_container_img">
    <div class="horizontal_line"></div>
    <p>Un monde totatelment ouvert.</p><p class="presentation_desciption_bis">Equiper-vous et partez à l'avanture !</p>
  </div>

  <!-- survival  -->
  <div class="presentation_contain">
    <img src="public/image/campfire.png" class="presentation_container_img">
    <div class="horizontal_line"></div>
    <p>Une survie en multijoueur.</p><p class="presentation_desciption_bis">Récolter, crafter, construisé !</p>
  </div>

  <!-- mods -->
  <div class="presentation_contain">
    <img src="public/image/tools.png" class="presentation_container_img">
    <div class="horizontal_line"></div>
    <p>De nombreux mods.</p><p class="presentation_desciption_bis">Pour repousser toujours plus les limites !</p>
  </div>

</div>
<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
