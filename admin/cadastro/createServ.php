<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: ../cadastro.php');
        }        
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$idserv="";$tp="";$vlb="";$dur="";
  	include_once("./layout/cadastroServ.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["IDSERV"]) || 
		!isset($_POST["TP"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO SERVICO VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($ps,"isss",$idserv,$tp,$vlb,$dur);
		$idserv=$_POST["IDSERV"];
		$tp=$_POST["TP"];
		$vlb=$_POST["VLB"];
		$dur=$_POST["DUR"];
                mysqli_stmt_execute($ps);                
	}
            header('Location: ../cadastro.php');
  } else {
  	header('Location: ../cadastro.php');
  }
?>