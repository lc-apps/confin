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
    $xcrud->table('empresas_processos'); // chama a tabela 
                      
   // $xcrud->columns('nome,telefone,celular,contato,email,cidade'); // colunas na tabela 
                      
    // Grava no id_processos da tabela empresas_processos id da tabela processos e mostra o numero                      
    $xcrud->relation('id_processos','processos','id', 'numero');                  
    $xcrud->relation('id_empresas','empresas','id', 'nome');  
                      
    echo $xcrud->render();
                 
?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>