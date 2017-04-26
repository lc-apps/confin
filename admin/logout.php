<?php
session_start();
unset( $_SESSION['usuarioID'] );
unset( $_SESSION['usuariologado'] );
header("Location:admin.php");
?>