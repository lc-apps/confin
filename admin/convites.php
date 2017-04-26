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
  $xcrud->table('convites');
                      
  // Grava no id_processos da tabela convite id da tabela processos e mostra o numero                      
  $xcrud->relation('id_processo','processos','id', 'numero');
                      
  // colunas na tabela                     
  $xcrud->columns('numero,ano,id_processo,descricao');
                      
  // mostra o campo id_processo como nº. do processo                      
  $xcrud->label('id_processo','Nº. do  Processo'); 
                      
  // Tamanho da coluna da tabela                      
  $xcrud->column_width('numero,ano','5%');                      
  $xcrud->column_width('id_processo','10%');
                      
  // corta o texto com 250 caracteres
  $xcrud->column_cut(250,'descricao'); 
                      
  // classe da tabela - alinha a campos  no meio da coluna
  $xcrud->column_class('numero, ano,id_processo','align-center font-bold');
                      
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

