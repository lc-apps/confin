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

  $xcrud->table('produtos_subcategorias');
  $xcrud->relation('idcategoria','produtos_categorias','id','descricao');

  echo $xcrud->render();

?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>