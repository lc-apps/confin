        <?php
			if($_SESSION['usuariologado']) {
				$usuario = new DB();
                $tabela = 'usuarios';
				$conditions['where'] = array(
					'id' => $_SESSION['usuarioID'],
				);
				$conditions['return_type'] = 'single';
				$dados = $usuario ->getRows($tabela ,$conditions);
		?>
   
               
       <?php }?>            