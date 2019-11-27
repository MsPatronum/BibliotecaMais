<?php include("../../includes/config.php");



$valor = explode("|", $_POST['valor']);

$editora=$valor[0];
$operacao=$valor[1];

switch ($operacao) {
	case 'gravar':
		$sql="Insert into editora (nome_editora) values ('$editora')";
		$msg="Salvo com sucesso";
		break;
	
	case 'excluir':
		$sql="Delete from editora where cod_editora=$editora";
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