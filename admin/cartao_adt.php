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
  $xcrud->table('cartao_adt');

  // colunas na tabela
  $xcrud->columns('id_adiantado,id_nd,numero,senha,validade');

  // Grava no id_processos da tabela convite id da tabela processos e mostra o N.D
  $xcrud->relation('id_nd','nd','id', 'recdesp');

  // Grava no id_processos da tabela convite id da tabela adiantado e mostra o Nome
  $xcrud->relation('id_adiantado','adiantado','id', 'nome');

  // mostra o campo id_processo como nº. do processo
  $xcrud->label('id_nd','N.D');
  $xcrud->label('id_adiantado','Adiantado');

  // Tamanho da coluna da tabela
  $xcrud->column_width('id, id_ptres,id_nd','15%');

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
