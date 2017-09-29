        <?php
        include ('mpdf/mpdf.php');
        
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
        
	$result_tel = "SELECT TEL,CEL,EMAIL FROM CLIENTE_CONTATO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_tel = mysqli_query($conn, $result_tel);	
	$row_tel = mysqli_fetch_assoc($resultado_tel);
        
	$result_fisico = "SELECT CPF,RG FROM CLIENTE_FISICO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_fisico = mysqli_query($conn, $result_fisico);	
	$row_fisico = mysqli_fetch_assoc($resultado_fisico);
        
	$result_juridico = "SELECT CNPJ FROM CLIENTE_JURIDICO WHERE IDCLIENTE = '$idcliente' LIMIT 1";
	$resultado_juridico = mysqli_query($conn, $result_juridico);	
	$row_juridico = mysqli_fetch_assoc($resultado_juridico);
        
	$result_med = "SELECT * FROM CLIENTE_MEDIDAS WHERE IDMEDIDA = '$idmedida' LIMIT 1";
	$resultado_med = mysqli_query($conn, $result_med);	
	$row_med = mysqli_fetch_assoc($resultado_med);
        
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
			
			<h1 class='page-title'><u>".$row_cliente['NOME']."</u></h1>			
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
                                                </tr>
					      </tbody>
					    </table>
                                    </div><br/><br/>

                                    <div class='col-md-12'>
					<h2>Medidas</h2>

						<table class='table table-bordered'>
					      <thead>
					        <tr>
					          <th style='text-align:center;'>ID Medida</th>
                                                  <th style='text-align:center;'>Ombro a Ombro</th>
                                                  <th style='text-align:center;'>Ombro</th>
                                                  <th style='text-align:center;'>Colarinho</th>
                                                  <th style='text-align:center;'>Cavas Frente</th>
                                                  <th style='text-align:center;'>Centro Frente</th>
                                                  <th style='text-align:center;'>Cavas Costas</th>
                                                  <th style='text-align:center;'>Busto</th>
                                                  <th style='text-align:center;'>Alt. Busto</th>                                                 
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_med['IDMEDIDA']."</td>
                                              <td style='text-align:center;'>".$row_med['OMBROAOMBRO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['OMBRO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['COLARINHO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CAVASFRENTE']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CENTROFRENTE']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CAVASCOSTA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['BUSTO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTBUSTO']."cm</td>                                                 
                                              </tr>   
					      </tbody>
					    </table>
                                    </div>
                                    
                                    <div class='col-md-12'>
						<table class='table table-bordered'>
					      <thead>
					        <tr>
                                                  <th style='text-align:center;'>Seperação Busto</th>
                                                  <th style='text-align:center;'>Cintura</th>
                                                  <th style='text-align:center;'>Quadril</th>
                                                  <th style='text-align:center;'>Alt. Quadril</th>
                                                  <th style='text-align:center;'>Alt. Gancho Frente</th> 
                                                  <th style='text-align:center;'>Alt. Gancho Costas</th>
                                                  <th style='text-align:center;'>Cintura ao Joelho</th>
                                                  <th style='text-align:center;'>Cintura ao Tornozelo</th>
                                                  <th style='text-align:center;'>Larg. Joelho</th>
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_med['SEPBUSTO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CINTURA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['QUADRIL']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTQUADRIL']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTGANCHOFRENTE']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTGANCHOCOSTA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CINTURAAOJOELHO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CINTURAAOTORNOZELO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['LARGJOELHO']."cm</td> 
                                              </tr>    
					      </tbody>
					    </table>
                                    </div>
                                    
                                    <div class='col-md-12'>
						<table class='table table-bordered'>
					      <thead>
					        <tr>
                                                  <th style='text-align:center;'>Boca da Calça</th>
                                                  <th style='text-align:center;'>Compr. Braço</th>
                                                  <th style='text-align:center;'>Larg. Braço</th>
                                                  <th style='text-align:center;'>Punho</th>
                                                  <th style='text-align:center;'>Alt. Manga 3/4</th>
                                                  <th style='text-align:center;'>Alt. Manga Curta</th>
                                                  <th style='text-align:center;'>Alt. Saia</th>
                                                  <th style='text-align:center;'>Alt. Frente</th>
                                                  <th style='text-align:center;'>Alt. Costas</th>                                                
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_med['BOCACALCA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['CUMPRBRACO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['LARGBRACO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['PUNHO']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTMANGATRESQUARTOS']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTMANGACURTA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTSAIA']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTFRENTE']."cm</td>
                                              <td style='text-align:center;'>".$row_med['ALTCOSTA']."cm</td>
                                              </tr>    
					      </tbody>
					    </table>
                                    </div>
                                                                        <div class='col-md-12'>
						<table class='table table-bordered'>
					      <thead>
					        <tr>
                                                  <th style='text-align:center;'>Observações</th>
					        </tr>
					      </thead>
					      <tbody>
                                              <tr>
                                              <td style='text-align:center;'>".$row_med['OBS']."</td>
                                              </tr>    
					      </tbody>
					    </table>
                                    </div>
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

$arquivo = "info_cliente.pdf";
$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$css = file_get_contents('assets/css/style.css');
$btm = file_get_contents('assets/css/bootstrap.min.css');
$btp = file_get_contents('assets/css/bootstrap.css');
$mpdf->WriteHTML($btm,1);
$mpdf->WriteHTML($btp,1);
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($pagina);
$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servidor
// D - Salva o arquivo no computador do usuário
?>