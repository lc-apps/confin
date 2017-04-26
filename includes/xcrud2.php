<?php
   include ('xcrud/xcrud.php');
   $theme = isset($_GET['theme']) ? $_GET['theme'] : 'default';
   Xcrud_config::$theme = 'bootstrap';
   $title_2 = 'Bootstrap theme';
?>