<?php

	if ($_SESSION['tipo_usuario']!==2) {
		echo ("Você não tem permissão para acessar este arquivo.
	<br> Redirecionando...");
		header("location:".url."/home.php");
 exit();
	}

  ?>