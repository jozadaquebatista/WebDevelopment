<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Admin - Dashboard::</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    
        .row {
            -webkit-animation: mymove 1s; /* Chrome, Safari, Opera */
        }

        @-webkit-keyframes mymove {
            from {opacity: 0;}
            to {opacity: 1;}
        }
    
        textarea
        {
            resize: none;
            border: none;
            width:100%;
            height: 300px;
        }
        textarea:focus
        {
            outline: 0;
        }
    </style>
    
</head>

<body>

    <div id="wrapper">
        
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img style="max-width:20%; margin-top: -10px;" src="http://www.historypin.org/resources/avatars/200x200/avatar_1.png" />
                </a>
                <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?> - Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="tmp_panel.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="tmp_tasklist.php"><i class="fa fa-fw fa-bar-chart-o"></i> Task's List</a>
                    </li>
                    <li>
                        <a href="dash.php"><i class="fa fa-fw fa-table"></i> Layout 2</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin's Panel
                            <small>data access</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <b>Dashboard</b>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <a href="tmp_panel.php">Main</a>
                            </li>
                            <li>
                                <i class="fa fa-file"></i>  Task List
                            </li>
                        </ol>
                    </div>

                    <div class="col-md-8">
                    
                    
            <div class="panel panel-primary">
               <div class="panel-heading text-center">Registered Tasks</div>
                   <div class="panel-body">
                    <?php

                        /* ABRE A CONEXÃO COM O DB */ 
                        $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

                        /* CONSULTA */
                        $query = "SELECT task.id, member.nickname, task.title, task.note, task.priority FROM task, member WHERE task.member_id=member.id";

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

                                 # $priority == VARIAVEL PARA VERIFICAR A PRIORIDADE DA TAREFA de $row[3]

                                if($row[4] >= 1 && $row[4] <= 3)
                                    $priority = 'success';
                                elseif($row[4] >=4 && $row[4]<= 6)
                                    $priority = 'info';
                                elseif($row[4] >=7 && $row[4]<= 8)
                                    $priority = 'warning';
                                else
                                    $priority = 'danger';

                                # FIM VERIFICAÇÃO
                                echo ' 
                                    <tr class="text-'.$priority.'">
                                        <td>'.$row[1].'</td>
                                        <td>'.$row[2].'</td>
                                        <td style="color: black;">

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-'.$priority.' btn-xs" data-toggle="modal" data-target="#'.$row[1].'">
                                            <b>see more ...</b>
                                            </button>
                                            
                                            <!-- Button trigger delete -->
                                            <form role="form" method="POST" action="tmp_tasklist.php" style="float: right;">
                                                <button type="submit" class="btn btn-default btn-xs pull-right" name="delete" value="'.$row[0].'"'.$row[1].'">
                                                <b><span class="glyphicon glyphicon-trash" /></b>
                                                </button>
                                            </form>
                                            <form method="POST" action="edit.php">
                                            <!-- Modal Dialog -->
                                            <div class="modal fade" id="'.$row[1].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"> Task for: '.$row[1].'</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <br /><br />
                                                    <b>task description</b>
                                                    <br /><textarea style="text-indent: 10%;" name="note" placeholder="'.$row[3].'">'.$row[3].'</textarea><br />
                                                          <input type="hidden" value="'.$row[0].'" name="id" />
                                                    <br /><br />
                                                    <b>priority</b>
                                                    <br /><p style="text-indent: 10%;">'.$row[4].'</p><br />
                                                  </div>
                                                  <div class="modal-footer">
                                                    <input type="submit" class="btn btn-primary" value="OK" />
                                                    <!--<input type="submit" class="btn btn-primary" data-dismiss="modal" value="OK" />-->
                                                    </form>
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
                        
                        if($_POST['delete'])
                        {
                            $link->query('DELETE FROM task WHERE task.id='.$_POST['delete'].'');
                            $_POST['delete'] = NULL;
                            for($i=0;$i<2;$i++) echo '<meta HTTP-EQUIV="REFRESH" content="0; url=tmp_tasklist.php" />'; # atualiza tela
                            unset($i);
                        }

                        mysqli_close($link); # FECHA A CONEXAO COM O DB

                    ?>
                    </div>
               
                </div>
                
                <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <b>YOU'D LIKE SOME HELP?!</b>
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <ul>
                                    <li class="text-success">Green Rows: Priority 1 - 3<br /></li>
                                    <li class="text-info">Blue Rows: Priority &nbsp;&nbsp;&nbsp;4 - 6<br /></li>
                                    <li class="text-warning">Yellow Rows: Priority 7 - 8<br /></li>
                                    <li class="text-danger">Red Rows: Priority &nbsp;&nbsp;&nbsp;&nbsp;9 - 10<br /></li>
                                    <li>Delete a task&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" /></li>
                            </ul>
                        </div>
                    </div>      
                
                <?php for($i=0; $i < 15; $i++)
                            echo "<br />";
                ?>
            </div>

        </div>
                    
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
