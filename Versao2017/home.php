<?php include ("includes/config.php"); ?>
<?php include (verifica_logado);?>
<!DOCTYPE html>
 <html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Biblioteca Mais</title>

    <?php include(headers); ?>
   
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php include (topo);?>

    
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="https://i.imgur.com/VD6HjkO.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Lista de Livros</h2>
          <p>Pesquise aqui seus amados livros e reserve-os na hora e sem complicação!</p>
          <p><a class="btn btn-default" href="lista.php" role="button">Clique Aqui &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Livros Novos</h2>
          <p>Veja aqui os mais novos livros em sua biblioteca! Antene-se nas novidades e seja um dos primeiros a lê-los!</p>
          <p><a class="btn btn-default" href="livrosnovos.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Sua Biblioteca</h2>
          <p>Veja aqui informações sobre a sua Biblioteca e sua Instituição de uma maneira rápida e fácil!</p>
          <p><a class="btn btn-default" href="informacoes_escola.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      

      

   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>
