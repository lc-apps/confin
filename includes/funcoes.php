<?php
function primeiroNome($str){
  $nome = explode(" ",$str);
  $primeiro_nome = $nome[0];
  return $primeiro_nome;
}

function validaUrl( $url ) {
    $pos = strpos( $url, 'http://' );
    if( $pos === false ) $url = 'http://' . $url;
    return $url;
}

function config($parametro){
  $configuracoes = new DB();
  $condicoes['where'] = array(
     'id' => 1,
   );
   $condicoes['return_type'] = 'single';
   $dados = $configuracoes ->getRows('config' ,$condicoes);		
   $obj = json_decode($dados['valor']);
   return $obj-> {$parametro};
}


