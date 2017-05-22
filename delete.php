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

$query = $db->prepare("DELETE FROM member WHERE id = :id");
$result = $query->execute([ "id" => $_GET['id'],]);
  if($result){
    echo "Successfully";
  }else{
    echo "Delete fail!";
  }


 ?>
<a href="index.php">กลับหน้าหลัก</a>

  </body>
</html>
