<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
            <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>::Tasklist::</title>
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
                
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    
                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <b>YOU'D LIKE SOME HELP?!</b>
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <ul>
                                    <li class="text-success">Green Rows: Priority 1 - 3<br /></li>
                                    <li class="text-info">Blue Rows: Priority 4 - 6<br /></li>
                                    <li class="text-warning">Yellow Rows: Priority 7 - 8<br /></li>
                                    <li class="text-danger">Red Rows: Priority 9 - 10<br /></li>                    
                            </ul>
                        </div>
                    </div><br /><br /><br />
 <div class="panel panel-default">
    <div class="panel-heading text-center">Task's list</div>
        <div class="panel-body">
                <?php

                    /* ABRE A CONEXÃO COM O DB */ 
                    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

                    /* CONSULTA */
                    $query = "SELECT member.nickname, task.title, task.note, task.priority from task, member where task.member_id=member.id";

                    /* EXECUTA A QUERY */ 
                    $result = $link->query($query) or die("Error in the consult.." . mysqli_error($link));

                    /* MOSTRA A INFORMAÇÃO */
                    echo '
                    <table class="table table-hover table-condensed">';
                    echo '
                        <thead>
                            <th>USERNAME    </th>
                            <th>TASK</th>
                            <th>DESC.</th>
			</thead>
			<tbody>';
	
			while($row = mysqli_fetch_array($result)) { #sucess, warning, danger
                            
                             // $priority == VARIAVEL PARA VERIFICAR A PRIORIDADE DA TAREFA de $row[3]
                            
                            if($row[3] >= 1 && $row[3] <= 3)
                                $priority = 'success';
                            elseif($row[3] >=4 && $row[3]<= 6)
                                $priority = 'info';
                            elseif($row[3] >=7 && $row[3]<= 8)
                                $priority = 'warning';
                            else
                                $priority = 'danger';
                            
                            // FIM VERIFICAÇÃO
                            
                            echo ' 
                                <tr class="text-'.$priority.'">
                                    <td>'.$row[0].'</td>
                                    <td>'.$row[1].'</td>
                                    <td style="color: black;">
                                    
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-'.$priority.' btn-xs pull-right" data-toggle="modal" data-target="#'.$row[0].'">
                                        <b>see more ...</b>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="'.$row[0].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">'.'Task for: '.$row[0].'</h4>
                                              </div>
                                              <div class="modal-body">
                                              <br /><br />
                                              <b>task description</b>
                                              <br /><p style="text-indent: 10%;">'.$row[2].'</p><br />
                                              <br /><br />
                                              <b>priority</b>
                                              <br /><p style="text-indent: 10%;">'.$row[3].'</p><br />                                              
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </td>
                                    
                                </tr>';
			} 
                    echo '
                        </tbody>
                    </table>';
                    
                    mysqli_close($link); # FECHA A CONEXAO COM O DB

		?>
                </div>
                
                <div class="col-md-4"></div>
            </div>
                
            </div>

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