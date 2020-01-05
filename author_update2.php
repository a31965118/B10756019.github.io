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
 $aname = $_REQUEST['authorName'];
 $add = $_REQUEST['authorAddress'];
 $gender = $_REQUEST['gender'];
 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
 $sql = "UPDATE author Set Aid = '$a', authorName = '$aname', authorAddress='$add', gender = '$gender' WHERE Aid = '$a'";
  $result = $conn->query($sql) or die('MySQL update error');
  echo "已修改!" ;
  ?><p></p>
  <p><a href="index.php">回首頁</p></a>
    
</body>
</html>