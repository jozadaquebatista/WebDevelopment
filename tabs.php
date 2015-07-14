<!--PANEL-->
<div class="panel panel-primary">
    <div class="panel-heading text-center">Register of members, tasks Registration, DataSpyder</div>
        <div class="panel-body">
            <h3 class="text-info text-center">Actions's Panel</h3><hr />
            <!--ABAS-->
                <ul class="nav nav-tabs" id="tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab"><b>Members</b></a></li>
                    <li><a href="#tab2" data-toggle="tab"><b>Tasks</b></a></li>
                    <li><a href="#tab3" data-toggle="tab"><b>DataSpyder</b></a></li>
                    <li><a href="#tab4" data-toggle="tab"><b>Template</b></a></li>
		</ul>
        <div class="tab-content">
            
            <div id="tab1" class="tab-pane active">
                <p>
                <div class="alert alert-info" role="alert"><b>Heads Up!</b> I this tab you'll be able to register some users to the tasks created. </div>
                
                    <form role="form" method="POST" action="register.php">
                        <div class="form-group">
                            <label for="nickname">Nickname</label>
                            <input type="text" class="form-control" id="nickname" name="username" placeholder="Member Nickname" required />
			</div>
			<div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Member e-mail" required />
			</div>
			<div class="form-group">
                            <label for="email">Confirm e-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Member e-mail" required />
			</div>
			<div class="form-group">	 
                            <label for="passwd">Password</label>
                            <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Member Password" required />
			</div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                    </form>
                </p>
            </div>
            
            <div id="tab2" class="tab-pane fade">
            <p>
            <div class="alert alert-info" role="alert"><b>Heads Up!</b> I this tab you'll be able to register the tasks.</div>
	  	
                <form role="form" method="POST" action="register-task.php">
                    <div class="form-group">
                        <label for="t_field">Title</label>
			<div class="input-group">
                            <input type="text" class="form-control" id="t_field" placeholder="Task Title" name="task_title" required />
				<label for="n_field">Note</label>
				<textarea class="form-control" id ="n_field" rows="4" cols="60" placeholder="Task description ... " name="note" required ></textarea><hr />
				<label for="">Priority</label>
				<select class="form-control" id="priority" name="priority" required >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
				</select><hr />
                                <label for="">Begin</label><br />
                                <input type="date" data-date-inline-picker="true" name="begin" required /><hr />
                                <label for="">Deadline</label><br />
				<input type="date" data-date-inline-picker="true" name="deadline" required /><hr />
				<label for="time">Schedule Time</label><br />
				<input id="time" name="sched_time" type="time" /><hr />
				<label for="status_field">Status</label><br />
				<label class="radio-inline"><input type="radio" id="status_field" name="status" value="1" selected />Open</label>
				<label class="radio-inline"><input type="radio" name="status"  value="0" />Closed</label><hr />
				<label for="archived_field">Archived</label><br />
				<label class="radio-inline"><input type="radio" id="archived_field" name="archived" value="1" />Yes</label>
				<label class="radio-inline"><input type="radio" name="archived" value="0" />No</label><hr />
				<label for="sel1">Member ID:</label>
				<select class="form-control" id="sel1" name="member_id">
                                <?php

                                    /* ABRE A CONEXÃO COM O DB */ 
                                    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

                                    /* CONSULTA */
                                    $query = "SELECT id FROM member";

                                    /* EXECUTA A QUERY */ 
                                    $result = $link->query($query) or die("Error in the consult.." . mysqli_error($link));

                                        while($row = mysqli_fetch_array($result)) {

                                            echo "<option>".$row[0]."</option>"; /* DEPOIS DE CONTAR AS LINHAS, MOSTRA OS ID's */
                                        }

                                    mysqli_close($link); # FECHA A CONEXAO COM O DB

                                ?>
                                </select>
                        </div>
                        <hr/>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
                    </div>
            </p>
            </div>

            <div id="tab3" class="tab-pane fade"> <!-- TAB DATASPYDER -->
            <p>

            <?php
            
            /* ABRE A CONEXÃO COM O DB */ 
            $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

            /* CONSULTA */
            $query = "SELECT * FROM dataspyder" or die("Error in the consult.." . mysqli_error($link));

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

            ?>
            </p>
            </div>
            
            <div id="tab4" class="tab-pane fade"> <!-- TEMPLATE -->
                
            <p>
            <div class="alert alert-info" role="alert"><b>Heads Up!</b> I this tab you'll be able to do something.</div>
	  	
            <form role="form" method="POST" action="register-template.php">
                    <div class="form-group">
                        <label for="t_field">Title</label>
			<div class="input-group">
                            <input type="text" class="form-control" id="t_field" placeholder="Task Title" name="task_title" required />
				<label for="n_field">Note</label>
				<textarea class="form-control" id ="n_field" rows="4" cols="60" placeholder="Task description ... " name="note" required ></textarea><hr />
				<label for="">Priority</label>
				<select class="form-control" id="priority" name="priority" required >
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
				</select><hr />
                                <label for="">Task Period</label>
				<select class="form-control" id="priority" name="template_tasks_period" required >
                                    <option value="7" selected>Daily - 7</option>
                                    <option value="4">Weekly - 4</option>
                                    <option value="1">Monthly - 30</option>
				</select>
                                <hr />
                                <label for="sel1">Member ID:</label>
				<select class="form-control" id="sel1" name="member_id">
                                <?php

                                    /* ABRE A CONEXÃO COM O DB */ 
                                    $link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error - Algo deu errado: ".mysqli_error($link)); 

                                    /* CONSULTA */
                                    $query = "SELECT id FROM member";

                                    /* EXECUTA A QUERY */ 
                                    $result = $link->query($query) or die("Error in the consult.." . mysqli_error($link));

                                        while($row = mysqli_fetch_array($result)) {

                                            echo "<option>".$row[0]."</option>"; /* DEPOIS DE CONTAR AS LINHAS, MOSTRA OS ID's */
                                        }

                                    mysqli_close($link); # FECHA A CONEXAO COM O DB

                                ?>
                                </select>
                        </div>
                        <hr/>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
                    </div>
            </p>

            </div>
    </div>
</div>
</div>