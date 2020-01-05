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

 $c = $_REQUEST['cId'];
 $email = $_REQUEST['email'];
 $cname = $_REQUEST['cName'];
 $phone = $_REQUEST['phone'];
 $address = $_REQUEST['address'];
 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
 $sql = "UPDATE customer Set cId = '$c', email = '$email', cName = '$cname', phone='$phone', address = '$address' WHERE cId = '$c'";
  $result = $conn->query($sql) or die('MySQL update error');
  echo "已修改!" ;
  ?><p></p>
  <p><a href="index.php">回首頁</p></a>
    
</body>
</html>