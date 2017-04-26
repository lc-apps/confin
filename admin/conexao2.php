<?php
$conn = @mysql_connect('localhost','root','');
if (!$conn) {
	die('Não conectou: ' . mysql_error());
}
mysql_select_db('confin', $conn);
mysql_set_charset('utf8',$conn);
?>