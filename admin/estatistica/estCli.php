<?php
    session_start();
    if(!isset($_SESSION['usuarioNome'])&& !isset($_SESSION['usuarioAcesso']))
	{
            session_destroy();
            header('Location: ../../login.php');
        }
    if($_SESSION['usuarioAcesso'] != 2)
	{
            header('Location: ../home.php');
        } 
  include_once("../functions/conexao.php");
  if (!$con = abreConexao()) {
    $MensagemErro="Erro de conexão com a base de dados.";
    include_once("../report.php");
  } else {
    
    $pa=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente");
    $row = mysqli_fetch_array($pa); 
    $tc = $row['tc'];
    
    $pb=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_fisico");
    $row = mysqli_fetch_array($pb); 
    $tcf = $row['tc'];
    
    $pc=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_juridico");
    $row = mysqli_fetch_array($pc); 
    $tcj = $row['tc'];
    
    $pd=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_fisico WHERE SEXO='M'");
    $row = mysqli_fetch_array($pd); 
    $cfm = $row['tc'];
    
    $pi=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_fisico WHERE SEXO='F'");
    $row = mysqli_fetch_array($pi); 
    $cff = $row['tc'];
    
    $ph=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE PAIS='Brasil' OR PAIS='BR'");
    $row = mysqli_fetch_array($ph); 
    $pbr = $row['tc'];
    
    $pk=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE PAIS!='Brasil' AND PAIS!='BR'");  
    $row = mysqli_fetch_array($pk); 
    $pbrm = $row['tc'];
    
    $pg=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE ESTADO='SP'");
    $row = mysqli_fetch_array($pg); 
    $ufsp = $row['tc'];
    
    $pl=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE ESTADO!='SP'");  
    $row = mysqli_fetch_array($pl); 
    $ufm = $row['tc'];
    
    $pm=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE='Santos'"); 
    $row = mysqli_fetch_array($pm); 
    $ces = $row['tc'];
    
    $pn=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE='São Vicente' OR CIDADE='Sao Vicente' OR CIDADE='SV'");  
    $row = mysqli_fetch_array($pn); 
    $cesv = $row['tc'];
    
    $po=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE='Praia Grande' OR CIDADE='PG'");  
    $row = mysqli_fetch_array($po); 
    $cepg = $row['tc'];
    
    $pq=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE='Guarujá' OR CIDADE='Guaruja'");
    $row = mysqli_fetch_array($pq); 
    $ceg = $row['tc'];
    
    $pr=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE='Cubatao' OR CIDADE='Cubatão'");
    $row = mysqli_fetch_array($pr); 
    $cec = $row['tc'];
    
    $pp=mysqli_query($con,"SELECT COUNT(*) as tc FROM cliente_endereco WHERE CIDADE!='Praia Grande' AND CIDADE!='PG' AND"
            . " CIDADE!='São Vicente' AND CIDADE!='Sao Vicente' AND CIDADE!='SV' AND CIDADE!='Santos' AND CIDADE!='Guarujá' AND"
            . " CIDADE!='Guaruja' AND CIDADE!='Cubatao' AND CIDADE!='Cubatão'");
    $row = mysqli_fetch_array($pp); 
    $cem = $row['tc']; 
    
    $ps=mysqli_query($con,"SELECT COUNT(cidade) as tc FROM cliente_endereco");
    $row = mysqli_fetch_array($ps); 
    $tce = $row['tc'];
    
    $ps=mysqli_query($con,"SELECT COUNT(pais) as tc FROM cliente_endereco");
    $row = mysqli_fetch_array($ps); 
    $tpe = $row['tc'];
    
    $ps=mysqli_query($con,"SELECT COUNT(estado) as tc FROM cliente_endereco");
    $row = mysqli_fetch_array($ps); 
    $tee = $row['tc'];
 
    include_once("./layout/estatisticaCli.php");
  }
?>