<?php
     header('Content-Type: application/json');
    include 'conexao2.php';
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
    $sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'produto';
    $order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';	
	$chave = isset($_POST['chave']) ? mysql_real_escape_string($_POST['chave']) : '';
	
	$offset = ($page-1)*$rows;
	
	$result = array();

	
	$where = "produto like '%$chave%' or ean like '%$chave%'";
	$rs = mysql_query("select count(*) from produtos where $where");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from produtos where $where order by $sort $order limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);
       
?>