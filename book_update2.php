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

 $b1 = $_REQUEST['bookISBN'];
 $b2 = $_REQUEST['bookISBN'];
 $pname = $_REQUEST['publisherName'];
 $aname = $_REQUEST['authorName'];
 $year = $_REQUEST['year'];
 $title = $_REQUEST['title'];
 $price = $_REQUEST['price'];
 
 
 $conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
  
  
 $sql = "UPDATE book Set bookISBN = '$b1', publisherName = '$pname', authorName = '$aname', year='$year', title = '$title', price = '$price' WHERE bookISBN = '$b2'";
  $result = $conn->query($sql) or die('MySQL insert error');
  echo "已修改!" ;
  ?>
    
</body>
</html>