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
    
    $pa=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido");
    $row = mysqli_fetch_array($pa); 
    $tserv = $row['tc'];
    
    $pb=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV=1");
    $row = mysqli_fetch_array($pb); 
    $cost = $row['tc'];
    
    $pc=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV=2");
    $row = mysqli_fetch_array($pc); 
    $conf = $row['tc'];
    
    $pd=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV=3");
    $row = mysqli_fetch_array($pd); 
    $cons = $row['tc'];
    
    $pe=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV=4");
    $row = mysqli_fetch_array($pe); 
    $bord = $row['tc'];
    
    $pf=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV=5");
    $row = mysqli_fetch_array($pf); 
    $trn = $row['tc'];
    
    $pg=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE IDSERV is null");
    $row = mysqli_fetch_array($pg); 
    $nll = $row['tc'];
    
    $ph=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE STATUS='Em aberto'");
    $row = mysqli_fetch_array($ph); 
    $eab = $row['tc'];
    
    $pi=mysqli_query($con,"SELECT COUNT(*) as tc FROM pedido WHERE STATUS='Concluído'");
    $row = mysqli_fetch_array($pi); 
    $ccd = $row['tc'];
    
    $pj=mysqli_query($con,"SELECT COUNT(valor) as tc FROM pagamento");
    $row = mysqli_fetch_array($pj); 
    $tval = $row['tc'];
    
    $pl=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE VALOR <= 100");
    $row = mysqli_fetch_array($pl); 
    $cem = $row['tc'];
    
    $pm=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE VALOR > 100 AND VALOR <= 200");
    $row = mysqli_fetch_array($pm); 
    $duz = $row['tc'];
    
    $pn=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE VALOR > 200 AND VALOR <= 500");
    $row = mysqli_fetch_array($pn); 
    $qui = $row['tc'];
    
    $po=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE VALOR > 500 AND VALOR <= 1000");
    $row = mysqli_fetch_array($po); 
    $mil = $row['tc'];
    
    $pp=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE VALOR > 1000");
    $row = mysqli_fetch_array($pp); 
    $inf = $row['tc'];
    
    $pq=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento");
    $row = mysqli_fetch_array($pq); 
    $tpag = $row['tc'];
    
    $pr=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE STATS='Pendente'");
    $row = mysqli_fetch_array($pr); 
    $pend = $row['tc'];
    
    $ps=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE STATS='Pago'");
    $row = mysqli_fetch_array($ps); 
    $pago = $row['tc'];
    
    $pt=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE TIPO='À vista'");
    $row = mysqli_fetch_array($pt); 
    $vst = $row['tc'];
    
    $pu=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE TIPO='Parcelado'");
    $row = mysqli_fetch_array($pu); 
    $par = $row['tc'];
    
    $pv=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE TIPO='Débito'");
    $row = mysqli_fetch_array($pv); 
    $deb = $row['tc'];
    
    $px=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE TIPO='Crédito'");
    $row = mysqli_fetch_array($px); 
    $crd = $row['tc'];
    
    $py=mysqli_query($con,"SELECT COUNT(*) as tc FROM pagamento WHERE TIPO='Outro'");
    $row = mysqli_fetch_array($py); 
    $otr = $row['tc'];
 
    include_once("./layout/estatisticaPed.php");
  }
?>