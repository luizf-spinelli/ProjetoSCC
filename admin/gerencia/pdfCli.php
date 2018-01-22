        <?php
        include ('./mpdf/mpdf.php');
        
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "confeccao";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
        
	$idcliente=$_GET["idcliente"];
        $idmedida=$_GET["idmedida"];
	$result_cliente = "SELECT * FROM CLIENTE WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_cliente = mysqli_query($conn, $result_cliente);	
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);
        
	$result_tel = "SELECT * FROM CLIENTE_CONTATO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_tel = mysqli_query($conn, $result_tel);	
	$row_tel = mysqli_fetch_assoc($resultado_tel);
        
	$result_fisico = "SELECT * FROM CLIENTE_FISICO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_fisico = mysqli_query($conn, $result_fisico);	
	$row_fisico = mysqli_fetch_assoc($resultado_fisico);
        
	$result_juridico = "SELECT * FROM CLIENTE_JURIDICO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_juridico = mysqli_query($conn, $result_juridico);	
	$row_juridico = mysqli_fetch_assoc($resultado_juridico);
        
	$result_end = "SELECT * FROM CLIENTE_ENDERECO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_end = mysqli_query($conn, $result_end);	
	$row_end = mysqli_fetch_assoc($resultado_end);        
        
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d M Y');
        $hora = date('H:i:s');

$pagina = "
    <html lang='pt-BR'>
        <body>    
                <div class='navbar-header'>
             <table class=\"tbl_header\" width=\"1000\">
             <tr>
                 <td align=\"left\"><img src='assets/images/logotipo.png' alt=''></td>  
                 <td align=\"right\">$data - $hora</td>
               </tr>  
             </table>
                </div><br/>

        <div class='text-center'>

		<div class='container zoomIn animated'>
			
			<h1 class='page-title'><u>Cliente - ".$row_cliente['NOME']."</u></h1>			
		</div>
	</div><br/><br/>
                            <div class='main-container'>
                                <div class='container'>
                                    <div class='col-md-12'>
					<h2>Cliente</h2>                                        
					      <table class='table table-bordered'>
					      <thead>
					        <tr>
					          <th style='text-align:center;'>ID</th>
					          <th style='text-align:center;'>Nome</th>
					          <th style='text-align:center;'>Telefone</th>
                                                  <th style='text-align:center;'>Celular</th>
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_cliente['IDCLIENTE']."</td>
                                              <td style='text-align:center;'>".$row_cliente['NOME']."</td>
                                              <td style='text-align:center;'>".$row_fisico['SEXO']."</td>
                                              <td style='text-align:center;'>".$row_fisico['DTNASCIMENTO']."</td>
                                              <td style='text-align:center;'>".$row_tel['TEL']."</td>
                                              <td style='text-align:center;'>".$row_tel['CEL']."</td>
                                                </tr>
					      </tbody>
					    </table>
                                    </div>
                                    
                                    <div class='col-md-12'>
						<table class='table table-bordered'>
					      <thead>
					        <tr>
                                                  <th style='text-align:center;'>E-mail</th>
                                                  <th style='text-align:center;'>CPF</th>
                                                  <th style='text-align:center;'>RG</th>
					          <th style='text-align:center;'>CNPJ</th>                                                   
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_tel['EMAIL']."</td>
                                              <td style='text-align:center;'>".$row_fisico['CPF']."</td> 
                                              <td style='text-align:center;'>".$row_fisico['RG']."</td> 
                                              <td style='text-align:center;'>".$row_juridico['CNPJ']."</td>                                                  
                                              <td style='text-align:center;'>".$row_juridico['RSOCIAL']."</td>                                                  
                                                </tr>
					      </tbody>
					    </table>
                                    </div><br/><br/>
                                    
                                    <div class='col-md-12'>
					<h2>Endereço</h2>                                        
					      <table class='table table-bordered'>
					      <thead>
					        <tr>
					          <th style='text-align:center;'>País</th>
					          <th style='text-align:center;'>Estado</th>
					          <th style='text-align:center;'>Cidade</th>
                                                  <th style='text-align:center;'>Bairro</th>
                                                  <th style='text-align:center;'>CEP</th>
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_end['PAIS']."</td>
                                              <td style='text-align:center;'>".$row_end['ESTADO']."</td>
                                              <td style='text-align:center;'>".$row_end['CIDADE']."</td>
                                              <td style='text-align:center;'>".$row_end['BAIRRO']."</td>
                                              <td style='text-align:center;'>".$row_end['CEP']."</td>
                                              
                                                </tr>
					      </tbody>
					    </table>
                                    </div>
                                    
                                    <div class='col-md-12'>
					<h2>Endereço</h2>                                        
					      <table class='table table-bordered'>
					      <thead>
					        <tr>
					          <th style='text-align:center;'>Rua</th>
					          <th style='text-align:center;'>Comp.</th>
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_end['RUA']."</td>
                                              <td style='text-align:center;'>".$row_end['COMP']."</td>                                              
                                                </tr>
					      </tbody>
					    </table>
                                    </div>

                            </div><br/><br/><br/><br/><br/><br/><br/>

            <table class=\"tbl_footer\" width=\"1000\">  
               <tr>  
                 <td align=\"center\"><a href=''>www.site.com.br</a></td>
                 </tr><tr>
                 <td align=\"center\">(13)99999-9999 / contact@contac.com</td>
                 </tr><tr>
                 <td align=\"center\">Sirlene Costura & Confecção @ Copyright 2017 - by LFS</td> 
               </tr>  
            </table>
                    </body>
                </html>";

$arquivo = "Cliente_".$row_cliente['NOME'].".pdf";
$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents('../../assets/css/style.css');
$btm = file_get_contents('../../assets/css/bootstrap.min.css');
$btp = file_get_contents('../../assets/css/bootstrap.css');
$mpdf->WriteHTML($btm,1);
$mpdf->WriteHTML($btp,1);
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($pagina);
$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servidor
// D - Salva o arquivo no computador do usuário
?>