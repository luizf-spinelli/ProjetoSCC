<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  $tamanhoPagina=100;
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
    $dadosesq = array();
    $ps=mysqli_prepare($con,"SELECT ID,NOME,EMAIL,DESCRICAO,IMAGEM FROM esquema ORDER BY ID ASC LIMIT ?,?");
    mysqli_stmt_bind_param($ps,"ii",$inicioPagina,$tamanhoPagina);
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$id,$nome,$email,$desc,$img);
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dadosesq,array($id,$nome,$email,$img));
      $_SESSION["id"]=++$id;
    }
    include_once("./layout/gerenciarEsq.php");
  }
?>