<?php include ("../../includes/config.php"); ?>
<!DOCTYPE html>
 <html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Meu Perfil</title>

    <?php include(headers); ?>
   
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php include (topo);?>

    
      
        <?php 


$operacao = $_GET['operacao'];

if(empty($operacao)){
  header("location:cadastraUsuario.php");
    }
    
include(conexao);
    
  if($operacao=='editar'){
  
  $cod_usuario = $_GET['cod_usuario'];
      
  $sql="Select * from usuario where cod_usuario=$cod_usuario";
  $executa = $mysqli->query($sql);
  $dados = $executa->fetch_assoc();
  }
    
  ?>  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Cadastro de usuário</h1>
           </div>
        </div>
    </div>
  </div>
  
  <div class="container">
      <div class="col-sm-4 col-sm-offset-4">
            
            <form method="post" action="acoes_usuario.php" id="formCadastro">
            
            <!--inicio do formulário-->
       
           <div class="form-group"> 
              <input type="text" name="nome_usuario" placeholder="Nome do usuário" class="form-control" id="nome_usuario" value="<?php echo @$dados['nome_usuario']; ?>" >
            </div>
            <div class="form-group">
              <input type="email_usuario" name="email_usuario" class="form-control" placeholder="Email" id="email_usuario" value="<?php echo @$dados['email_usuario']; ?>">
            </div>
               
           

            <div class="form-group"> 
                <input type="password" name="senha_usuario" placeholder="Senha" class="form-control" id="senha_usuario" value="" >
              </div>
            
                        
 
            <div class="form-group">
              <input type="password" name="confirma_senha" placeholder="Repetir senha" class="form-control" id="confirma_senha">
              </div>             
            
    
    <div class="form-group">
     
              <input type="text" name="telefone_usuario" placeholder="Telefone" class="form-control" id="telefone_usuario" value="<?php echo @$dados['telefone_usuario']; ?>" >
            </div>
            
           
            
            <div class="form-group"> 
              <div class="col-sm-4">
              <!--<input type="date" name="data_nascimento" placeholder="Data de nascimento" class="form-control" id="data_nascimento" value="<?php echo @$dados['data_nascimento']; ?>">-->
      <div class="input-group date">
  <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" value="<?php echo @$dados['nascimento']; ?>">
</div>
           </div>
            </div>
            
            <div class="form-group"> 
            <div class="col-sm-9">  
              <input type="text" name="endereco_usuario" placeholder="Endereço" class="form-control" id="endereco_usuario" value="<?php echo @$dados['endereco_usuario']; ?>">
           </div>
            
            <div class="form-group">
              <div class="col-sm-3">
                 <input type="text" name="numero_usuario" placeholder="Nº" class="form-control" id="numero_usuario" value="<?php echo @$dados['numero_usuario']; ?>">
            </div>
             </div>
            
            <div class="row">
            <div class="col-sm-6">
              <input type="text" name="bairro_usuario" placeholder="Bairro" class="form-control" id="bairro_usuario" value="<?php echo @$dados['bairro_usuario']; ?>">
            </div>

              <div class="col-sm-6">
              <input type="text" name="cep_usuario" placeholder="CEP" class="form-control" id="cep_usuario" value="<?php echo @$dados['cep_usuario']; ?>">
           </div></div>
            
            <div class="col-sm-12 form-group"> 
              <input type="file" name="foto_usuario" placeholder="Foto" class="form-control" id="foto_usuario" value="<?php echo @$dados['foto_usuario']; ?>">
            </div>
            
            <div class="form-group">
            <div class="col-sm-7"> 
              <input type="text" name="tipo_usuario" placeholder="Tipo do usuário" class="form-control" id="tipo_usuario" value="<?php echo @$dados['tipo_usuario']; ?>">
           </div>
            </div>
            
            <div class="form-group">
            <div class="col-sm-5"> 
              <input type="text" name="rg_usuario" placeholder="RG" class="form-control" id="rg_usuario" value="<?php echo @$dados['rg_usuario']; ?>">
           </div>
            </div>
            
            <div class="form-group"> 
              <div class="col-sm-6">
              <input type="text" name="cpf_usuario" placeholder="CPF" class="form-control" id="cpf_usuario" value="<?php echo @$dados['cpf_usuario']; ?>">
           </div>
            </div>
            
            <div class="form-group"> 
              <div class="col-sm-6">
              <input type="text" name="ra_usuario" placeholder="RA" class="form-control" id="ra_usuario" value="<?php echo @$dados['ra_usuario']; ?>">
           </div>
            </div>           

<input type="hidden" name="operacao" value="<?php echo $operacao;?>">

<input type="hidden" name="cod_usuario" value="<?php echo $dados['cod_usuario'];;?>">

            <div class="form-group"> 
              <div class="col-sm-6 col-sm-offset-6">
              <button type="submit" class="form-control btn btn-primary">Cadastrar usuário</button>
            </div>
            </div>
              
            </form>

            </div>

        </div>

    </div>
 
  </div> 


<script type="text/javascript" src="<?php echo (url); ?>/maskedinput/src/jquery.maskedinput.js"></script>
<script  type="text/javascript" >
  $(document).ready(function(){
  $("#cpf_usuario").mask("999.999.999-99");
  $("#telefone_usuario").mask("(99)99999-9999");
  $("#cep_usuario").mask("99999-999");
  
 $('#data_nascimento').datepicker({
          format: "dd/mm/yyyy",
            language: "pt-BR"
   });
  
   }); 


  </script>


      

   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>
