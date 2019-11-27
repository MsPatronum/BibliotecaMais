<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>Sua Biblioteca</title>


        <style> 
a {
 font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serifs;
 text-decoration: none;
 color: black;
}


a:hover {
 color: #000000;
 text-decoration: underline;
}

#rodape_informacoes{
    margin-top: 15px;
    height: 200px;
    width:auto;

}
.informacao{
    height:200px;
    width: 340px;
    float:left;
    
}


    </style>

    <?php include (headers);?>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php include (conexao); ?>
    <?php include (topo); ?>

<div class="container">
<div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <center><h1 class="featurette-heading">Etec Avaré</h1></center>
          <p>A ETEC de Avaré, teve início como classe descentralizada da unidade de Cerqueira Cesar, ETEC Pref. José Esteves, em fevereiro de 2006, onde foi decretado em 30 de março de 2006, como Escola Técnica Estadual de Avaré - ETEC de Avaré. Iniciou suas atividades com os Cursos de Administração e Nutrição, em 2007 com o Curso Técnico em Informática e em 2008 com o Ensino Médio. </p>

</p>Em 2009, ampliamos ainda mais com a implantação dos cursos de expansão: Técnico em Logística e Secretariado, sendo estes ministrados na Escola Estadual Coronel João Cruz. Além dos cursos técnicos tivemos também o Programa de Qualificação Profissional que foi destinado a pessoas que se encontravam desempregadas, sendo ministrados os cursos de Cozinheiro, Recepcionista, Limpeza e Barman.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block borda" src="imagens/dino.jpg" alt="Dino">
        </div>
</div>
</div>

<hr>

<div class="container">

<div id="rodape_informacoes">
<div class="col-md-4">
<div class="informacao">
<h2>Endereço</h2>
<p>Rua Álvaro Lemos Torres, 561</p>
<p>Brabância — Avaré-SP,</p>
<p>18703-060.</p>
<br>
<a  target=“_blank” href="https://www.google.com.br/maps/place/Escola+T%C3%A9cnica+Estadual+Prof.+Fausto+Mazzola+(Avar%C3%A9-SP)/@-23.117371,-48.9343285,17z/data=!3m1!4b1!4m5!3m4!1s0x94c12424d3e1b713:0xb67eb9523b75ddb0!8m2!3d-23.117371!4d-48.9321398">Mostrar no mapa</a>
</div>
</div>

<div class="col-md-4">
<div class="informacao">
<h2>Contato</h2>
<p>(14) 3732-5855</p>
<br>
<p>eteavare@hotmail.com</p>
</div></div>
<div class="informacao">
<h2>Social</h2>
<p><a href="#logo"> <i class="fa fa-facebook-official fa-lg" aria-hidden="true"> Facebook</i></a></p>
<p><a href="#logo"> <i class="fa fa-youtube fa-lg" aria-hidden="true"> Youtube</i></a></p>
<a href="#logo"> <i class="fa fa-whatsapp fa-lg" aria-hidden="true"> WhatsApp</i></a>
</div>
</div>
 </div>
   



      <!-- FOOTER -->
     <?php include (rodape); ?>
     <?php //include (js);?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   
  </body>
</html>
