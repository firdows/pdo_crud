<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PDO & CRUD</title>
  </head>
  <body>

    <?php
    echo "Hello PDO";

     ?>
     <br/>
     <a href="create">สร้าง Member</a>

  </body>
</html>
