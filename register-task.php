<?php

    /* Nome de usuário logado */
    $user_name = $_POST['user_name'];
    $passwd = $_POST['passwd'];
    
    $task_title = $_POST['task_title'];
    $note = $_POST['note'];
    $priority = $_POST['priority'];
    $begin = $_POST['begin'];
    $deadline = $_POST['deadline'];
    $sched_time = $_POST['sched_time'];
    $status = $_POST['status'];
    $archived = $_POST['archived'];
    $member_id = $_POST['member_id'];
    
    #echo " O usuário logado é: <b>".$user_name."</b><br /><br /><br />";
    #echo $task_title.'<br />'.$note.'<br />'.$deadline.'<br />'.$sched_time.'<br />'.$status.'<br />'.$archived.'<br />'.$member_id.'<br />'.'<br />';


    /* CONEXAO COM DB */ 
    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link));    
    $sql = "INSERT INTO task(title, note, priority, begin, deadline, scheduled_time, status, archived, member_id) VALUES('$task_title', '$note', '$priority', '$begin', '$deadline', '$sched_time', '$sched_time', '$status', '$member_id')";
    $result = $link->query($sql);
    
    mysqli_close($link);

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=dashboard.php" />';

?>