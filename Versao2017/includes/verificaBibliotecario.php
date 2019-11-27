<?php 
	@session_start();
	if ($_SESSION['tipo_usuario']!=1) {
		echo "Você não tem permissão para acessar esta página.
	<br> Redirecionando...";
	
	
 ?>
 		<script type="text/javascript">
 			setTimeOut("location.href='<?php echo (url); ?>/home.php';",1000);
 		</script>
 <?php 
 exit();
	}


  ?>

