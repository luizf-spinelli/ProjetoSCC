<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  include_once("../functions/conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("../report.php");
  } else {      
    $dadosesq = array();    
    $pt=mysqli_prepare($con,"SELECT ID,NOME,EMAIL,IMAGEM FROM esquema WHERE ID=?");
    mysqli_stmt_bind_param($pt,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($pt);
    mysqli_stmt_bind_result($pt,$id,$nome,$email,$img);    
    while(mysqli_stmt_fetch($pt))
    {
      array_push($dadosesq,array($id,$nome,$email,$img));
      $_SESSION["id"]=$id;
    }
    
    $dadosdesc = array();    
    $pd=mysqli_prepare($con,"SELECT DESCRICAO FROM esquema WHERE ID=?");
    mysqli_stmt_bind_param($pd,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($pd);
    mysqli_stmt_bind_result($pd,$desc);    
    while(mysqli_stmt_fetch($pd))
    {
      array_push($dadosdesc,array($desc));
      $_SESSION["id"]=$id;
    }  
    include_once("./layout/verEsq.php");
  }
?>