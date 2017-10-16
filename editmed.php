<?php
  include("conexao.php");  
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro na conexão.";
  	include_once("report.php");
  } else {
  	// Editar
  	if ($_SERVER["REQUEST_METHOD"]=="GET") {
                
    $dadoscli = array();
    $dadosmed = array();
    
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
            
                $pm=mysqli_prepare($con,"SELECT IDMEDIDA,OMBROAOMBRO,OMBRO,COLARINHO,CAVASFRENTE,"
                        . "CENTROFRENTE,CAVASCOSTA,BUSTO,ALTBUSTO,SEPBUSTO,CINTURA,QUADRIL,ALTQUADRIL,"
                        . "ALTGANCHOFRENTE,ALTGANCHOCOSTA,CINTURAAOJOELHO,CINTURAAOTORNOZELO,LARGJOELHO,"
                        . "BOCACALCA,CUMPRBRACO,LARGBRACO,PUNHO,ALTMANGATRESQUARTOS,ALTMANGACURTA,ALTSAIA,"
                        . "ALTFRENTE,ALTCOSTA,OBS FROM CLIENTE_MEDIDAS WHERE IDMEDIDA=?");
                mysqli_stmt_bind_param($pm,"i",$idmedida);
                $idmedida=$_GET["idmedida"];
                mysqli_stmt_execute($pm);      
                mysqli_stmt_bind_result($pm,$idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc,$obs);
                while(mysqli_stmt_fetch($pm))             
    {
      array_push($dadosmed,array($idmedida,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc,$obs));
      $_SESSION["idmedida"]=$idmedida;
    }
                
  		include_once("editarMed.php");
                
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Cliente alterado com sucesso.";
	    if (!isset($_POST["OAO"]) ||
		!isset($_POST["OMB"]) ||
                !isset($_POST["COL"]) ||
                !isset($_POST["CVF"]) ||
                !isset($_POST["CTF"]) ||
                !isset($_POST["CVC"]) ||
                !isset($_POST["BST"]) ||
                !isset($_POST["ATB"]) ||
                !isset($_POST["SPB"]) ||
                !isset($_POST["CIN"]) ||
                !isset($_POST["QDR"]) ||
                !isset($_POST["ATQ"]) ||
                !isset($_POST["AGF"]) ||
                !isset($_POST["AGC"]) ||
                !isset($_POST["CAJ"]) ||
                !isset($_POST["CAT"]) ||
                !isset($_POST["LGJ"]) ||
                !isset($_POST["BCC"]) ||
                !isset($_POST["CPB"]) ||
                !isset($_POST["LGB"]) ||
                !isset($_POST["PNH"]) ||
                !isset($_POST["AMT"]) ||
                !isset($_POST["ATM"]) ||
                !isset($_POST["ATS"]) ||
                !isset($_POST["ATF"]) ||
                !isset($_POST["ATC"]) ||
                !isset($_POST["OBS"]) ||    
		!isset($_POST["IDMEDIDA"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos.";
		  include_once("report.php");
	    } else {
  		  $pm=mysqli_prepare($con,"update CLIENTE_MEDIDAS set OMBROAOMBRO=?, OMBRO=?, COLARINHO=?, CAVASFRENTE=?,"
                        . "CENTROFRENTE=?, CAVASCOSTA=?, BUSTO=?, ALTBUSTO=?, SEPBUSTO=?, CINTURA=?, QUADRIL=?, ALTQUADRIL=?,"
                        . "ALTGANCHOFRENTE=?, ALTGANCHOCOSTA=?, CINTURAAOJOELHO=?, CINTURAAOTORNOZELO=?, LARGJOELHO=?,"
                        . "BOCACALCA=?, CUMPRBRACO=?, LARGBRACO=?, PUNHO=?, ALTMANGATRESQUARTOS=?, ALTMANGACURTA=?, ALTSAIA=?,"
                        . "ALTFRENTE=?, ALTCOSTA=?, OBS=? WHERE IDMEDIDA=?");
  		  mysqli_stmt_bind_param($pm,"sssssssssssssssssssssssssssi",$_POST["OAO"],$_POST["OMB"],$_POST["COL"],$_POST["CVF"],$_POST["CTF"],$_POST["CVC"],
                  $_POST["BST"],$_POST["ATB"],$_POST["SPB"],$_POST["CIN"],$_POST["QDR"],$_POST["ATQ"],$_POST["AGF"],$_POST["AGC"],
                  $_POST["CAJ"],$_POST["CAT"],$_POST["LGJ"],$_POST["BCC"],$_POST["CPB"],$_POST["LGB"],$_POST["PNH"],$_POST["AMT"],$_POST["ATM"],
                  $_POST["ATS"],$_POST["ATF"],$_POST["ATC"],$_POST["OBS"],$_POST["IDMEDIDA"]);
  		  mysqli_stmt_execute($pm);
    	  include_once("manageMed.php");
	    }
  	} else {
  		include_once("report.php");
  	}
  }
?>