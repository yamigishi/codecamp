<?php
	// $compteur = $dbh->query("UPDATE `cw_medias_movies` SET nb_entrees = nb_entrees+1 WHERE ID=1");}
	// $compteur->setFetchMode(PDO::FETCH_OBJ);
	//header("Location: untitled.php");//
echo "test";

$moviesTitleList = $dbh->query("SELECT nb_entrees FROM cw_medias_movies WHERE id = 1");
$moviesTitleList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesTitleList->fetch()) {
	$nb = $result->nb_entrees;
	echo $nb . " devient ";
	$nb++;
	echo $nb;
}

$moviesTitleList->closeCursor();
// $update = $dbh->prepare("UPDATE cw_medias_movies "
// 	. "SET nb_entrees = :nb "
// 	. "WHERE id = 1");
// $update->bindParam(":id", $_POST["id"]);
// $update->bindParam(":nb", $nb);
// $update->execute();
?>