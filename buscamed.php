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
                        <th style='text-align:center;'>Medidas</th>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td style='text-align:center;'>" . ($linha["IDCLIENTE"]) . "</td>";
            $return.= "<td style='text-align:center;'>" . ($linha["NOME"]) . "</td>";
            $return.= "<td style='text-align:center;'>" . ($linha["ENDERECO"]) . "</td>";
            $return.= "<td style='text-align:center;'><a  class='btn btn-success' href='createmed.php?idcliente={$linha['IDCLIENTE']}'>Add</a></td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<div class='container'><p style='font-size:18px; text-align:center;'>Ops, nenhum registro foi encontrado!</p></div><br/>";
    }
}
?>