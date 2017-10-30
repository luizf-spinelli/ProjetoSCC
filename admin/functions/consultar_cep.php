<?php
 
$cep = $_POST['CEP'];
 
$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
 
$dados['sucesso'] = (string) $reg->resultado;
$dados['RUA']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
$dados['BRR']  = (string) $reg->bairro;
$dados['CID']  = (string) $reg->cidade;
$dados['EST']  = (string) $reg->uf;
 
echo json_encode($dados);
 
?>