<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
 
if (empty($usuario) || empty($senha))
{
    echo "Informe usuário e senha.";
    exit;
}
 
// cria o hash da senha
//$senhaHash = make_hash($senha);
 
$PDO = db_connect();
 
$sql = "SELECT nome, acesso FROM kaccessk WHERE usuario = :usuario AND senha = :senha";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Usuário ou senha incorretos.";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['usuarioNome'] = $user['nome'];
$_SESSION['usuarioAcesso'] = $user['ACESSO'];
 
header('Location: admin/home.php');
?>