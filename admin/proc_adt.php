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
  $xcrud->table('proc_adt');

  // colunas na tabela
  $xcrud->columns('id,id_adiantado,id_ptres,id_nd,valor_inicial,valor_gasto,valor_recolhido,observacao');

  // Grava no id_processos da tabela convite id da tabela processos e mostra o numero
  $xcrud->relation('id_processo','processos','id', 'numero');

  // Grava no id_processos da tabela convite id da tabela processos e mostra o N.D
  $xcrud->relation('id_nd','nd','id', 'recdesp');

  // Grava no id_processos da tabela convite id da tabela processos e mostra o PTRES
  $xcrud->relation('id_ptres','ptres','id', 'ptres');

  // Grava no id_processos da tabela convite id da tabela processos e mostra o Nome
  $xcrud->relation('id_adiantado','adiantado','id', 'nome');

  // colunas na tabela
  //$xcrud->columns('numero,ano,id_processo,descricao');

  // mostra o campo id_processo como nº. do processo
  $xcrud->label('id','Nº. do  Processo');
  $xcrud->label('id_nd','N.D');
  $xcrud->label('id_ptres','PTRES');
  $xcrud->label('id_adiantado','Adiantado');

  // Coloca o Sifrão e a casa decimal no campo
  $xcrud->change_type('valor_inicial', 'price', '0', array('separator'=>'.','prefix'=>'R$ ','point'=>','));
  $xcrud->change_type('valor_gasto', 'price', '0', array('separator'=>'.','prefix'=>'R$ ','point'=>','));
  $xcrud->change_type('valor_recolhido', 'price', '0', array('separator'=>'.','prefix'=>'R$ ','point'=>',')); 
  // Tamanho da coluna da tabela
  $xcrud->column_width('id, id_ptres,id_nd','5%');
  $xcrud->column_width('observacao','30%');

  // corta o texto com 250 caracteres
  //$xcrud->column_cut(250,'descricao');

  // classe da tabela - alinha a campos  no meio da coluna
 // $xcrud->column_class('numero, ano,id_processo','align-center font-bold');

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
