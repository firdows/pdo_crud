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
     <a href="create.php">สร้าง Member</a>
     <br/>

     <table border='1'>
       <thead>
         <tr>
           <th>#</th>
           <th>ชื่อ-สกุล</th>
           <th>สถานะ</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody>
<?php
$query = $db->prepare("SELECT * FROM member");
$query->execute();//ประมวลผลคำสั่ง sql


if($query->rowCount() > 0){ #rowCount เช็คจำนวนแถวที่ได้มา
  while($row = $query->fetch(PDO::FETCH_ASSOC)){//ดึงข้อมูลแต่ละรอบใส่ใน $row
 ?>
         <tr>
           <td><?=$row['id']?></td>
           <td><?=$row['firstname'].' '.$row['lastname']?></td>
           <td><?=$row['status']?></td>
           <td>
            <a href="view.php?id=<?=$row['id']?>">ดู</a> |
            <a href="update.php?id=<?=$row['id']?>">แก้ไข</a> |
            <a href="delete.php?id=<?=$row['id']?>" onclick="return confirm('คุณแน่ใจที่จะลบมัน?');">ลบ</a>
           </td>
         </tr>
<?php
  }#while
}
?>
       </tbody>
     </table>

  </body>
</html>
