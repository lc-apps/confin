<?php 
	include '../includes/DB.php';
	include '../includes/funcoes.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo config('titulo'); ?> | Administração</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
     <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin.php?m=principal.php" class="site_title">
                 <span><?php echo config('titulo'); ?></span>
                 <h4><?php echo config('slogan'); ?></h4>
                </a>
            </div>

             <?php include 'menu_perfil.php';?>

            <br />
            <br />
            <br />

            <?php include 'menu_admin.php';?>
            <?php include 'menu_rodape.php';?>

          </div>
        </div>
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


<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php if (empty($dados['foto'])){ echo '../img/user.png'; } else { echo '../'.config('pastadetrabalho'); ?>/fotos/usuarios/<?php echo $dados['foto']; }?>"  width="50" height="50" alt=""><?php echo primeiroNome($dados['nome']); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Logout</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php }?>  