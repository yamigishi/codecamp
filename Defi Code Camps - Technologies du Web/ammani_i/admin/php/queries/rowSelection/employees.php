<?php
$dataBaseHost = 'cl1-sql7';
$dataBaseName = 'trafalgar6';
$dataBaseUser = 'trafalgar6';
$dataBasePassword = 'etna';


$id = $_GET['id'];

try {
    $dbh = new PDO('mysql:host=' . $dataBaseHost . ';dbname=' . $dataBaseName, $dataBaseUser, $dataBasePassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $statement = $dbh->prepare("SELECT * FROM cw_human_resources_employees WHERE id =".$id."");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
     echo json_encode($results);

} catch (PDOException $e) {
    echo $e->getMessage();
    var_dump($e->getMessage());
}
