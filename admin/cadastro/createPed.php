<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $idcliente=$_GET["idcliente"];$nm=$_GET["nm"];$idped="";$sol="";$prz="";
        $ini="";$srv="";$stp="";$met="";$sts="";$vlr="";$pag="";$qtd="";$obv="";
  	include_once("./layout/cadastroPed.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Pedido cadastrado com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) ||
		!isset($_POST["IDPED"])
	   ) 
	{
		$MensagemErro="Pedido não cadastrado, parâmetros inválidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$pd=mysqli_prepare($con,"INSERT INTO PEDIDO VALUES(?,?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($pd,"iisssssss",$idped,$idcliente,$ini,$sol,$qtd,$srv,$prz,$obv,$stp);		
		$idped=$_POST["IDPED"];
                $idcliente=$_POST["IDCLIENTE"];
		$ini=$_POST["INI"];
                $sol=$_POST["SOL"];
                $qtd=$_POST["QTD"];
                $srv=$_POST["SRV"];
                $prz=$_POST["PRZ"];
                $obv=$_POST["OBV"];
                $stp=$_POST["STP"];                
                mysqli_stmt_execute($pd);                
                $pg=mysqli_prepare($con,"INSERT INTO PAGAMENTO VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($pg,"issss",$idped,$met,$pag,$vlr,$sts);
		$idped=$_POST["IDPED"];
		$met=$_POST["MET"];
		$pag=$_POST["PAG"];
                $vlr=$_POST["VLR"];
                $sts=$_POST["STS"];                
                mysqli_stmt_execute($pg);
	}
    include_once("showPed.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>