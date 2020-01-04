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

 $b = $_REQUEST['bookISBN'];

 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
 $sql =   "DELETE FROM book Where bookISBN = '$b'";
  $result = $conn->query($sql) or die('MySQL insert error');
  echo "已刪除!" ;
  ?>
    
</body>
</html>