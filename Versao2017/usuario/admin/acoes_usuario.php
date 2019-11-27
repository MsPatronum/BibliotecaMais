<?php  include("../../includes/config.php");


$operacao = $_POST['operacao'];
$nome_usuario = addslashes(strip_tags( $_POST['nome_usuario']));
$senha_usuario = MD5(strip_tags( $_POST['senha_usuario']));
$telefone_usuario = addslashes(strip_tags( $_POST['telefone_usuario']));
$email_usuario = addslashes(strip_tags( $_POST['email_usuario']));
$data_nascimento = addslashes(strip_tags( $_POST['data_nascimento']));
$endereco_usuario = addslashes(strip_tags( $_POST['endereco_usuario']));
$numero_usuario = addslashes(strip_tags( $_POST['numero_usuario']));
$bairro_usuario = addslashes(strip_tags( $_POST['bairro_usuario']));
$cep_usuario = addslashes(strip_tags( $_POST['cep_usuario']));
$foto_usuario = addslashes(strip_tags( $_POST['foto_usuario']));
$tipo_usuario = addslashes(strip_tags( $_POST['tipo_usuario']));
$rg_usuario = addslashes(strip_tags( $_POST['rg_usuario']));
$cpf_usuario = addslashes(strip_tags( $_POST['cpf_usuario']));
$ra_usuario = addslashes(strip_tags( $_POST['ra_usuario']));
					
	
switch($operacao){
	case 'gravar':
	echo  $sql="Insert into usuario (nome_usuario,senha_usuario,telefone_usuario,email_usuario,data_nascimento,endereco_usuario,numero_usuario,bairro_usuario,cep_usuario,foto_usuario,tipo_usuario,rg_usuario,cpf_usuario,ra_usuario) values ('$nome_usuario','$senha_usuario','$telefone_usuario','$email_usuario','$data_nascimento','$endereco_usuario','$numero_usuario','$bairro_usuario','$cep_usuario','$foto_usuario','$tipo_usuario','$rg_usuario','$cpf_usuario','$ra_usuario')";
		
	$msg="<div class='container'><div class='alert alert-success' align='center'>Usuário inserido com sucesso!</div></div>";
	
	break;// fim do case gravar
	
	
case 'editar':
$cod_usuario= addslashes(strip_tags( $_POST['cod_usuario']));

$sql="update usuario set nome_usuario='$nome_usuario',senha_usuario='$senha_usuario',telefone_usuario='$telefone_usuario',email_usuario='$email_usuario',data_nascimento='$data_nascimento',endereco_usuario='$endereco_usuario',numero_usuario='$numero_usuario',bairro_usuario='$bairro_usuario',cep_usuario='$cep_usuario',foto_usuario='$foto_usuario',tipo_usuario='$tipo_usuario',rg_usuario='$rg_usuario',ra_usuario='$ra_usuario' where cod_usuario='$cod_usuario'";
$msg="<div class='alert alert-success' align='center'>Usuário editado com sucesso!</div>";

break;//fim da case edita
	
	 case '':
  
$cod_usuario =addslashes(strip_tags( $_GET['cod_usuario']));

$sql="delete from usuario where cod_usuario='$cod_usuario'";
$msg="<div class='alert alert-success' align='center'>Usuário excluído com sucesso!</div>";

break;//fim da case exluir
		
	}// fim do switch


include(conexao);

$executa_sql=$mysqli->query($sql);
$erro = $mysqli->error;
	
if($erro==0){
	header("location:cadastraUsuario.php?msg=$msg");
	}
	
	elseif($erro==1062){
		header("location:cadastraUsuario.php?msg=Erro, usuário ja cadastrado !");
		
	}else{
		header("location:cadastraUsuario.php?msg=Erro, contate o suporte!");
		}

	
	
	
	
?>