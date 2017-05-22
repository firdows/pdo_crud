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
if(isset($_POST['submit'])){ #isset เช็คว่ามีอยู่จริงไหม
  $query = $db->prepare("INSERT INTO member (id, firstname, lastname, status) VALUES (NULL,:firstname, :lastname, :status);");

  $result = $query->execute([
    "firstname" => $_POST['firstname'],
    "lastname" => $_POST['lastname'],
    "status" => $_POST['status'],
  ]);

  if($result){
    echo "Successfully";
  }else{
    echo "Save fail!";
  }
}

?>
<form method="post">
  <label for="">Fistname</label>
  <input type="text" name="firstname" value=""><br/>

  <label for="">Lastname</label>
  <input type="text" name="lastname" value=""><br/>

  <label for="">Status</label>
  <select name="status">
    <option value='1'>Active</option>
    <option value='2'>Ban</option>
  </select><br/>

  <input type="submit" name="submit" value="บันทึก">
</form>


  </body>
</html>
