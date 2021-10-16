<div class="navbar">
    <!--  Navigation bar -->

    <div class="navbarContainer">
        <a href="http://localhost/Arffornia/" class="navbarBtn  <?php if ($GLOBALS['url'] == '') {
    echo 'navbarBtnActu';
} ?>"> Arffornia </a>
    </div>

    <div class="navbardown">

        <a href="Magasin" class="navbarBtn <?php if ($GLOBALS['url'][0] == 'Magasin') {
    echo 'navbarBtnActu';
} ?>"> Magasin </a>
        <a href="Règlement" class="navbarBtn <?php if ($GLOBALS['url'][0] == 'Règlement') {
    echo 'navbarBtnActu';
} ?>"> Règlement </a>
        <span class="navbarBtn <?php if (($GLOBALS['url'][0] == 'Inscription') OR ($GLOBALS['url'][0] == 'Connexion') OR ($GLOBALS['url'][0] == 'Profil') OR ($GLOBALS['url'][0] == 'Deconnexion')) {
    echo ('navbarBtnActu');
} ?>">
            <div class="dropdown"><span> Espace membre <i class="caret"></i></span>
                <div class="dropdown-content">
                    <div>
                        <?= auth() ?>
                    </div>
                </div>
            </div>
        </span>

    </div>

</div>
