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
   
  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php include (topo);?>
    <?php include (verificaDiretor) ?>

    
         
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
                            <p>Diretor</p>
                            <hr>
                            <h3><strong>Idade</strong></h3>
                            <p>Desconhecido</p>
                            <hr>
                            <h3><strong>Instituição</strong></h3>
                            <p>Desconhecido</p>
                            <hr>
                            <h3><strong>Dados Específicos</strong></h3>
                            <h4><strong>Data de Nascimento</strong></h4>
                            <h4><strong>RG</strong></h4>
                            <h4><strong>CPF</strong></h4>
                            <h4><strong>Gênero</strong></h4>
                            <h4><strong>Tipo de Pacote Contratado</strong></h4>
                            <h4><strong>p/add</strong></h4>
                            <hr>
                        </div>
                        <a href="#" class="btn btn-primary btn-block pull-right"> Modificar Informações</a>
                        <a href="#" class="btn btn-primary btn-block pull-right"> Modificar Pacote</a>
                    </div>
                </div>
            </div>
        </div>

      
      <!--CONTEÚDO DO PERFIL-->
       <div class="col-sm-9">
        
        <!-- resumt -->
        
               <div class="bs-callout bs-callout-danger">
                  <h4>Descrição</h4>
                  <p>
                     Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                     te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </p>
                  <p>
                     Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                     Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Outras Informações</h4>
                  <p>
                     Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                     te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </p>
                  <p>
                     Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                     Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Prior Experiences</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">
                           Software Engineer at Twitter
                        </h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                           te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                     </a>
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                           Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                           nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                        <ul>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                        </ul>
                        <p></p>
                     </a>
                  </ul>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Key Expertise</h4>
                  <ul class="list-group">
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc </li>
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                     <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
                  </ul>
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
         </div>

      

   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>

