<?php

    class ConexaoDB
    {

        private $address;
        private $login;
        private $passwd;
        private $dbname;

        function __construct($address, $login, $passwd, $dbname)
        {

            $this->address = address;
            $this->login = login;
            $this->passwd = passwd;
            $this->dbname = dbname;

            $con = new mysqli($this->address, $this->login, $this->passwd, $this->dbname) or die(mysqli_error($con));

            if( isset($con))
                echo "conectado!";
            else
                echo "não conectado!";


             return $con;            

        }


    }

    $con = new ConexaoDB( 'localhost', 'jbatista', '1346791', 'trynixne_spotit') or die(mysqli_connect_error($con));

?>
