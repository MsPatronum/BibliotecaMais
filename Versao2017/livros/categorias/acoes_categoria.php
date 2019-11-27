<?php include("../../includes/config.php");



$valor = explode("|", $_POST['valor']);

$categoria=$valor[0];
$operacao=$valor[1];

switch ($operacao) {
	case 'gravar':
		$sql="Insert into categoria (nome_categoria) values ('$categoria')";
		$msg="Salvo com sucesso";
		break;
	
	case 'excluir':
		$sql="Delete from categoria where cod_categoria=$categoria";
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