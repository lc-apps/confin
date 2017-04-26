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
  $xcrud->table('ptres');                     
  $xcrud->columns('ptres,programatrabalho,nome'); // colunas na tabela
  // Tamanho da coluna da tabela                      
  $xcrud->column_width('ptres,programatrabalho','20%');
  $xcrud->column_width('nome','80%');
                      
  // mostra o campo id_processo como nº. do processo                      
  $xcrud->label('ptres','PTRES'); 
  $xcrud->label('programatrabalho','Prpgrama de Trabalho'); 

  // corta o texto com 250 caracteres
  $xcrud->column_cut(250,'nome');                   
  // paginação                    
  $xcrud->limit(10); 
  
  
  echo $xcrud->render();
?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>