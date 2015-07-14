<?php
  session_start();
  require_once "config.php"
  if(!isset($_SESSION['user_session']) && !isset($_SESSION['pwd_session'])){

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Login::</title>
	<style>
	  body { background: url(../../galery/login4.jpg) no-repeat center center fixed; }
	  #meuid { opacity: 1; }
	</style>
    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>
    
    <div class="container">
    		<p><br/></p>
  		<div class="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
  				<div class="panel panel-default" id="meuid">
  					<div class="panel-body">
    						<div class="page-header">
  							<h2>Login</h2>
						</div>
						<form role="form" action="login.php" method="POST">
  							<div class="form-group">
    								<label for="">Email</label>
    								<div class="input-group">
  									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  									<input type="email" class="form-control" placeholder="Insira o email"  name="email" />
								</div>
  							</div>
  							<div class="form-group">
    								<label for="exampleInputPassword1">Senha</label>
    								<div class="input-group">
  									<span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></span>
  									<input type="password" class="form-control" placeholder="Senha" name="passwd" />
								</div>
  							</div>
  							<hr/>
  							<!--<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button>-->
  							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-lock"></span> Login</button>
							<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-down"></span>Sign in</button>
  							<p><br/></p>
						</form>
  					</div>
				</div>
			  <div class="col-md-4"></div>
  			</div>
		</div>
    </div>
	<footer style="text-align: center; margin: 45% 0 0 0; color: white;"> &copy; - Anything Here. </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>


