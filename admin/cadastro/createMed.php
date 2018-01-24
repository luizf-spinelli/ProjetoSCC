<?php
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $idcliente=$_GET["idcliente"];$nm=$_GET["nm"];$oao="";$omb="";$col="";$cvf="";$ctf="";$cvc="";$bst="";
        $atb="";$spb="";$cin="";$qdr="";$atq="";$agf="";$agc="";$caj="";$cat="";
        $lgj="";$bcc="";$cpb="";$lgb="";$pnh="";$amt="";$atm="";$ats="";$atf="";$obs="";
        $atc="";$idmedida="";
  	include_once("./layout/cadastroM.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Medidas cadastradas com sucesso!";
	if (!isset($_POST["IDCLIENTE"]) ||
		!isset($_POST["OAO"]) ||
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
		$MensagemErro="Medidas não cadastradas, parâmetros inválidos.";
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
                
		$ps=mysqli_prepare($con,"INSERT INTO CLIENTE_MEDIDAS VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($ps,"issssssssssssssssssssssssssis",$idcliente,$oao,$omb,$col,$cvf,$ctf,$cvc,$bst,$atb,$spb,$cin,$qdr,$atq,$agf,$agc,$caj,$cat,$lgj,$bcc,$cpb,$lgb,$pnh,$amt,$atm,$ats,$atf,$atc,$idmedida,$obs);
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
                $idmedida=$_POST["IDMEDIDA"];
                $obs=$_POST["OBS"];
                mysqli_stmt_execute($ps);
	}
    include_once("showMed.php");
  } else {
  	include_once("http://localhost:8080/ProjetoSCC/admin/report.php");
  }
?>