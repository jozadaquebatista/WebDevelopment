<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Login::</title>
    <link href=css/bootstrap.min.css rel=stylesheet media=screen>
  </head>
  <style>
    body { background: url(galery/gradient.jpg) no-repeat center center fixed; }
    .tabbable { margin: 20% 30% 50px 30%;}
    #content { border: 1px; border-radius: 10px; padding: 5%; margin: 0 2% 0 2%; box-shadow: 0 0 20px #aaa; background-color: white; }
  </style>
  <body>
	<div class="navbar">
	  <div class="navbar-inner">
		<a class="brand" href="#"><?php $echo $_email; ?></a>
		<ul class="nav">
		  <li class="active"><a href="#">Início</a></li>
		  <li><a href="#">Configurações</a></li>
		  <li><a href="#">Sobre</a></li>
		  <li><a href="login.html">Logout</a></li>
		</ul>
	  </div>
	</div>
	<div id="content">
	<!-- ABAS -->
	<div class="tabbable"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#tab1" data-toggle="tab">Member</a></li>
	  <li><a href="#tab2" data-toggle="tab">Task</a></li>
	  <li><a href="#tab3" data-toggle="tab">Data Spyder</a></li>
	</ul>
	<div class="tab-content">
	  <div class="tab-pane active" id="tab1">
	    
		<form role="form" action="register.php">
		  <div class="form-group">
			<label for="">Usuário</label>
			  <div class="input-group">
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do Usuário" name="user_name" required />
				<label for="">E-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira o email" name="email" required />
				<label for="">Confirmar e-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Inserir novamente" name="c_email" required />
			  </div>
  	  		</div>
			<div class="form-group">
			  <label for="exampleInputPassword1">Senha</label>
				<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></span>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha para o usuário" name="passwd" required />
			</div>

  		</div>
  		<hr/>
		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-lock"></span>Cadatrar</button>
  		<p><br/></p>
		</form>
		
	  </div>
	  <div class="tab-pane" id="tab2">
		<p>Olá, estou na seção :D 2</p>
	  </div>
	  <div class="tab-pane" id="tab3">
		<p>Olá, estou na seção 3</p>
	  </div>
	</div>
	</div>
  
  </div>
	<script src=http://code.jquery.com/jquery-latest.js></script>
	<script src=js/bootstrap.min.js></script>
  </body>
</html>
