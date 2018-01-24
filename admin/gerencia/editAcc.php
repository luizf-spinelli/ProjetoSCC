<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  include("../functions/conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("../report.php");
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadosacc = array();  
        
    $pf=mysqli_prepare($con,"SELECT ID,NOME,USUARIO,SENHA,ACESSO FROM KACCESSK WHERE ID=?");
    mysqli_stmt_bind_param($pf,"i",$id);
    $id=$_GET["id"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$id,$nus,$usu,$snh,$ace);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosacc,array($id,$nus,$usu,$snh,$ace));
      $_SESSION["id"]=$id;
    }
    
    include_once("./layout/editarAcc.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Conta alterada com sucesso.";
	    if (!isset($_POST["ID"]) ||
		!isset($_POST["NUS"]) ||
                !isset($_POST["USU"]) ||
                !isset($_POST["SNH"]) ||
		!isset($_POST["ACE"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("../report.php");
	    } else {
  		  $pf=mysqli_prepare($con,"update KACCESSK set NOME=?, USUARIO=?, SENHA=?, ACESSO=? where ID=?");
  		  mysqli_stmt_bind_param($pf,"ssssi",$_POST["NUS"],$_POST["USU"],$_POST["SNH"],$_POST["ACE"],$_POST["ID"]);
  		  mysqli_stmt_execute($pf);

    	  include_once("manageAcc.php");
	    }
  	} else {
  		include_once("../report.php");
  	}
  }
?>
