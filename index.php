<?php
    $bg_images = array(
    0 => 'galery/login.jpg',
    1 => 'galery/login2.jpg',
    2 => 'galery/login3.jpg',
    3 => 'galery/login4.jpg',
    4 => 'galery/login5.jpg',
    5 => 'galery/login6.jpg',
    6 => 'galery/login7.jpg');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Member Login</title>
        
        <!-- Bootstrap -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style>

            body { background: url(<?php echo $bg_images[rand(0, 6)]; ?>) no-repeat center center fixed; }

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

        <div class="container">
            <p><br/></p>
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body" style="box-shadow: 0 0 80px white;">
                                <div class="page-header">
                                <h2 style="font-weight: bolder;">Login Area</h2>
                                </div>
                                <form role="form" action="dashboard.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd" required />
                                        </div>
                                    </div>
                                    <hr/>
                                    <button type="button" class="btn btn-default pull-left"><span class="glyphicon glyphicon-ok-circle"></span> Sign up</button>
                                    <button type="submit" class="btn btn-default pull-right"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                                    <p><br/></p>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
    </body>
</html>
