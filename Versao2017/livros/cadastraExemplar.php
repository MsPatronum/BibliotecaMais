<?php include ("../includes/config.php"); ?>
<!DOCTYPE html>
 <html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Cadastro de Exemplar</title>

    <?php include(headers); ?>
   
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php include (topo);?>

    
      
          <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Cadastro de Exemplar</h1>
       
  <div class="form-group">
  <a class="btn btn-default" href="form_exemplar.php?operacao=gravar">Novo Exemplar</a>
 </div>

     </div>
        </div>
    </div>
  </div>
    <?php echo @$_GET['msg']; ?>   <?php 

include(conexao);

$sql = "Select * from livro order by cod_livro desc";

$executa_sql = $mysqli->query($sql);

 $total_linha =$executa_sql->num_rows;
    
if($total_linha>0){ 

  while($dados = $executa_sql-> fetch_assoc()){
    ?>
    
   <div class="col-sm-3" align="center" > 
    <p><img src="imagens/<?php echo $dados['foto_livro']; ?>" style="height:200px; width:220px;"></p>
    <p><?php echo $dados['titulo_livro']; ?></p>
    
      <button type="button" class="btn btn-default"> <a href="form_exemplar.php?operacao=editar&cod_livro=<?php echo $dados['cod_livro']; ?>">Editar</a></button>
   
    <a type="button" class="btn btn-default" href="acoes_exemplar.php?cod_livro=<?php echo $dados['cod_livro'] ?>">Excluir</a>
    </p> 
    
      </div> 
      </div><!--fim do container fluid-->

      
    <?php
    }
}

?>
<div class="row"></div>
      

   <?php include(rodape); ?>


      <!-- FOOTER -->