<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "confeccao";
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM CLIENTE";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM CLIENTE WHERE NOME LIKE '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table class='table table-style-1 sortable'>
                    <thead>
			<th style='text-align:center;'>ID</th>
                        <th style='text-align:center;'>Nome</th>
			<th style='text-align:center;'>Endereço</th>
                        <th style='text-align:center;'>Ver</th>
                        <th style='text-align:center;'>Relatório</th>
                        <th style='text-align:center;'>Editar</th>
                        <th style='text-align:center;'>Excluir</th>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td style='text-align:center;'>" . ($linha["IDCLIENTE"]) . "</td>";
            $return.= "<td style='text-align:center;'>" . ($linha["NOME"]) . "</td>";
            $return.= "<td style='text-align:center;'>" . ($linha["ENDERECO"]) . "</td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-info' href='details.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-user'></i></a></td>";
            $return.= "<td style='text-align:center;'><a target='_blank' class='btn btn-default' href='pdf.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-file-pdf-o'></i></a></td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-success' href='edit.php?idcliente={$linha['IDCLIENTE']}'><i class='fa fa-pencil-square-o'></i></a></td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-danger' href='deleteF.php?idcliente={$linha['IDCLIENTE']}&nm={$linha['NOME']}'><i class='fa fa-remove'></i></a></td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<div class='container'><p style='font-size:18px; text-align:center;'>Ops, nenhum registro foi encontrado!</p></div><br/>";
    }
}
?>