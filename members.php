<div class="panel panel-primary">
    <div class="panel-heading text-center">This shows all registered users</div>
        <div class="panel-body">
            <h3 class="text-info text-center">Registered Users</h3><hr />
                
                <?php

                    /* ABRE A CONEXÃO COM O DB */ 
                    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

                    /* CONSULTA */
                    $query = "SELECT id, nickname, last_login_address FROM member ORDER BY id";

                    /* EXECUTA A QUERY */ 
                    $result = $link->query($query) or die("Error in the consult.." . mysqli_error($link));
                    
                    /* MOSTRA A INFORMAÇÃO */
                    echo '
                    <table class="table <!--table-hover--> table-condensed table-striped">';
                    echo '
                        <thead>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Last Login Address</th>
                            <th></th>
			</thead>
			<tbody>';
	
			while($row = mysqli_fetch_array($result)) {
                            
                            echo '
                                <tr>
                                    <td style="background-color: #ddd; color: #333 border-radius: 6px; text-align: center;">'.$row[0].'</td>
                                    <td>'.$row[1].'</td>
                                    <td>'.$row[2].'</td>
                                    <td><a style="cursor: pointer; text-decoration: none; font-weight: bolder;"><span class="label label-warning">See more ...</span></a></td>
                                </tr>';
			} 
                    echo '
                        </tbody>
                    </table>';
                    
                    mysqli_close($link); # FECHA A CONEXAO COM O DB

		?>

    <div class="panel-footer">Users's Register</div>
    </div><!--registered user-->
</div>
		