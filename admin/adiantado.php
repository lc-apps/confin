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
    // chama a tabela
    $xcrud->table('adiantado');

    // Grava no id_cartao da tabela adiantado id da tabela cartao_adt e mostra o numero
    $xcrud->relation('id_cartao','cartao_adt','id', 'numero');

    // mostra o campo com outros nome
    $xcrud->columns('nome,cpf,agencia,conta,id_cartao');

    // colunas na tabela
    $xcrud->label('nome','Nome');
    $xcrud->label('cpf','CPF');
    $xcrud->label('agencia','Agencia');
    $xcrud->label('conta','Conta');
    $xcrud->label('id_cartao','Cartao');

    // Tamanho da coluna da tabela
    $xcrud->column_width('agencia,conta','10%');
    $xcrud->column_width('nome,cpf','25%');

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
