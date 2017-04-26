<?php
session_start();
if(!$_SESSION['usuariologado'] && !$usuariologado['usuarioID']){
   header("Location:login.php");
}
?>	