<?php include ("../../includes/config.php"); ?>
<?php include(verifcaLogado); ?>
<!DOCTYPE html>
 <html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Cadastro de usuário</title>

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
            <h1>Cadastro de usuário</h1>
       
  <div class="form-group">
  <a class="btn btn-default" href="form_usuario.php?operacao=gravar">Novo Usuario</a>
 </div>

     </div>
        </div>
    </div>
  </div>
    <?php echo @$_GET['msg']; ?>   <?php 

include(conexao);

$sql = "Select *,date_format(data_nascimento,'%d/%m/%Y') as nascimento from usuario order by cod_usuario desc";

$executa_sql = $mysqli->query($sql);

 $total_linha =$executa_sql->num_rows;
    
if($total_linha>0){ 

  while($dados = $executa_sql-> fetch_assoc()){
    ?>
    
   <div class="col-sm-3" align="center" > 
    
       <p>Nome: <?php echo $dados['nome_usuario']; ?></p>
       <p>Telefone: <?php echo $dados['telefone_usuario']; ?></p>
       <p>Email: <?php echo $dados['email_usuario']; ?></p>
       <p>Data de nascimento: <?php echo $dados['nascimento']; ?></p>
       <p>Endereço: <?php echo $dados['endereco_usuario']; ?></p>
       <p>Nº: <?php echo $dados['numero_usuario']; ?></p>
       <p>Bairro: <?php echo $dados['bairro_usuario']; ?></p>
       <p>CEP: <?php echo $dados['cep_usuario']; ?></p>
       <p>Foto: <?php echo $dados['foto_usuario']; ?></p>        
       <p>Tipo de usuário: <?php echo $dados['tipo_usuario']; ?></p>
       <p>RG: <?php echo $dados['rg_usuario']; ?></p>
       <p>CPF: <?php echo $dados['cpf_usuario']; ?></p>
       <p>RA: <?php echo $dados['ra_usuario']; ?></p>
    
    
      <button type="button" class="btn btn-default"> <a href="form_usuario.php?operacao=editar&cod_usuario=<?php echo $dados['cod_usuario']; ?>">Editar</a></button>
   
    <a type="button" class="btn btn-default" href="acoes_usuario.php?cod_usuario=<?php echo $dados['cod_usuario']; ?>">Excluir</a>
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
      

   


  
  </body>
</html>
