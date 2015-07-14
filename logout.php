<?php session_destroy();

        /* Destroi a sessao, desaloca variavel de sessao e redireciona para a 
         * pagina de login. */

	unset($_SESSION['username']);

	/* depois de destruir a sessão, e a variável, redireciona para a tela 
         * de login. */
	#echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php" />';
        header('Location: http://localhost');
?>