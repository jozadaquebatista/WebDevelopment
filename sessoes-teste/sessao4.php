<?php

	session_start();

	echo 'Esta é a sessão 3, e seu nome ';
	
	if(!is_null($_SESSION["username"])) {echo "ainda é: <b>".$_SESSION["username"]."</b>"; echo "<br /><br /><b>Aqui eu destruo a sessão!</b> >:D";} else { echo "<b>não tem mais sessão aqui pois foi destruída.</b>"; }

	session_destroy();

?>

<html>
	<br /><br />
	<a href="sessao3.php"> Anterior </a>
	<br />
	<a href="sessao1.php"> Home </a>
</html>