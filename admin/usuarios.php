<?php include 'login_verificar_logado.php';?>	
<?php include 'topo.php';?>	
<?php include '../includes/xcrud.php';?>	
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

<?php 

   $xcrud = Xcrud::get_instance(); 
   $xcrud->table('usuarios');
   $xcrud->columns('foto,nome,email,perfil,criado,modificado,status'); 
   $xcrud->fields('nome,email,senha,foto,perfil,status');
   $xcrud->validation_required('nome',3);
   $xcrud->change_type('senha', 'password', 'md5', array('maxlength'=>10)); 
   $xcrud->pass_var('criado', date('Y-m-d H:i:s'), 'create');
   $xcrud->pass_var('modificado', date('Y-m-d H:i:s'), 'edit');
   $xcrud->change_type('foto', 'image', '', array(
        'width' => 240,
		'crop' => true,
        'path' => '../confin/fotos/usuarios')); 
  $xcrud->label('email','E-mail'); 
  echo $xcrud->render(); 
?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>