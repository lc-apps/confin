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
    $xcrud->table('adiantado'); // chama a tabela
    $xcrud->columns('nome,cpf,agencia,conta'); // colunas na tabela
    // mostra o campo com outros nome
    $xcrud->label('nome','Nome');
    $xcrud->label('cpf','CPF');
    $xcrud->label('agencia','Agencia');
    $xcrud->label('conta','Conta');

    // Tamanho da coluna da tabela
    $xcrud->column_width('agencia,conta','15%');
    

    // corta o texto com 250 caracteres
    $xcrud->column_cut(250,'descricao');
    echo $xcrud->render();

?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include 'rodape.php';?>
