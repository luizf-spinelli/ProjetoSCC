<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "confeccao";
    $conexao = mysqli_connect($server, $user, $senha,$base) or die("Erro na conexão!");
    mysqli_select_db($conexao,$base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM CLIENTE";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM CLIENTE WHERE NOME LIKE '$nome'";
    }
    sleep(1);
    $result = mysqli_query($conexao,$sql);
    $cont = mysqli_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table class='table table-style-1 sortable'>
                    <thead>
			<th style='text-align:center;'>ID</th>
                        <th style='text-align:center;'>Nome</th>
                        <th style='text-align:center;'>Ver</th>
                        <th style='text-align:center;'>Relatório</th>
                        <th style='text-align:center;'>Editar</th>
                        <th style='text-align:center;'>Excluir</th>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysqli_fetch_array($result)) {
            $return.= "<td style='text-align:center;'>" . ($linha["IDCLIENTE"]) . "</td>";
            $return.= "<td style='text-align:center;'>" . ($linha["NOME"]) . "</td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-info' href='../gerencia/detailsCli.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-user'></i></a></td>";
            $return.= "<td style='text-align:center;'><a target='_blank' class='btn btn-default' href='../gerencia/pdfCli.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-file-pdf-o'></i></a></td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-success' href='../gerencia/editCli.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-pencil-square-o'></i></a></td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-danger' href='../gerencia/deleteCli.php?idcliente={$linha['IDCLIENTE']}&nm={$linha['NOME']}'><i class='fa fa-remove'></i></a></td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<div class='container'><p style='font-size:18px; text-align:center;'>Ops, nenhum registro foi encontrado!</p></div><br/>";
    }
}
?>