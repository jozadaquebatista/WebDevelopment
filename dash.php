<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
            <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>::Dashboard::</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	    <style>
                
	    	#content { margin: 0 2% 0 2%; }
                .row {
                    -webkit-animation: mymove 1s; /* Chrome, Safari, Opera */
                }
                
                @-webkit-keyframes mymove {
                    from {opacity: 0;}
                    to {opacity: 1;}
                }
	    </style>
	</head>

	<body>
            
            <?php require_once ('navbar.php'); ?> <!-- SHOW NAVBAR -->
            
            <div id="content">
                
            <div class="page-header">
                    <h1>Admin's Panel<small> acess data </small></h1>
            </div>
            <div class="row">
                
                <div class="col-md-6">

                    <?php require_once('tabs.php'); ?> <!-- SHOW TABS -->

                </div>

                <div class="col-md-6">

                    <?php require_once ('members.php'); ?> <!-- SHOW MEMBERS TABLE -->
                    
                </div>
                
           
            </div>
                
            </div>
            
            <hr />
            
            <footer style="text-align: center; font-weight: bolder;"> &copy; Admin - All Rights Reserved </footer>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
            
        </body>

</html>
</div>