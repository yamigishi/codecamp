<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   echo $result->country . "\n";
}
$moviesCompleteList->closeCursor(); 

$test = $dbh->query("SELECT * from cw_medias_movies"); 
$test->setFetchMode(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
   <head>
	<title>Test</title>
	<link rel="stylesheet" href="chartist.min.css">
</head>
<body>
	<p id="test1" data-numberone="20, 60, 120" data-numbertwo="200, 180, 20" style="text-align:center">Nombre d'entrees</p>
	<div class="ct-chart"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="chartist.min.js"></script>
   <link rel="stylesheet" type="text/css" href="test.css"></link>
	<table class="tableau" align="center">
   <tr>
      <th>Film</th>
      <th>Genre</th>
      <th>Duree (en min)</th>
      <th>Pays/Continent<th>
   </tr>
   <?php
   while ($result = $test->fetch())
   {
      echo '<tr>
               <td>' . $result->title . '</td>
               <td>' . $result->genre . '</td>
               <td>' . $result->runningTime . '</td>
               <td>' . $result->country . '</td>
            </tr>';
   }
   $employeeStatusListAdd->closeCursor();
   ?>
   </table>
</body>
</html>