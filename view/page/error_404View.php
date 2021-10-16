<?php

//titre
$GLOBALS['title'] = "Page non trouvé";

ob_start();
?>

<h1>Error 404 :</h1>

<?php

//contenue
$GLOBALS['content'] = ob_get_clean();
