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

 <?php 


$operacao = $_GET['operacao'];

if(empty($operacao)){
  header("location:cadastraExemplar.php");
    }
    
include(conexao);
    
  if($operacao=='editar'){
  $cod_livro= $_GET['cod_livro'];
  $cod_exemplar = $_GET['cod_exemplar'];
   
  $sql = "Select * from livro where cod_livro=$cod_livro";   
  $sql_exemplar="Select * from exemplar where cod_exemplar=$cod_exemplar";
  $executa = $mysqli->query($sql);
  $executa_exemplar = $mysqli->query($sql_exemplar);
  $dados= $executa->fetch_assoc();
  $dados= $executa_exemplar->fetch_assoc();
  }
    
  ?>  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Cadastro de Exemplar</h1>
           </div>
        </div>
    </div>
  </div>
  
  <div class="container">
      <div class="col-sm-12">

            <form method="post" action="acoes_exemplar.php" id="formExemplar">
            
            <!--inicio do formulário-->
       
           <div class="form-group">
           <div class="row">
           <div class="col-sm-6">
            <input type="text" name="titulo_livro" placeholder="Título" class="form-control" id="titulo_livro" value="<?php echo @$dados['titulo_livro']; ?>">
            </div>
          
            
            
            <div class="col-sm-6">
              <input type="text" name="subtitulo_livro" class="form-control" placeholder="Subtítulo" id="subtitulo_livro" value="<?php echo @$dados['subtitulo_livro']; ?>">
            </div>
            </div>
              </div>
           

            <div class="form-group"> 
                <input type="file" name="foto_livro" class="form-control" id="foto_livro" value="<?php echo @$dados['foto_livro']; ?>">
              </div>
   
            <div class="form-group">
              <textarea type="text" name="sinopse_livro" placeholder="Sinopse" class="form-control" id="sinopse_livro" value="<?php echo @$dados['sinopse_livro']; ?>"></textarea>
              </div>             
            
       <div class="form-group"> 
       <div class="row">
       <div class="col-sm-6">
            <select class="form-control" name="categoria_cod_categoria" value="<?php echo @$dados['categoria_cod_categoria']?>">
          <?php $busca="select * from categoria";
$executa=$mysqli->query($busca);

$erro=$mysqli->error;

if(empty($erro)){

	while ($dados=$executa->fetch_assoc()) { 
	  echo "<option value='". $dados['cod_categoria']."'> ".$dados['nome_categoria'] ."</option>"; 
	}
}
 ?>             
          </select> 
            </div>    
           
            
    
    <div class="col-sm-6">
             <select class="form-control" name="editora_cod_editora">
          <?php $busca="select * from editora";
$executa=$mysqli->query($busca);

$erro=$mysqli->error;

if(empty($erro)){

	while ($dados=$executa->fetch_assoc()) { 
	  echo "<option value='". $dados['cod_editora']."'> ".$dados['nome_editora'] ."</option>"; 
	}
}
 ?>             
          </select> 
            </div>
            </div>
            </div>
            
            <div class="form-group"> 
            <div class="row">
            <div class="col-sm-6">  
                  <select class="form-control" name="genero">
          <?php $busca="select * from genero";
$executa=$mysqli->query($busca);

$erro=$mysqli->error;

if(empty($erro)){

	while ($dados=$executa->fetch_assoc()) { 
	  echo "<option value='". $dados['cod_genero']."'> ".$dados['nome_genero'] ."</option>"; 
	}
}
 ?>             
          </select> 
            </div>        
           
            <div class="col-sm-6">
                  <select class="form-control" name="autor">
          <?php $busca="select * from autor";
$executa=$mysqli->query($busca);

$erro=$mysqli->error;

if(empty($erro)){

	while ($dados=$executa->fetch_assoc()) { 
	  echo "<option value='". $dados['cod_autor']."'> ".$dados['nome_autor'] ."</option>"; 
	}
}
 ?>             
          </select> 
          </div>
            </div>
            </div>        
            
        
             <div class="form-group">
              <div class="row"> 
              <div class="col-sm-8">
      <div class="input-group date">
  <input type="date" id="data_nascimento" name="data_aquisicao" class="form-control" value="<?php echo @$dados['data_aquisicao']; ?>">
</div>
</div>
            
           
            <div class="col-sm-4">  
              <input type="text" name="cod_unidade" placeholder="Código da unidade" class="form-control" id="cod_unidade" value="<?php echo @$dados_exemplar['cod_unidade']; ?>">
           </div>
           </div>
            </div>
            
            <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                 <input type="text" name="edicao_exemplar" placeholder="Edição" class="form-control" id="edicao_exemplar" value="<?php echo @$dados['edicao_exemplar']; ?>">
            </div>
             
             
            
            <div class="col-sm-6">
              <input type="text" name="ano_exemplar" placeholder="Ano" class="form-control" id="ano_exemplar" value="<?php echo @$dados['ano_exemplar']; ?>">
            </div>
            </div>
            </div>

           <div class="form-group">
           <div class="row">
            <div class="col-sm-4">
              <input type="text" name="numero_pag" placeholder="Nº de páginas" class="form-control" id="numero_pag"  value="<?php echo @$dados['numero_pag']; ?>">
            </div>
          

          
              <div class="col-sm-8">
              <SELECT id="idioma_exemplar" class="form-control" name="idioma_exemplar">
                <option>Idioma</option>
                <option value="Português">Português</option>
                <option value="Inglês">Inglês</option>
                <option value="Espanhol">Espanhol</option>
                <option value="Japonês">Japonês</option>
                <option value="Italiano">Italiano</option>
              </SELECT>
           </div>
           </div>
           </div>
            
            <div class="form-group">
            <div class="row">
            <div class="col-sm-6"> 
              <input type="text" name="cdd_exemplar" placeholder="CDD" class="form-control" id="cdd_exemplar"  value="<?php echo @$dados['cdd_exemplar']; ?>">
            </div>
            
            
            <div class="col-sm-6"> 
              <input type="text" name="cdu_exemplar" placeholder="CDU" class="form-control" id="cdu_exemplar"  value="<?php echo @$dados['cdu_exemplar']; ?>">
           </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row">
            <div class="col-sm-6"> 
              <input type="text" name="tombo_exemplar" placeholder="Tombo" class="form-control" id="tombo_exemplar"  value="<?php echo @$dados['tombo_exemplar']; ?>">
           </div>
            
            
              <div class="col-sm-6">
              <input type="text" name="cutter_exemplar" placeholder="Cutter" class="form-control" id="cutter_exemplar"  value="<?php echo @$dados['cutter_exemplar']; ?>">
           </div>
            </div>
            </div>
            
            <div class="form-group"> 
            <div class="row">
              <div class="col-sm-6">
              <input type="text" name="isbn_exemplar" placeholder="ISBN" class="form-control" id="isbn_exemplar"  value="<?php echo @$dados['isbn_exemplar']; ?>">
           </div>           

              <div class="col-sm-6">
              <input type="text" name="local_exemplar" placeholder="Local" class="form-control" id="local_exemplar"  value="<?php echo @$dados['local_exemplar']; ?>">
           </div>
            </div>  
            </div>

<input type="hidden" name="operacao" value="<?php echo $operacao;?>">

<input type="hidden" name="cod_livro" value="<?php echo $dados['cod_livro'];?>">

<input type="hidden" name="cod_exemplar" value="<?php echo $dados['cod_exemplar'];?>">

            <div class="form-group"> 
              <div class="col-sm-6 col-sm-offset-6">
              <button type="submit" class="form-control btn btn-primary">Cadastrar exemplar</button>
            </div>
            </div>
              
            </form>

            </div>

        </div>

    </div>
 
  </div> 

<!--
<script type="text/javascript" src="<?php// echo url; ?>/includes/maskedinput/src/jquery.maskedinput.js"></script>
<script  type="text/javascript" >

  $(document).ready(function(){
  $("#cpf_usuario").mask("999.999.999-99");
  //$("#data_nascimento").mask("99/99/9999");
  //$("#rg_usuario").mask("99.999.999-9");
  $("#telefone_usuario").mask("(99)99999-9999");
  $("#cep_usuario").mask("99999-999");
  
 $('#data_nascimento').datepicker({
          format: "dd/mm/yyyy",
            language: "pt-BR"
   });
  
   }); 


  </script>

-->
      

   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>