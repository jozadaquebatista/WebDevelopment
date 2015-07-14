<?php 
/* ABRE A CONEXÃO */
$link = mysqli_connect("localhost","jbatista","134679","trynixne_spotit") or die("Error ".mysqli_error($link)); 

/* CONSULTA */ 
$query = "SELECT * FROM member" or die("Error in the consult.." . mysqli_error($link));

/* EXECUTA A QUERY */ 
$result = $link->query($query);

/* MOSTRA A INFORMAÇÃO */
while($row = mysqli_fetch_array($result)) {
  echo 
  "<table border='1' style='border:1px; width: 100%;'>
    <tr>
      <td>".$row[0]."</td>
      <td>".$row[1]."</td>
      <td>".$row[2]."</td>
      <td>".$row[3]."</td>
      <td>".$row[4]."</td>
      <td>".$row[5]."</td>
      <td>".$row[6]."</td>
      <td>".$row[7]."</td>
    </tr>
  </table>";
} 

mysqli_close($link);

?>
