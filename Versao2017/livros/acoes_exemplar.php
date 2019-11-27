<?php  include("../includes/config.php");


$operacao = $_POST['operacao'];
$titulo_livro = addslashes(strip_tags( $_POST['titulo_livro']));
$subtitulo_livro = addslashes(strip_tags( $_POST['subtitulo_livro']));
$foto_livro = addslashes(strip_tags( $_POST['foto_livro']));
$sinopse_livro = addslashes(strip_tags( $_POST['sinopse_livro']));
$categoria_cod_categoria = addslashes(strip_tags( $_POST['categoria_cod_categoria']));
$data_aquisicao = addslashes(strip_tags( $_POST['data_aquisicao']));
$cod_unidade = addslashes(strip_tags( $_POST['cod_unidade']));
$edicao_exemplar = addslashes(strip_tags( $_POST['edicao_exemplar']));
$ano_exemplar = addslashes(strip_tags( $_POST['ano_exemplar']));
$numero_pag = addslashes(strip_tags( $_POST['numero_pag']));
$idioma_exemplar = addslashes(strip_tags( $_POST['idioma_exemplar']));
$cdd_exemplar = addslashes(strip_tags( $_POST['cdd_exemplar']));
$cdu_exemplar = addslashes(strip_tags( $_POST['cdu_exemplar']));
$isbn_exemplar = addslashes(strip_tags( $_POST['isbn_exemplar']));
$local_exemplar = addslashes(strip_tags( $_POST['local_exemplar']));
					

	
switch($operacao){
	case 'gravar':
	echo  $sql="Insert into livro(titulo_livro, subtitulo_livro, foto_livro,sinopse_livro,categoria_cod_categoria) values('$titulo_livro', '$subtitulo_livro', '$foto_livro', '$sinopse_livro','$categoria_cod_categoria')";
	
	$msg="<div class='container'><div class='alert alert-success' align='center'>Exemplar cadastrado com sucesso!</div></div>";
	break;// fim do case gravar
	
	
case 'editar':
$cod_usuario= addslashes(strip_tags( $_POST['cod_livro']));
$cod_exemplar= addslashes(strip_tags( $_POST['cod_exemplar']));


$sql="delete from livro where cod_livro='$cod_livro'; delete from exemplar where cod_exemplar='$cod_exemplar';";
$msg="<div class='alert alert-success' align='center'>Exemplar editado com sucesso!</div>";

break;//fim da case edita
	
	 case '':

$cod_livro=  addslashes(strip_tags( $_POST['cod_livro']));
$cod_exemplar =addslashes(strip_tags( $_GET['cod_exemplar']));

$sql="";
$sql_exemplar="";
$msg="<div class='alert alert-success' align='center'>Exemplar excluído com sucesso!</div>";

break;//fim da case exluir
		
	}// fim do switch


include(conexao);

$executa_sql=$mysqli->query($sql);
echo $ultimo_cod=$mysqli->insert_id;

if($operacao=='gravar'){
	echo $sql_exemplar= "Insert into exemplar(livro_cod_livro, data_aquisicao, cod_unidade, edicao_exemplar, ano_exemplar, numero_pag, idioma_exemplar, cdd_exemplar, cdu_exemplar, isbn_exemplar, local_exemplar) values('$ultimo_cod','$data_aquisicao', '$cod_unidade', '$edicao_exemplar', '$ano_exemplar', '$numero_pag', '$idioma_exemplar', '$cdd_exemplar', '$cdu_exemplar', '$isbn_exemplar', '$local_exemplar');";
	$executa_sql_exemplar=$mysqli->query($sql_exemplar);
	}
$erro = $mysqli->error;
	
if($erro==0){
	header("location:cadastraExemplar.php?msg=$msg");
	}
	
	elseif($erro==1062){
	header("location:cadastraExemplar.php?msg=Erro, exemplar ja cadastrado!");
		
	}else{
		header("location:cadastraExemplar.php?msg=Erro, contate o suporte!");
		}

	
	
	
	