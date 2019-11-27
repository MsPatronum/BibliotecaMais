<?php include ("../../../includes/config.php"); ?>
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
    <?php include (verifica_logado);?>
   
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php include (topo);?>
    <?php include (verificaBibliotecario);?>


    
      <!-- BARRA LATERAL-->
<div class="container">
<div class="col-lg-3 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>Nome</strong></h3>
                            <p><?php echo $_SESSION['nome_usuario']; ?></p>
                            <hr>
                            <h3><strong>Instituição</strong></h3>
                            <p>Desconhecido</p>
                            <hr>
                            <h3><strong>Dados Específicos</strong></h3>
                            <h4><strong>Data de Nascimento</strong></h4>
                            <h4><strong>RG</strong></h4>
                            <h4><strong>CPF</strong></h4>
                            <h4><strong>Gênero</strong></h4>
                            <h4><strong>p/add</strong></h4>
                             <hr>
                        </div>
                        <a href="#" class="btn btn-primary btn-block pull-right"> Modificar Informações</a>
                    </div>
                </div>
            </div>
        </div>

      
      <!--CONTEÚDO DO PERFIL-->
       <div class="col-sm-9">
        
        <!-- resumt -->
        <div class="panel panel-default">
               
               
               <div class="bs-callout bs-callout-danger">
                  <h4>Reserva Local</h4>
                  <form>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Nome do Livro">
                </div>
                <div class="col-md-3">
                <button type="submit" class="btn btn-default btn-block" >Pesquisar</button>
              </div><hr class="featurette-divider" style="margin-top:0px;">
              </form>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-4">
                           <figure>
                              <img class="img img-responsive" alt="" src="http://placehold.it/200x300">
                           </figure>
                           
                        </div>
                        <div class="col-xs-12 col-sm-8">
                           <ul class="list-group">
                              <li class="list-group-item">Nome do livro:</li>
                              <li class="list-group-item">Nome do autor:</li>
                              <li class="list-group-item">Editora: </li>
                              <li class="list-group-item">Código:</li>
                              <li class="list-group-item">Idioma:</li>
                              <li class="list-group-item">Tipo:</li>
                              <li class="list-group-item">Edição:</li>
                              <li class="list-group-item">Número de páginas:</li>
                              <li class="list-group-item">Avaliação:
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i></li>
                           </ul>
                        </div>
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                                  <a href="#" class="btn btn-default btn-sm btn-block pull-right"> Reservar</a>
                                </div>
                     </div>
                  </div>
               </div>
               
               
            
            
            <!-- NAVEGAÇÃO ADMIN -->
        <div class="bs-callout bs-callout-danger">
            <div class="panel with-nav-tabs panel-default">
                
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Locados</a></li>
                            
                            <li><a href="#tab2default" data-toggle="tab">Devoluções</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Mais <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab3default" data-toggle="tab">Mais Procurados</a></li>
                                    <li><a href="#tab4default" data-toggle="tab">Usuários Bloqueados</a></li>
                                </ul>
                            </li>
                        </ul>
                
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                          
                          <div class="bs-callout bs-callout-success">
                  <h4>Education</h4>
                  <table class="table table-striped table-responsive ">
                     <thead>
                        <tr>
                           <th>Degree</th>
                           <th>Graduation Year</th>
                           <th>CGPA</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Masters in Computer Science and Engineering</td>
                           <td>2014</td>
                           <td> 3.50 </td>
                        </tr>
                        <tr>
                           <td>BSc. in Computer Science and Engineering</td>
                           <td>2011</td>
                           <td> 3.25 </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
                          
                        </div>
                        
                        
                       
                        <div class="tab-pane fade" id="tab2default">
                          
                          <div class="bs-callout bs-callout-success">
                  <h4>Education</h4>
                  <table class="table table-striped table-responsive ">
                     <thead>
                        <tr>
                           <th>Degree</th>
                           <th>Graduation Year</th>
                           <th>CGPA</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Masters in Computer Science and Engineering</td>
                           <td>2014</td>
                           <td> 3.50 </td>
                        </tr>
                        <tr>
                           <td>BSc. in Computer Science and Engineering</td>
                           <td>2011</td>
                           <td> 3.25 </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
                          
                        </div>
                        <div class="tab-pane fade" id="tab3default">
            
                      <div class="bs-callout bs-callout-success">
                  <h4>Language and Platform Skills</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <div class="progress">
                           <div data-placement="top" style="width: 80%;" 
                              aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">80%</span>
                              <span class="progress-type">Java/ JavaEE/ Spring Framework </span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">70%</span>
                              <span class="progress-type">PHP/ Lamp Stack</span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">70%</span>
                              <span class="progress-type">JavaScript/ NodeJS/ MEAN stack </span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 65%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">65%</span>
                              <span class="progress-type">Python/ Numpy/ Scipy</span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60%</span>
                              <span class="progress-type">C</span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">50%</span>
                              <span class="progress-type">C++</span>
                           </div>
                        </div>
                        <div class="progress">
                           <div data-placement="top" style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">10%</span>
                              <span class="progress-type">Go</span>
                           </div>
                        </div>
                        <div class="progress-meter">
                           <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I suck</span></div>
                           <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I know little</span></div>
                           <div style="width: 30%;" class="meter meter-right"><span class="meter-text">I'm a guru</span></div>
                           <div style="width: 20%;" class="meter meter-right"><span class="meter-text">I''m good</span></div>
                        </div>
                     </a>
                  </ul>
               </div>
                       
                       </div>
                        <div class="tab-pane fade" id="tab4default">Usuários Bloqueados</div>
                    </div>
                </div>
            </div>
        
            
         </div>
         </div>
         </div></div>
        
        
        

      
   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>
