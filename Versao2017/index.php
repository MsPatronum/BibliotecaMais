<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>Biblioteca Mais</title>

    <?php include (headers);?>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php include (conexao); ?>
    <?php include (topoinicio); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active carr1 ">
          <img class="first-slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>A Biblioteca Virtual feita para você!</h1>
              <p>Projetada para atender e facilitar o acesso e gerenciamento de sua biblioteca institucional!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">COMEÇAR AGORA</a></p>
            </div>
          </div>
        </div>
        <div class="item carr2">
          <img class="second-slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Conforto onde estiver</h1>
              <p>Tenha sua biblioteca diretamente em sua casa ou na palma de suas mãos e reserve seus livros na hora!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">SAIBA MAIS</a></p>
            </div>
          </div>
        </div>
        <div class="item carr3">
          <img class="third-slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Agilidade</h1>
              <p>Um novo modo de agilizar os processos e dinamizar a locação dos livros em sua instituição.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">SAIBA MAIS</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->


      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">A Biblioteca Virtual que veio para inovar. </h2>
          
          <p class="lead">.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block borda" src="imagens/60987983_l.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Desenvolvida para você que quer muito mais. <span class="text-muted">Veja você mesmo.</span></h2>
          <p class="lead">Filie-se ao maravilhoso mundo online e deixe as suas transações muito mais sofisticadas com essa nova ferramenta para a sua escola!</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block borda" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">E por último, <span class="text-muted">mas não menos importante.</span></h2>
          <p class="lead">Projetada com o intuito de deixar você aproveitar tudo o que temos de melhor, vamos desde o controle do seu acervo até detalhes minuciosos sobre as retiradas e entradas dos livros de sua biblioteca! </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block borda" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     <?php include (rodape); ?>
     <?php //include (js);?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   
  </body>
</html>
