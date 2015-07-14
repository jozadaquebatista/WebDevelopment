<?php
	
	session_start();

	$_SESSION['username'] = 'Jozadaque Batista';

	echo "sessao criada e variável armazenada.";
?>

<html>
	<br /><br />
	<a href="sessao2.php"> Proxima </a>
</html>