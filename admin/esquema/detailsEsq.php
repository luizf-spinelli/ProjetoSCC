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
    $pt=mysqli_prepare($con,"SELECT ID,NOME,EMAIL,DESCRICAO,IMAGEM FROM esquema WHERE ID=?");
    mysqli_stmt_bind_param($pt,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($pt);
    mysqli_stmt_bind_result($pt,$id,$nome,$email,$desc,$img);    
    while(mysqli_stmt_fetch($pt))
    {
      array_push($dadosesq,array($id,$nome,$email,$desc,$img));
      $_SESSION["id"]=$id;
    }  
    include_once("./layout/verEsq.php");
  }
?>