<?PHP
        //Criar a conexão
include_once("admin/functions/conexao.php");
$conexao = abreConexao();
$banco = mysqli_select_db($conexao,'confeccao') or die("Erro ao selecionar o banco de dados");
# Validar os dados do usuário

function anti_sql_injection($string)
	{
                $conexao = abreConexao();
                $banco = mysqli_select_db($conexao,'confeccao') or die("Erro ao selecionar o banco de dados");
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conexao,$string);
		return $string;
	}

$sql = mysqli_query($conexao,"select * from KACCESSK where usuario='".anti_sql_injection($_POST['usuario'])."' and senha='".anti_sql_injection($_POST['senha'])."' limit 1") or die("Erro");
$linhas = mysqli_num_rows($sql);
if($linhas == '')
	{
            echo ("<script>alert('Usuário não encontrado ou dados incorretos. Tente novamente.'); location.href='login.php';</script>");
	}
else
	{
		while($dados=mysqli_fetch_assoc($sql))
			{
				session_start();
				$_SESSION['usuarioNome'] = $dados['nome'];
				$_SESSION['usuarioAcesso'] = $dados['ACESSO'];
				header("Location: ./admin/home.php");
			}
	}
?>