<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Member</title>
  </head>
  <body>

<?php

$query = $db->prepare("SELECT * FROM member WHERE id = :id");
$query->execute([ "id" => $_GET['id'],]);
if($query->rowCount() > 0){
  $row = $query->fetch(PDO::FETCH_ASSOC);
  echo "Your name = ".$row['firstname']."<br/>";
}else{
  echo "Record not found.";
}


 ?>


  </body>
</html>
