<?php
include("php/includes/database.php");

if (isset($_POST["email"]) AND isset($_POST["password"]))

{

	$moviesCompleteList = $dbh->query('SELECT * FROM cw_human_resources_memberships WHERE email = "' . $_POST['email'] . '"  AND password = "' . $_POST["password"] .'"  ');
$moviesCompleteList->setFetchMode(PDO::FETCH_OBJ);
while ($result = $moviesCompleteList->fetch())
{
   $_SESSION['username'] = $result->username;
   $_SESSION['id'] = $result->id;
   $_SESSION['firstname'] = $result->firstname;
   $_SESSION['lastname'] = $result->lastname;
   $_SESSION['password'] = $result->password;
   $_SESSION['caddNumber'] = $result->cardNumber;
   $_SESSION['sex'] = $result->sex;
   $_SESSION['phoneHome'] = $result->phoneHome;
   $_SESSION['phoneMobile'] = $result->phoneMobile;
   $_SESSION['neighborhood'] = $result->neighborhood;
   $_SESSION['city'] = $result->city;
   $_SESSION['country'] = $result->country;
   $_SESSION['email'] = $result->email;
   $_SESSION['status'] = $result->status;
   $_SESSION['activity'] = $result->activity;
   $_SESSION['membership'] = $result->membership;
   $_SESSION['newsletter'] = $result->newsletter;
   $_SESSION['archive'] = $result->archive;


}

$moviesCompleteList->closeCursor(); 

	
header('Location:index.php');

}

?>