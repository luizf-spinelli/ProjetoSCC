<?php
  $tamanhoPagina=50;
  $inicioPagina=0;
  if (isset($_SERVER["PATH_INFO"])) {
    $pinfo = explode("/",$_SERVER["PATH_INFO"]);  
    if (isset($pinfo[1]) && isset($pinfo[2])) {
      if ($pinfo[1]=="Proxima") {
        $inicioPagina = (int)$pinfo[2] + $tamanhoPagina;
      } else if ($pinfo[1]=="Anterior") {
        $inicioPagina = (int)$pinfo[2] - $tamanhoPagina;
        if ($inicioPagina<0) $inicioPagina=0; 
      }
    }
  }
  include_once("../functions/conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("../report.php");
  } else {
    $dados = array();
    $ps=mysqli_prepare($con,"SELECT IDCLIENTE,NOME FROM CLIENTE ORDER BY NOME ASC LIMIT ?,?");
    mysqli_stmt_bind_param($ps,"ii",$inicioPagina,$tamanhoPagina);
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$idcliente,$nm);
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dados,array($idcliente,$nm));
      $_SESSION["idcliente"]=++$idcliente;
    }
    include_once("./layout/listagem.php");
  }
?>