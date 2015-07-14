<?php

	/* VARIÁVEIS PARA TESTE DE VALIDACAO SIMULANDO QUERY NO BANCO DE DADOS*/
	$user_name = 'ADMIN';
	$password = '123';
        /* FIM */        
        
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];

	if(strtoupper($username) == $user_name && is_numeric($passwd) == $password)
	{
		session_start();

		$_SESSION['username'] = ucfirst(strtolower($username));

		require_once('tmp_panel.php');

	} else {
					  
		#echo "<html><h1>Senha ou login incorretos.</h1><br />Verifique se os dados estão corretos.</html>";
		#echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php" />';
                header('Location: http://localhost');

	}

?>



