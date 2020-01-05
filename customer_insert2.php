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

 $b = $_REQUEST['cId'];
 $pname = $_REQUEST['email'];
 $aname = $_REQUEST['cName'];
 $year = $_REQUEST['phone'];
 $title = $_REQUEST['address'];
 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
  $sql = "INSERT INTO customer(Cid,email,cName,phone,address) VALUES ('$b','$pname','$aname','$year','$title')";
  $result = $conn->query($sql) or die('MySQL insert error');
  echo "記錄已經插入" ;
  ?><p></p>
  <p><a href="index.php">回首頁</p></a>
    
</body>
</html>