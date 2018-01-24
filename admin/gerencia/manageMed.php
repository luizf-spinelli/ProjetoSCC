<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
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
    $dadosmed = array();
    
    $pd=mysqli_prepare($con,"SELECT IDMEDIDA,IDCLIENTE,OBS FROM CLIENTE_MEDIDAS ORDER BY IDMEDIDA ASC LIMIT ?,?");
    mysqli_stmt_bind_param($pd,"ii",$inicioPagina,$tamanhoPagina);
    mysqli_stmt_execute($pd);
    mysqli_stmt_bind_result($pd,$idmedida,$idcliente,$obs);
    while(mysqli_stmt_fetch($pd))
    {
      array_push($dadosmed,array($idmedida,$idcliente,$obs));
      $_SESSION["idmedida"]=++$idmedida;
    }
    include_once("./layout/gerenciarMed.php");
  }
?>