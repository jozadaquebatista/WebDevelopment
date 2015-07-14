<?php

    function Conection($address, $db_username, $db_passwd, $db_name)
    {
        
        $con = mysqli_connect($address, $db_username, $db_passwd, $db_name) or die(mysqli_error($con));
        
        return $con;
        
    }
    
    function Query($query)
    {
        
        $q = 
        
    }

?>