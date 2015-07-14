<?php 

/* VARIÁVEIS PARA TESTE DE VALIDACAO */
$email = 'Administrador';
$passwd = '123';
  
$content_panel = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>::Login::</title>
    <link href=css/bootstrap.min.css rel=stylesheet media=screen />
	<style>
	  label { font-weight: bolder; }
	  body { background: url(galery/gradient.jpg) center center fixed; }
	  /*.tabbable { margin: 1% 30% 50px 30%;}*/
	  #content { border: 1px; border-radius: 10px; padding: 1%; margin: 0 1% 0 1%; box-shadow: 0 0 20px #aaa; background-color: white; }
	</style>
  </head>
  <body>
  
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<a class="brand" href="#">'.$email.'</a>
		<ul class="nav">
		  <li><a href="#">Data Spyder</a></li>
		  <li class="active"><a href="index.php">Logout</a></li>
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
	  	<div class="alert alert-info" role="alert"><b>Heads Up!</b> I this tab you\'ll be able to register some users to the tasks created. </div>
		<form role="form" method="POST" action="register.php">
		  <div class="form-group">
			<label for="">User</label>
			  <div class="input-group">
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do Usuário" name="user_name" required />
				<label for="">E-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira o email" name="email" required />
				<label for="">Confirm e-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Inserir novamente" name="c_email" required />
			  </div>
  	  		</div>
			<div class="form-group">
			  <label for="exampleInputPassword1">Password</label>
				<div class="input-group">
				<span class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></span>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha para o usuário" name="passwd" required />
			</div>
  		</div>
  		<hr/>
		<button type="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-lock">Register</span></button>
  		<p><br/></p>
		</form>
	  </div>
	  
		<div class="tab-pane" id="tab2">
		<div class="alert alert-info" role="alert"><b>Heads Up!</b> I this tab you\'ll be able to register the tasks.</div>
		  <form role="form" method="POST" action="register-task.php">
			<div class="form-group">
			  <label for="t_field">Title</label>
			  <div class="input-group">
			  <input type="text" class="form-control" id="t_field" placeholder="Task Title" name="task_title" required />
			  <label for="n_field">Note</label>
			  <textarea class="form-control" id ="n_field" rows="4" placeholder="Task ... " name="note" required ></textarea><hr />
			  <label for="">Priority</label>
			  <select class="form-control" id="priority" name="priority" required >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			  </select>
			  <label for="">Begin</label>
			  <input type="date" data-date-inline-picker="true" name="begin" required />
			  <label for="">Deadline</label>
			  <input type="date" data-date-inline-picker="true" name="deadline" required />
			  <label for="time">Schedule Time</label>
			  <input id="time" name="sched_time" type="time" />
			  <label for="status_field">Status</label>
			  <label class="radio-inline"><input type="radio" id="status_field" name="status" value="1" selected />Open</label>
			  <label class="radio-inline"><input type="radio" name="status"  value="0" />Closed</label><hr />
			  <label for="archived_field">Archived</label>
			  <label class="radio-inline"><input type="radio" id="archived_field" name="archived" value="1" />Yes</label>
			  <label class="radio-inline"><input type="radio" name="archived" value="0" />No</label><hr />
			  <label for="sel1">Member ID:</label>
			  <select class="form-control" id="sel1" name="member_id">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			  </select>
			</div><hr/>
			<input type="hidden" name="user_name" value="'.$email.'" />
			<input type="hidden" name="passwd" value="'.$passwd.'" />
			<button type="submit" class="btn btn-primary btn-lg btn-block" style="height: 40px;"><span class="glyphicon glyphicon-lock">Send</span></button>
			<p><br/></p>
		  </form>
		
	  </div>
    
	  <div class="tab-pane" id="tab3">
      <p>Olá, estou na seção 3</p>
	  </div>
	</div>
	</div>
  
  </div>
  
  <!-- TABLE
  <table border="2" style="width:100%; height: 30px;">
    <tr>
      <td>User</td>
      <td>Task Here</td>		
      <td>50</td>
    </tr>
  </table>-->
	<script src=http://code.jquery.com/jquery-latest.js></script>
	<script src=js/bootstrap.min.js></script>
  
  </body>
</html>';
  
  if(!empty($_POST['email'])== $email && !empty($_POST['passwd']) == $passwd)
  {
    echo $content_panel;
  } 
  else
  {
    echo "<html><h1>Senha ou login incorretos.</h1><br />Verifique se os dados estão corretos.</html>";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
  }
?>

<?php

  /* ABRE A CONEXÃO */ 
  $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

 /* CONSULTA */
  $query = "SELECT * FROM member" or die("Error in the consult.." . mysqli_error($link));

  /* EXECUTA A QUERY */ 
  $result = $link->query($query);

  /* MOSTRA A INFORMAÇÃO */
  echo "<table border=1 style='width:100%;''>";
  echo "
  <tr>
    <th colspan='3' style='font-size: 30px; height: 50px; border-left: none; background: linear-gradient(#445, black); color: white;'>Users</th>
  </tr>";
  echo "
  <tr style='background-color: #445; color: white;'>
    <th>Name</th>
    <th>E-mail</th>
    <th>Username</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "
    <tr>
      <td style='background-color: #F0F5F7; font-weight: bolder; text-align: center;'>".$row[1]."</td>
      <td>".$row[2]."</td>
      <td>".$row[3]."</td>
    </tr>";
    } 
    echo "</table>";
    mysqli_close($link); # FECHA A CONEXAO COM O DB
?>

