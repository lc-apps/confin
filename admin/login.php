<?php
session_start();

if(isset($_SESSION['usuarioID'])!="") {
	header("Location: login.php");
}

include_once '../includes/DB.php';
$usuario = new DB();
$tabela = 'usuarios';
//check if form is submitted
if (isset($_POST['login'])) {

        $conditions['where'] = array(
            'email' => $_POST['email'],
            'senha' => md5($_POST['senha']),
            'status' => 'Ativo'
        );
        $conditions['return_type'] = 'single';
        $dados = $usuario->getRows($tabela,$conditions);
        if($dados){
            $_SESSION['usuariologado'] = TRUE;
            $_SESSION['usuarioID'] = $dados['id'];
			$_SESSION['usuarionome'] = $dados['nome'];
			header("Location: admin.php");
        }else{
            $msgerro = "E-mail ou senha incorreto(s)!";
        }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
</head>
<body>


<div class="container">
	<div class="row" Style= "min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
		<div class="col-md-4 col-md-offset-4 well" >
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">E-mail</label>
						<input type="text" name="email" placeholder="Seu e-mail" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Senha</label>
						<input type="password" name="senha" placeholder="Sua senha" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($msgerro)) { echo $msgerro; } ?></span>
		</div>
	</div>

</div>

<script src="../vendors/jquery/dist/jquery.mim.js"></script>
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
