<?php

//titre
$GLOBALS['title'] = "Règlement - Arffornia";

ob_start();
?>

<div class="principal_bg">
  <div class="container_reglement">
    <div class="title_reglement">
      <p>Règlement du jeu :</p></br>
    </div>
    <div class="contain_reglement">
      <p><span class="title_para_reglement">In-Game :</span></br></br>
        Arffornia est avant tout un serveur Minecraft de build où l’on fait sa propre survie.</br>
        La dégradation de build, l'appropriation ou le déplacement d’un bien d’autre joueur sans son consentement y est donc interdit.</br>
        Seul les « pranks » rare et original autorise un ou des joueurs à posé des blocks sur le territoire d'autrui pendant la préparation de la prank.</br>
        L’utilisation d’un système tiers quelconque permettant de tricher est interdit ( macro compris ).</br>
        La modification du launcher ou d’un autre que celui officiel d’Arffornia est interdite.</br>
        L’utilisation de machine ou use bug pour dupliquer est interdite.</br>
        L’anti AFK est interdit, le serveur gère tout seul la déconnexion si cela entraîne des baisse de performance pour les autres joueurs.</br></br>
        <span class="title_para_reglement">Espace de discutions :</span></br></br>
        Les insultes ne relevant pas d’un contexte euphorique précis sont interdit.</br>
        Les mots, ou image, lien qui ont un lien sexuel est interdit.</br>
        Le spam abusif est interdit.</p>
    </div>
  </div>
</div>

<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
