<?php session_start();
//script de configurações básicas do php
define('url','http://localhost/biblioteca_mais'); //url raiz do site
define('raiz',$_SERVER['DOCUMENT_ROOT'].'/biblioteca_mais');
define('conexao',raiz.'/includes/conexao.php');// conexao padrão do site
define('funcoes',raiz.'/includes/funcoes.php'); // arquivo de funcoes
define('topo',raiz.'/includes/topo.php'); // arquivo de funcoes
define('topoinicio',raiz.'/includes/topoinicio.php'); // arquivo de funcoes
define('menu',raiz.'/includes/menu.php'); // arquivo de funcoes
define('rodape',raiz.'/includes/rodape.php');
define('verifica_logado',raiz.'/includes/verificaLogado.php');
define('verificaDiretor',raiz.'/includes/verificaDiretor.php');
define('verificaBibliotecario',raiz.'/includes/verificaBibliotecario.php');
define('verificaAluno',raiz.'/includes/verificaAluno.php');

define('js','<script src="'.url.'/includes/js/jquery-2.2.3.min.js"></script>
             <script src="'.url.'/includes/bootstrap/js/bootstrap.min.js"></script>
			 <script src="'.url.'/includes/js/funcoes.js"></script>');

define('headers',raiz.'/includes/headers.php');

date_default_timezone_set("America/Sao_Paulo");
?>