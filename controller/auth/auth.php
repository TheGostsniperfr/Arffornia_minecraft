<?php

//Check session exist and post the espace membre
function auth()
{
    $dropdown = '';

    if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
        ob_start(); ?>

      <a class="dropdowntexte" href="/Arffornia/Profil">Profil</a> <br>
      <a class="dropdowntexte" href="/Arffornia/Deconnexion">Déconnexion</a>

<?php

    $dropdown = ob_get_clean();
    } else {
        ob_start(); ?>

    <a class="dropdowntexte" href="/Arffornia/Inscription">Inscription</a> <br>
    <a class="dropdowntexte" href="/Arffornia/Connexion">Connexion</a>

<?php

    $dropdown = ob_get_clean();
    }
    return $dropdown;
}
