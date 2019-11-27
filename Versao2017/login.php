<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Login - Biblioteca Mais</title>
    <?php include (headers); ?>
  </head>
  <body>
  <?php include(conexao); ?>
<?php include(topoinicio); ?>
<div style="height: 100px;"></div>      
  
  <div class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Login</h1>
            <p class="col-sm-4 col-sm-offset-4">Informe o seu nome de usuario e senha para acessar sua conta.</p>
           </div>
        </div>
    </div>
  </div>
  
  <div class="container">
  	<div class="row">
  		<div class="col-sm-4 col-sm-offset-4">
        	<div class="box-cinza">
            <form method="post" action="<?php echo (url);?>/includes/validaLogin.php">
            <div class="form-group">
<input type="text" name="cpf_usuario" class="form-control" placeholder="CPF" id="cpf_usuario" required autofocus>

<span id="retornoCpf"></span>

            </div>

            <div class="form-group"> 
              <input type="password" name="senha_usuario" placeholder="Senha" class="form-control" id="senha_usuario" required>
 

            </div>

            <div class="form-group"><span id="error-confirma_senha" class="error"></span>

            </div>

            <div class="form-group"> 
              <button type="submit" class="form-control btn btn-primary">Entrar</button>
            </div>
              
            </form>

            </div>
        
        <?php if(isset($_GET['msg'])){
				echo "<div class='alert alert-danger'>".$_GET['msg']."</div>";
			}?>
           
        </div>

  	</div>
 
  </div>
  
</div>  

    <?php include (rodape);?>
       <script src="includes/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo url; ?>/includes/maskedinput/src/jquery.maskedinput.js"></script>
<script  type="text/javascript" >
  

  $(document).ready(function(){
  $("#cpf_usuario").mask("999.999.999-99");
  
  
   }); 


  </script>
  </body>
</html>