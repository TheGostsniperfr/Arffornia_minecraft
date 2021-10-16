<?php

if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
  //Delete all data into $_SESSION
  $_SESSION = array();
  session_destroy();

  header('Location: http://localhost/Arffornia/');
}
else {
  throw new \Exception("Vous n'êtes pas connecté", 1);
}
