<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: manageMed.php');
        } 
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$obs=$_GET["obs"];
        $idmedida=$_GET["idmedida"];
  	include_once("./layout/deletarMed.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = "<div class='alert alert-success' role='alert'><strong>Sucesso!</strong> Medida excluída.</div>";
	if (!isset($_POST["IDMEDIDA"])
                ) 
	{
		$_SESSION['erro'] = "<div class='alert alert-danger' role='alert'><strong>Erro!</strong> Por favor, tente novamente.</div>";
	}
	else
                {       
                include_once("../functions/conexao.php");
		$con=abreConexao();
                $pm=mysqli_prepare($con,"DELETE FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
		mysqli_stmt_bind_param($pm,"i",$idmedida);
                $idmedida=$_POST["IDMEDIDA"];
                mysqli_stmt_execute($pm);		
	}
            header('Location: manageMed.php');
  } else {
  	header('Location: manageMed.php');
  }
?>