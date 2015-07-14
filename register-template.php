<?php
    
    $task_title = $_POST['task_title'];
    $note = $_POST['note'];
    $priority = $_POST['priority'];
    $member_id = $_POST['member_id'];
    $template_task_period = $_POST['template_tasks_period'];
    
    #echo " O usuário logado é: <b>".$user_name."</b><br /><br /><br />";
    #echo $task_title.'<br />'.$note.'<br />'.$deadline.'<br />'.$sched_time.'<br />'.$status.'<br />'.$archived.'<br />'.$member_id.'<br />'.'<br />';


    /* CONEXAO COM DB */ 
    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link));    
    $sql = "INSERT INTO task(title, note, priority, begin, deadline, scheduled_time, status, archived, member_id)"
            . "VALUES('$task_title', '$note', '$priority', '".date('Y-m-d')."', '".date('Y-m-d')."', '".date('H:m a')."', '1', '0', '$member_id')";
    
    for( $i=0; $i < $template_task_period; $i++)
    {
        $result = $link->query($sql) or die(mysqli_error($result));
    }
    
    
    mysqli_close($link);

    echo '<h1>CADASTRADO!</h1>';
    echo '<meta HTTP-EQUIV="REFRESH" content="3; url=tmp_panel.php" />';
    //header('Location: http://tmp_panel.php');

?>