<?php 
require_once("../../includes/config.php");

include(conexao);

$registros = 15;
$pagina = 0; 

if(isset($_GET['pagina'])){
  $pagina = $_GET['pagina'];
}

$busca="select * from editora limit $pagina,$registros";
$executa=$mysqli->query($busca);

$erro=$mysqli->error;

if(empty($erro)){


	while ($dados=$executa->fetch_assoc()) { ?>
		
		

<p> <?php echo $dados['nome_editora']; ?> 
     
<a href="" data-toggle="modal" data-target="#modalExclui<?php echo $dados['cod_editora'];?>">Excluir</a>  

     </p>
<div class="modal fade" tabindex="-1" role="dialog" id="modalExclui<?php echo $dados['cod_editora'];?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Título do modal</h4>
      </div>
      <div class="modal-body">


        <p>Tem certeza que deseja excluir esta editora?</p>

        <p id="retornoExclui"></p>
      

      </div>
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>

<button type="button" value="" id="btnExclui" class="btn btn-primary" onclick="javascript:enviaDados(<?php echo $dados['cod_editora'];?>+'|'+'excluir','acoes_editora','retornoExclui','Salvando...');location.href='cadastraEditora.php';">Sim</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<?php 	}


}

// paginação
$sqlTotalRegistros = $mysqli->query("select * from editora");
$totalRegistros = $sqlTotalRegistros->num_rows;

// numero de páginas da paginação
$totalPaginas = ceil($totalRegistros / $registros);

for($i=0; $i < $totalPaginas; $i++) {  

$pagina = $i * $registros;  

$valor = $i+1;

echo "<ul class='pagination'><li><a href='?pagina=$pagina'>$valor</a></li></ul>";

} // fim for paginacao

?>


