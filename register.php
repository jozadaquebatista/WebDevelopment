<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    
    echo $username."<br />";
    echo $passwd."<br />";
    echo $email."<br />"."<br />";

    //conection: 
    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link));    
    $sql = "INSERT INTO member(nickname, email, username, password, salt, auto_login, time_zone, date_format_us, creation_date, expiration_date, last_login_date, last_login_address, last_change_date, visits, bad_access, activation, enabled) VALUES('$username', '$email', '$username', '$passwd', '12345677', '213213', 1, 'Asia/Bangkok', 0, '2010-06-11 01:30:00', '0000-00-00', '0000-00-00 00:00:00', '127.0.0.1', '0000-00-00 00:00:00', 0, 0, 1)";
    $result = $link->query($sql);
    
    mysqli_close($link);

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=dash.php" />';

?>