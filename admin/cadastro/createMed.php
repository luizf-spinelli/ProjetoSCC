<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $idcliente=$_GET["idcliente"];$nm=$_GET["nm"];$oao="";$omb="";$col="";$cvf="";$ctf="";$cvc="";$bst="";
        $atb="";$spb="";$cin="";$qdr="";$atq="";$agf="";$agc="";$caj="";$cat="";
        $lgj="";$bcc="";$cpb="";$lgb="";$pnh="";$amt="";$atm="";$ats="";$atf="";$obs="";
        $atc="";
  	include_once("./layout/cadastroM.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["IDCLIENTE"]) ||               
		!isset($_POST["OBS"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
                
		$ps=mysqli_prepare($con,"INSERT INTO CLIENTE_MEDIDAS(OMBROAOMBRO,OMBRO,COLARINHO,CAVASFRENTE,CENTROFRENTE,"
                        . "CAVASCOSTA,BUSTO,ALTBUSTO,SEPBUSTO,CINTURA,QUADRIL,ALTQUADRIL,ALTGANCHOFRENTE,ALTGANCHOCOSTA,"
                        . "CINTURAAOJOELHO,CINTURAAOTORNOZELO,LARGJOELHO,BOCACALCA,CUMPRBRACO,LARGBRACO,PUNHO,ALTMANGATRESQUARTOS,"
                        . "ALTMANGACURTA,ALTSAIA,ALTFRENTE,ALTCOSTA,OBS) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,"isssssssssssssssssssssssssss",$idcliente,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc,$obs);
		$idcliente=$_POST["IDCLIENTE"];
		$oao=$_POST["OAO"];
		$omb=$_POST["OMB"];
                $col=$_POST["COL"];
                $cvf=$_POST["CVF"];
                $ctf=$_POST["CTF"];
                $cvc=$_POST["CVC"];
                $bst=$_POST["BST"];
                $atb=$_POST["ATB"];
                $spb=$_POST["SPB"];
                $cin=$_POST["CIN"];
                $qdr=$_POST["QDR"];
                $atq=$_POST["ATQ"];
                $agf=$_POST["AGF"];
                $agc=$_POST["AGC"];
                $caj=$_POST["CAJ"];
                $cat=$_POST["CAT"];
                $lgj=$_POST["LGJ"];
                $bcc=$_POST["BCC"];
                $cpb=$_POST["CPB"];
                $lgb=$_POST["LGB"];
                $pnh=$_POST["PNH"];
                $amt=$_POST["AMT"];
                $atm=$_POST["ATM"];
                $ats=$_POST["ATS"];
                $atf=$_POST["ATF"];
                $atc=$_POST["ATC"];                
                $obs=$_POST["OBS"];
                mysqli_stmt_execute($ps);
	}
            header('Location: showMed.php');
  } else {
  	header('Location: showMed.php');
  }
?>