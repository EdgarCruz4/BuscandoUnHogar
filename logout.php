<?php
session_start();
   session_destroy();
   unset($_SESSION["username"]);
   unset($_SESSION['valid']);
   header('Refresh: 0; URL = index.php');
?>