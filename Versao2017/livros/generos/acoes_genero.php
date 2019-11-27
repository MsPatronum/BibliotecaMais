<?php include("../../includes/config.php");



$valor = explode("|", $_POST['valor']);

$genero=$valor[0];
$operacao=$valor[1];

switch ($operacao) {
	case 'gravar':
		$sql="Insert into genero (nome_genero) values ('$genero')";
		$msg="Salvo com sucesso";
		break;
	
	case 'excluir':
		$sql="Delete from genero where cod_genero=$genero";
		$msg="Excluido com sucesso";
		break;
}


include(conexao);
$executa=$mysqli->query($sql);
$error=$mysqli->error;

if(empty($error)){
	echo $msg;
}else{
	echo "Falha ao inserir";
}



 ?>