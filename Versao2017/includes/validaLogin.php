<?php include("config.php");?>
<?php session_start();//inicia a sessão
$cpf_usuario = addslashes($_POST['cpf_usuario']);
$senha_usuario = MD5($_POST['senha_usuario']);	

include(conexao);

$sql = "Select * from usuario where cpf_usuario='$cpf_usuario' and senha_usuario='$senha_usuario' ";

// executa o sql no banco
$executa = $mysqli->query($sql);

// obter o número de linhas retornado pela consulta
$linhas = $executa->num_rows;

if($linhas==1){
// obter os dados da consulta / criar as session e redirecionar  o usuário para o painel de controle
$dados = $executa->fetch_assoc();
$_SESSION['cpf_usuario'] = $dados['nome_usuario'];
$_SESSION['nome_usuario']=$dados['nome_usuario'];
$_SESSION['foto_usuario']=$dados['foto_usuario'];
$_SESSION['tipo_usuario']=$dados['tipo_usuario'];
$_SESSION['email_usuario']=$dados['email_usuario'];

header("location:".url."/home.php");
}else{
	header("location:".url."/login.php?msg=Login ou senha incorretos!");
	}

?>