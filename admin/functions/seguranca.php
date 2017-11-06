<?php
/**
* Sistema de segurança com acesso restrito
*
* Usado para restringir o acesso de certas páginas do seu site
*
*/
//  Configurações do Script
// ==============================
$conectaServidor = true;    // Abre uma conexão com o servidor MySQL?
$abreSessao = true;         // Inicia a sessão com um session_start()?
$caseSensitive = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'
$validaSempre = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$servidor = 'localhost';    // Servidor MySQL
$usuario = 'root';          // Usuário MySQL
$senha = '';                // Senha MySQL
$banco = 'confeccao';       // Banco de dados MySQL
$paginaLogin = '../../login.php'; // Página de login
$tabela = 'KACCESSK';       // Nome da tabela onde os usuários são salvos
// ======================================
// Verifica se precisa fazer a conexão com o MySQL
if ($conectaServidor == true) {
  $conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("MySQL: Não foi possível conectar-se ao servidor [".$servidor."]");
  mysqli_select_db($conexao, $banco) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$banco."]");
}
// Verifica se precisa iniciar a sessão
if ($abreSessao == true)
  session_start();

function validaUsuario($usuario, $senha) {
    global $caseSensitive;
    global $conexao;
    global $tabela;
  // Monta uma consulta SQL (query) para procurar um usuário
  $sql = "SELECT id, nome, acesso FROM KACCESSK WHERE usuario = ".$usuario." AND senha = ".$senha." LIMIT 1";
  $query = mysqli_query($conexao, $sql);
  $resultado = mysqli_fetch_assoc($query);
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    return false;
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
    $_SESSION['usuarioAcesso'] = $resultado['acesso']; // Pega o valor da coluna 'acesso' do registro encontrado no MySQL
    // Verifica a opção se sempre validar o login
    if ($validaSempre == true) {
      // Definimos dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }
    return true;
  }
}
/**
* Função que protege uma página
*/
function protegePagina() {
  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante();
  } else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($validaSempre == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      } else if (isset($_SESSION['usuarioID']) AND isset($_SESSION['usuarioNome'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitante();
      }
    }
  }
/**
* Função para expulsar um visitante
*/
function expulsaVisitante() {
    global $paginaLogin;
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
  // Manda pra tela de login
  header("Location: ".$paginaLogin);
}
?>