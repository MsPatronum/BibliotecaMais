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

    
      
        <!--BARRA LATERAL-->
    <!-- BARRA LATERAL-->
<div class="container">
<div class="col-lg-3 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                       
                        <div class="media-body">
                            <h3><strong>Painel de Controle</strong></h3>
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
                    </div>
                </div>
  </div></div>
            
            <div id="page-wrapper">
            <div class="container-fluid">
               
                <!-- row -->
                    <!--col -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">MYNEW CLIENTS</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">NEW PROJECTS</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!--col -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">NEW INVOICES</h5> </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                    <div class="col-sm-9">
                        <div class="white-box">
                            <h3 class="box-title">Recent sales
                                <div class="col-md-2 col-sm-4 col-xs-12 pull-right">
                                    <select class="form-control pull-right row b-none">
                                        <option>March 2016</option>
                                        <option>April 2016</option>
                                        <option>May 2016</option>
                                        <option>June 2016</option>
                                        <option>July 2016</option>
                                    </select>
                                </div>
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="txt-oflo">Pixel admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Real Homes</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Medical Pro</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Hosting press</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Helping Hands</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Digital Agency</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td class="txt-oflo">Helping Hands</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table> <a href="#">Check all the sales</a> </div>
                        </div>
                    </div>
                    
                    <div class="col-md-9"> 
          <div id="piechart"></div> </div>
                </div>
                  
                
        </div>
                </div>
               
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Gênero', 'Quantidade'],
  ['Fantasia', 8],
  ['Ficção', 2],
  ['Aventura', 2],
  ['Mistério', 3],
  ['', 2],
  ['Romance', 7]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Gêneros mais Lidos', 'height':500,
        pieHole: 0.4};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script> 
                
                <!-- /.row -->
             <div class="row"><div class="col-md-9 pull-right">
                <div id="chart_div"></div>
         </div></div>
  <script type="text/javascript">
  
    google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawLineColors);

function drawLineColors() {
      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Dias');
        data.addColumn('number', 'Locações');


      data.addRows([
        [new Date(2015, 0, 1), 8],  [new Date(2015, 0, 2), 7],  [new Date(2015, 0, 3), 3],
          [new Date(2015, 0, 4), 12],  [new Date(2015, 0, 5), 3],  [new Date(2015, 0, 6), 4],
          [new Date(2015, 0, 7), 10],  [new Date(2015, 0, 8), 4],  [new Date(2015, 0, 9), 2],
          [new Date(2015, 0, 10), 4], [new Date(2015, 0, 11), 8], [new Date(2015, 0, 12), 6],
          [new Date(2015, 0, 13), 10], [new Date(2015, 0, 14), 3], [new Date(2015, 0, 15), 5],
          [new Date(2015, 0, 16), 7], [new Date(2015, 0, 17), 6], [new Date(2015, 0, 18), 6],
          [new Date(2015, 0, 19), 3], [new Date(2015, 0, 20), 1], [new Date(2015, 0, 21), 2],
          [new Date(2015, 0, 22), 4], [new Date(2015, 0, 23), 6], [new Date(2015, 0, 24), 5],
          [new Date(2015, 0, 25), 9], [new Date(2015, 0, 26), 4], [new Date(2015, 0, 27), 9],
          [new Date(2015, 0, 28), 8], [new Date(2015, 0, 29), 6], [new Date(2015, 0, 30), 4],
          [new Date(2015, 0, 31), 6], [new Date(2015, 1, 1), 7],  [new Date(2015, 1, 2), 9]

      ]);

      var options = {
        hAxis: {
          title: 'Dia'
        },
        vAxis: {
          title: 'Número de Livros Locados'
        },
        colors: ['#a52714', '#097138']
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  
  </script>
                
                
                <!--GRAFICO-->
                
                
                <!--row -->
                
 
  
        

      

   <?php include(rodape); ?>


      <!-- FOOTER -->
      

   


  
  </body>
</html>
