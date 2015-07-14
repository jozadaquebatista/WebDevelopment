<?php session_start(); // session start deve ser sempre no topo ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>validation</title>
        <style>
            
            input:not([type='submit']){
                border: 2px solid steelblue;
                border-radius: 5px;
            }
            
            label{
                
                font-family: monospace;
                font-size: 20px;
                
            }
            
        </style>
    </head>
    <body>
        <form method="post" action="">
           <label for="nome">Nome: <input type="text" placeholder="coloque seu nome..." name="nome" /></label><br/><br/>
           <label for="senha">Senha: <input type="password" placeholder="coloque sua senha..." name="senha" /></label><br/><br/>
           <label for="email">E-mail: <input type="email" placeholder="coloque seu email..." name="email" /></label><br/>
           <input type="submit" value="Enviar"  />
        </form>
        
        <?php
            
            if(isset($_POST['nome']) &&
               isset($_POST['senha']) &&
               isset($_POST['email']))
            {
                
                echo "seu nome: " . $_POST['nome'] . "<br/>";
                echo "sua senha: " . $_POST['senha'] . "<br/>";
                echo "seu email: " . $_POST['email'] . "<br/>";
                echo '<meta HTTP-EQUIV="REFRESH" content="2; url=outra_tela.php" />';
                $_SESSION['nome'] = $_POST['nome'];
                
            } elseif(!empty($_POST['nome']) &&
                     !empty($_POST['senha']) &&
                     !empty($_POST['email'])) {
                echo "<h1>nenhum dado preenchido!</h1>";
                echo '<meta HTTP-EQUIV="REFRESH" content="3; url=index.php" />';
            } else {}
            
        
        ?>
        
    </body>
</html>
