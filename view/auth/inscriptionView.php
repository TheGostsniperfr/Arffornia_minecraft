<?php

//titre
$GLOBALS['title'] = "Inscription - Arffornia";

ob_start();
?>

<!-- pseudonyme souhaité -->
<!-- mot de passe -->
<!-- confirmation du mot de passe -->
<!-- addresse email -->

<form class="sign_up" action="http://localhost/Arffornia/Inscription" method="post">

<div class="container_sign_up">

    <h2 class="sign_up_title">Inscription</h2>

    <div class="input_sign_up_container">
      <input class="input_sign_up" name="pseudo" type="text" placeholder="Pseudonyme" required>
    </div>

    <div class="input_sign_up_container">
      <input class="input_sign_up" name="password" type="password" placeholder="Mot de passe" required>
    </div>

    <div class="input_sign_up_container">
      <input class="input_sign_up" name="confirm_password" type="password" placeholder="Confirmation" required>
    </div>

    <div class="input_sign_up_container">
      <input class="input_sign_up" name="email" type="email" placeholder="Email" required>
    </div>

    <div class="sign_up_button_container">
      <input class="snign_up_button" name="submit" type="submit" value="S'inscrire">
    </div>

</div>

</form>

<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
