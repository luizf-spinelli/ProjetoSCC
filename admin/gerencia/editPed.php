<?php
  include("../functions/conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("../report.php");
  } else {
        if ($_SERVER["REQUEST_METHOD"]=="GET") {
            
    $dadoscli = array();
    $dadosped = array();
    $dadospag = array();
    
    $ps=mysqli_prepare($con,"SELECT IDCLIENTE,NOME FROM CLIENTE WHERE IDCLIENTE=?");
    mysqli_stmt_bind_param($ps,"i",$idcliente);
    $idcliente=$_GET["idcliente"];
    mysqli_stmt_execute($ps);
    mysqli_stmt_bind_result($ps,$idcliente,$nm);    
    while(mysqli_stmt_fetch($ps))
    {
      array_push($dadoscli,array($idcliente,$nm));
      $_SESSION["idcliente"]=$idcliente;
    }
        
    $pf=mysqli_prepare($con,"SELECT IDPEDIDO,DTINICIO,DTSOLICITACAO,QTDE,IDSERV,PRAZO,OBSV,STATUS FROM PEDIDO WHERE IDPEDIDO=?");
    mysqli_stmt_bind_param($pf,"i",$idpedido);
    $idpedido=$_GET["idpedido"];
    mysqli_stmt_execute($pf);
    mysqli_stmt_bind_result($pf,$idpedido,$ini,$sol,$qtd,$srv,$prz,$obv,$stp);    
    while(mysqli_stmt_fetch($pf))
    {
      array_push($dadosped,array($idpedido,$ini,$sol,$qtd,$srv,$prz,$obv,$stp));
      $_SESSION["idpedido"]=$idpedido;
    }
    
    $pj=mysqli_prepare($con,"SELECT TIPO,DTPAGAMENTO,VALOR,STATS FROM PAGAMENTO WHERE IDPEDIDO=?");
    mysqli_stmt_bind_param($pj,"i",$idpedido);
    $idpedido=$_GET["idpedido"];
    mysqli_stmt_execute($pj);
    mysqli_stmt_bind_result($pj,$met,$pag,$vlr,$sts);    
    while(mysqli_stmt_fetch($pj))
    {
      array_push($dadospag,array($met,$pag,$vlr,$sts));
      $_SESSION["idpedido"]=$idpedido;
    }
    
    include_once("./layout/editarPed.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Pedido alterado com sucesso.";
	    if (!isset($_POST["IDPEDIDO"]) ||
		!isset($_POST["INI"]) ||
                !isset($_POST["SOL"]) ||
                !isset($_POST["QTD"]) ||
                !isset($_POST["SRV"]) ||
                !isset($_POST["PRZ"]) ||
                !isset($_POST["OBV"]) ||
                !isset($_POST["STP"]) ||
                !isset($_POST["MET"]) ||
                !isset($_POST["PAG"]) ||           
                !isset($_POST["VLR"]) ||
		!isset($_POST["STS"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("../report.php");
	    } else {
  		  $pf=mysqli_prepare($con,"update PEDIDO set DTINICIO=?, DTSOLICITACAO=?, QTDE=?, IDSERV=?, PRAZO=?, OBSV=?, STATUS=? where IDPEDIDO=?");
  		  mysqli_stmt_bind_param($pf,"sssssssi",$_POST["INI"],$_POST["SOL"],$_POST["QTD"],$_POST["SRV"],$_POST["PRZ"],$_POST["OBV"],$_POST["STP"],$_POST["IDPEDIDO"]);
  		  mysqli_stmt_execute($pf);
                  
  		  $pj=mysqli_prepare($con,"update PAGAMENTO set TIPO=?, DTPAGAMENTO=?, VALOR=?, STATS=? where IDPEDIDO=?");
  		  mysqli_stmt_bind_param($pj,"ssssi",$_POST["MET"],$_POST["PAG"],$_POST["VLR"],$_POST["STS"],$_POST["IDPEDIDO"]);
  		  mysqli_stmt_execute($pj);

    	  include_once("../report.php");
	    }
  	} else {
  		include_once("../report.php");
  	}
  }
?>
