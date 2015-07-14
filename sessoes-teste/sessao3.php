<?php

	session_start();

	echo 'Esta é a sessão 3, e seu nome ';
	
	if(!is_null($_SESSION["username"])) {echo "ainda é: <b>".$_SESSION["username"]."</b>";} else { echo "<b>não tem mais sessão aqui pois foi destruída.</b>"; }


?>

<html>
	<br /><br />
	<a href="sessao2.php"> Anterior </a>
	<a href="sessao4.php"> Proximo </a>
</html>