<link rel="icon" href="https://i.imgur.com/Xc5kaoL.png">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    

    <div class="navbar-wrapper">
     <div class="container">
      <nav class="navbar navbar-static-top navbar-inverse">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo(url) ?>/home.php"><img class="imgbrand img-circle" src="https://imgur.com/Xc5kaoL.png" style="height: 50px; width: 50px; background-color: white; border: solid 1px #fff"></a>
      <a class="navbar-brand disabled" href="<?php echo (url) ?>/home.php">Biblioteca Mais</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      
      <!-- USUÁRIO -->
      <?php include (conexao);?>
     
      <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="<?php echo $_SESSION['nome_usuario']; ?>" alt="John Doe" width="30px" height="30px">
                                    </span>
                                    <span class="user-name">
                                        <?php echo $_SESSION['nome_usuario']; ?>
                                    </span>
                                    <b class="caret"></b></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					<div class="row">
						<div class="col-md-12">
                           	<div class="row">
                               	<div class="col-md-4">
                                   	<img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="Alternate Text" class="img-responsive img-circle" width="120px" height="120px" />
                                       <p class="text-center small">
           	                            	<a href="./3X6zm">Change Photo</a>
                                       </p>
                              	</div>
                                    
                               	<div class="col-md-8">
                                   	<span><?php echo $_SESSION['nome_usuario']; ?></span>
                                      <div class="divider"></div>

                                        <?php if ($_SESSION['tipo_usuario'] == 0){
                                          echo (" <a href='".(url)."/usuario/admin/diretor/userdiretor.php' class='btn btn-default btn-xs btn-block'> Meu Perfil </a>");
                                        } elseif ($_SESSION['tipo_usuario'] == 1) {
                                          echo (" <a href='".(url)."/usuario/admin/bibliotecario/useradmin.php' class='btn btn-default btn-xs btn-block'> Meu Perfil </a> ");
                                        } elseif ($_SESSION['tipo_usuario'] == 2){
                                          echo (" <a href='".(url)."/usuario/usercomum/user.php' class='btn btn-default btn-xs btn-block'> Meu Perfil </a>");
                                        }?>

                                      
                                      
                                      
                                      <a href="#" class="btn btn-default btn-xs btn-block"> Configurações </a>
                                      <a href="#" class="btn btn-default btn-xs btn-block"> Entre em contato </a>
                               	</div>
                           	</div>
						</div>
						<div class="bottom text-center">
							<div class="row">
                               	<div class="col-md-6">
                                 	<a href="#" class="btn btn-default btn-sm btn-block">Ajuda</a>
                                </div>
                                <div class="col-md-6">
                            	    <a href="<?php echo url ?>/includes/logoff.php" class="btn btn-default btn-sm pull-right btn-block"><i class="fa fa-power-off" aria-hidden="true"></i> Sair</a>
                                </div>
                           	</div>
						</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
  </div><!-- /.container-fluid -->
    </div>
    <div class="container"><hr class="featurette-divider"></div>