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
  // tabela usada                   
  $xcrud->table('processos');
  $xcrud->default_tab('Processos');                      
  $xcrud->columns('numero,ano,descricao'); // colunas na tabela
  // Tamanho da coluna da tabela                      
  $xcrud->column_width('numero','10%');
  $xcrud->column_width('ano','10%');
  $xcrud->column_width('descricao','100%');
  // corta o texto com 250 caracteres
  $xcrud->column_cut(250,'descricao');                   
  // paginação                    
  $xcrud->limit(10); 
  
  $empresascad = $xcrud->nested_table('Empresas ','id','empresas_processos','id_processos');          
  $empresascad->join('id_empresas','empresas','id');                    
  // renderiza a tabela   
  echo $xcrud->render();
?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>