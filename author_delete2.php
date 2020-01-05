<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php  
 $dbhost = '127.0.0.1:3307';  
 $dbuser = 'root';  
 $dbpass = '';  
 $dbname = 'bookstore1';

 $a = $_REQUEST['Aid'];

 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
 $sql =   "DELETE FROM author Where Aid = '$a'";
  $result = $conn->query($sql) or die('MySQL insert error');
  echo "已刪除!" ;
  ?><p></p>
  <p><a href="index.php">回首頁</p></a>
    
</body>
</html>