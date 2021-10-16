<?php

//titre
$GLOBALS['title'] = "Profil - Arffornia";

ob_start();
?>

<div class="principal_bg">
    <div class="profil_container">
        <div class="title_profil">
            <p>Mon compte :</p>
        </div>
        <div class="profil_contain">
            <table>

                <tr>
                    <td>Pseudonyme : </td>
                    <td><?= $pseudo ?></td>
                </tr>
                <tr>
                    <td>Monnais : </td>
                    <td><?= $coins ?></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Date de création : </td>
                    <td><?= $date_inscription ?></td>
                </tr>

            </table>
        </div>
        <div class="modif_password_container">
            <form action="http://localhost/Arffornia/Profil" method="post">
                <p>Modifier mon mot de passe : </p></br>
                <input class="input_sign_up" name="password" type="password" placeholder="Mot de passe actuel" required=""></br>
                <input class="input_sign_up" name="new_password" type="password" placeholder="Nouveau mot de passe" required=""></br>
                <div id="modif_pass_button">
                    <input class="snign_up_button" name="submit" type="submit" value="Modifier">
                </div>
            </form>
        </div>

        <div class="delete_account_container">

          <form class="" action="http://localhost/Arffornia/Profil/delete_account" method="post">

            <p id="title_delete_account">Supprimer son compte :</p> </br>

            <input type="checkbox" id="delete_security" onclick='check()'>
            <label for="delete_security">Je suis sur de vouloir le supprimer</label> </br>

            <input type="submit" id="delete_btn" value="Supprimer mon compte" disabled="disabled" >

            <script type="text/javascript">
            function check()
              {
              if(document.getElementById('delete_security').checked == true){
                document.getElementById('delete_btn').disabled=false;
                }
                else {
                  document.getElementById('delete_btn').disabled=true;
                }
              }
            </script>
          </form>
        </div>

    </div>
</div>
<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
