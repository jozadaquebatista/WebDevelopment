<?php
	
	class ConectionDB
	{
		private $address;
		private $username;
		private $userpass;
		private $dbname;
		
		public $link;
				
		public function conecta( $address, $username, $userpass, $dbname )
		{
	
			$this->address = $address;
			$this->username = $username;
			$this->userpass = $userpass;
			$this->dbname = $dbname;
			
			echo '<b>Conectado!</b><br />';
			echo $this->address . '<br />';
			echo $this->username . '<br />';
			echo $this->userpass . '<br />';
			echo $this->dbname . '<br />';
			echo '<br />';
			
			$link = mysqli_connect( $this->address, $this->username, $this->userpass, $this->dbname ) or die(mysqli_error($link));

			return $link;

		}
		
		public function consulta()
		{
			
			/* ABRE A CONEXÃO COM O DB */ 
			$link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

			/* CONSULTA */
			$query = "SELECT * FROM members" or die("Error in the consult.." . mysqli_error($link));

			/* EXECUTA A QUERY */ 
			$result = $link->query($query);

			/* MOSTRA A INFORMAÇÃO */
			echo '
				<table class="table <!--table-hover--> table-condensed">';
			echo '
				<thead>
			  		<th>Ip</th>
			  		<th>Port</th>
				</thead>
				<tbody>';
			
			while($row = mysqli_fetch_array($result)) {
			echo '
			  <tr>
				<td>'.$row[0].'</td>
				<td>'.$row[1].'</td>
			  </tr>';
			} 
			echo '
				</tbody>
			</table>';
					  
			mysqli_close($link); # FECHA A CONEXAO COM O DB
		}
	}
	
	
	$conection = new ConectionDB();
	$conection->conecta('127.0.0.1', 'jbatista', '134679', 'trynixne_spotit');
	
	$conection->consulta();	
	
	if(isset($conection))
		echo 'conectado com o banco de dados.';
	else
		echo 'não conectado com o banco de dados.';
		
?>