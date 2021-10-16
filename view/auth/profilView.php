<?php

//titre
$GLOBALS['title'] = "";

ob_start();
?>



<?php

//contenue
$content = ob_get_clean();

//add info into template
require('view/template.php');
