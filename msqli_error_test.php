<?php

error_reporting(0);

$con = new mysqli('localhost', 'jbatista', '134679', 'trynixne_spoti');

if($con->connect_errno){

	print_f("Alguma coisa deu errado: ", $con->mysqli_connect_error());
	die("houve um erro");

} ?>
