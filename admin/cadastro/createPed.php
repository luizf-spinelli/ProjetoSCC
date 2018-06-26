<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $idcliente=$_GET["idcliente"];$nm=$_GET["nm"];$sol="";$prz="";
        $ini="";$srv="";$stp="";$met="";$sts="";$vlr="";$pag="";$qtd="";$obv="";
  	include_once("./layout/cadastroPed.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["IDCLIENTE"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$pd=mysqli_prepare($con,"INSERT INTO pedido(IDCLIENTE,DTINICIO,DTSOLICITACAO,QTDE,IDSERV,PRAZO,OBSV,STATUS) VALUES(?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($pd,"isssssss",$idcliente,$ini,$sol,$qtd,$srv,$prz,$obv,$stp);		
                $idcliente=$_POST["IDCLIENTE"];
		$ini=$_POST["INI"];
                $sol=$_POST["SOL"];
                $qtd=$_POST["QTD"];
                $srv=$_POST["SRV"];
                $prz=$_POST["PRZ"];
                $obv=$_POST["OBV"];
                $stp=$_POST["STP"];                
                mysqli_stmt_execute($pd);                
                $pg=mysqli_prepare($con,"INSERT INTO pagamento(TIPO,DTPAGAMENTO,VALOR,STATS) VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pg,"ssss",$met,$pag,$vlr,$sts);		
		$met=$_POST["MET"];
		$pag=$_POST["PAG"];
                $vlr=$_POST["VLR"];
                $sts=$_POST["STS"];                
                mysqli_stmt_execute($pg);
	}
            header('Location: showPed.php');
  } else {
  	header('Location: showPed.php');
  }
?>