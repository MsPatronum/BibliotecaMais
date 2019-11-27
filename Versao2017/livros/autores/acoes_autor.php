<?php include("../../includes/config.php");



$valor = explode("|", $_POST['valor']);

$autor=$valor[0];
$operacao=$valor[1];

switch ($operacao) {
	case 'gravar':
		$sql="Insert into autor (nome_autor) values ('$autor')";
		$msg="Salvo com sucesso";
		break;
	
	case 'excluir':
		$sql="Delete from autor where cod_autor=$autor";
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