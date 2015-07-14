<?php
 
    #echo hash('sha512', 'jozadaque batista');
    $encrypted = hash('sha512', 'jozadaque');

    ($encrypted == (hash('sha512', 'jozadaque'))) ? echo 'igual' : echo 'diff';
	
?>
