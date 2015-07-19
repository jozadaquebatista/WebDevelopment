<style> * {background-color: black;} </style>

<?php

    /* ABRE A CONEXÃO COM O DB */ 
    $link = new mysqli("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 
         
   #echo $_POST['id'] . " " . $_POST['note'];
    $result = $link->query('UPDATE task SET note="'.$_POST['note'].'" WHERE task.id='.$_POST['id'].'') or die("Error in the consult.." . mysqli_error($link));

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=tmp_tasklist.php" />'; # atualiza tela

?>