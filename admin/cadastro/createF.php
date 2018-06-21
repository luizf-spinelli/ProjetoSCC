<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$nm="";$cpf="";$cel="";$tel="";$em="";$rg="";$sx="";$ns="";$pas="";$est="";$cid="";$brr="";$cep="";$rua="";$com="";
  	include_once("./layout/cadastroF.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$_SESSION['alerta'] = 1;
	if (!isset($_POST["NM"])
	   ) 
	{
		$_SESSION['erro'] = 1;
	}
	else
	{
		include_once("../functions/conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO CLIENTE(NOME) VALUES(?)");
		mysqli_stmt_bind_param($ps,"s",$nm);		
		$nm=$_POST["NM"];
                mysqli_stmt_execute($ps);                
                $pr=mysqli_prepare($con,"INSERT INTO CLIENTE_FISICO(CPF,RG,SEXO,DTNASCIMENTO) VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pr,"ssss",$cpf,$rg,$sx,$ns);		
		$cpf=$_POST["CPF"];
                $rg=$_POST["RG"];
                $sx=$_POST["SX"];
                $ns=$_POST["NS"];
                mysqli_stmt_execute($pr);
                $pp=mysqli_prepare($con,"INSERT INTO CLIENTE_CONTATO(TEL,CEL,EMAIL) VALUES(?,?,?)");
		mysqli_stmt_bind_param($pp,"sss",$tel,$cel,$em);		
		$tel=$_POST["TEL"];
                $cel=$_POST["CEL"];
                $em=$_POST["EM"];
                mysqli_stmt_execute($pp);
                $pe=mysqli_prepare($con,"INSERT INTO CLIENTE_ENDERECO(PAIS,ESTADO,CIDADE,BAIRRO,CEP,RUA,COMP) VALUES(?,?,?,?,?,?,?)");
		mysqli_stmt_bind_param($pe,"sssssss",$pas,$est,$cid,$brr,$cep,$rua,$com);		
		$pas=$_POST["PAS"];
                $est=$_POST["EST"];
                $cid=$_POST["CID"];
                $brr=$_POST["BRR"];
                $cep=$_POST["CEP"];
                $rua=$_POST["RUA"];
                $com=$_POST["COM"];
                mysqli_stmt_execute($pe);
	}
            header('Location: ../cadastro.php');
  } else {
  	header('Location: ../cadastro.php');
  }
?>