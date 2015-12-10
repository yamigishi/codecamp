<?php session_start();
include("../admin/php/includes/database.php");
$moviesCompleteList = $dbh->query("SELECT * FROM cw_medias_movies WHERE archive = 'false'");
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   echo $result->country;
}
$moviesCompleteList->closeCursor();
                  
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
	<script src="test.js"></script>
	<table border="1" class="table table-striped">
   <tr>
      <th>Film</th>
      <th>Genre</th>
      <th>Duree</th>
      <th>Pays<th>
   </tr>
   <tr>
      <td>Mike</td>
      <td>Stuntman</td>
      <td>Cascadeur</td>
      <td><?php echo $result ?><td>
   </tr>
   <tr>
      <td>Mister</td>
      <td>Pink</td>
      <td>Gangster</td>
   </tr>
</table>
</body>
</html>