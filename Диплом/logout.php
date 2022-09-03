<?php

session_start();
$_SESSION = array();

 unset($_SESSION["name"]);
 unset($_SESSION["admin"]);

if(session_destroy()){
header("location:glavnya.php");	
}

?>