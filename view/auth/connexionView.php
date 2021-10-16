<?php

//titre
$GLOBALS['title'] = "Connexion - Arffornia";

ob_start();
?>

<form class="sign_up" action="http://localhost/Arffornia/Connexion" method="post">

  <div class="container_sign_up">

      <h2 class="sign_up_title">Connexion</h2>

      <div class="input_sign_up_container">
        <input class="input_sign_up" name="pseudo" type="text" placeholder="Pseudonyme" required>
      </div>

      <div class="input_sign_up_container">
        <input class="input_sign_up" name="password" type="password" placeholder="Mot de passe" required>
      </div>

      <div class="sign_up_button_container">
        <input class="snign_up_button" name="submit" type="submit" value="Connexion">
      </div>

  </div>


</form>

<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
