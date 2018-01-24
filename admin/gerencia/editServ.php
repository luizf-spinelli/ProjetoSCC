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
            
    $dadosserv = array();  
        
    $pf=mysqli_prepare($con,"SELECT IDSERV,TIPO,VALOR_BASE,DURACAO FROM SERVICO WHERE IDSERV=?");
    mysqli_stmt_bind_param($pf,"i",$idserv);
    $idserv=$_GET["idserv"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idserv,$tp,$vlb,$dur);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosserv,array($idserv,$tp,$vlb,$dur));
      $_SESSION["idserv"]=$idserv;
    }
    
    include_once("./layout/editarServ.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Serviço alterado com sucesso.";
	    if (!isset($_POST["IDSERV"]) ||
		!isset($_POST["TP"]) ||
                !isset($_POST["VLB"]) ||
		!isset($_POST["DUR"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("../report.php");
	    } else {
  		  $pf=mysqli_prepare($con,"update SERVICO set TIPO=?, VALOR_BASE=?, DURACAO=? where IDSERV=?");
  		  mysqli_stmt_bind_param($pf,"sssi",$_POST["TP"],$_POST["VLB"],$_POST["DUR"],$_POST["IDSERV"]);
  		  mysqli_stmt_execute($pf);

    	  include_once("manageServ.php");
	    }
  	} else {
  		include_once("../report.php");
  	}
  }
?>