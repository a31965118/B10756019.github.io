<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">

body{
	margin:0px;  
	height:100%;  

     }
#header{
     background-color: #94618E;
     color:#FFF;
     padding: 3px;
     }
#aside1{
     width: 300px;
     height: 810px;
     text-align: center;
     background-color: #63808F;
     padding:20px 10px;
     float: left;
     }
.page-main > aside {
    background-color:#63808F;
    width: 350px;
    height: 100%;
    top: 0;
    left: -350px;
    position: fixed;
}
#section{
     margin-top: 0;
	 padding-top: 0;
	 padding-right: 1em;
	 padding-bottom: 20px;
}
#div {
  width: 600px;
  height: 300px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -150px 0 0 -300px;
}
  </style>

  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body bgcolor="#F4DECB">
<header id="header">
  <h1 style="text-align:center;font-family:Microsoft JhengHei;font-size:54px">顧客資訊_修改</h1>
</header>
<div>
<table style="border:6px #82FFFF dashed;font-size:1cm;" cellpadding="10" border='1' align=center text-align=center>
<tr>
  <th>cId</th>
  <th>email</th>
  <th>cName</th>
  <th>phone</th>
  <th>address</th>
  </tr>
  
  
<?php
$dbhost = '127.0.0.1:3307';  
$dbuser = 'root';  
$dbpass = '';  
$dbname = 'bookstore1';


$conn = new mysqli("$dbhost","$dbuser","$dbpass","$dbname");


  $sql = "SELECT * from customer";
  $result = $conn->query($sql) or die('MySQL query error');
  if ($result->num_rows>0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["cId"] ."</td><td>". $row["email"] ."</td><td>" .$row["cName"]. "</td><td>" .$row["phone"]. "</td><td>" .$row["address"]. "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 result";
}
?>
</table>

</div>

<p>

<div align=center>
</table>
<form action="" name="form_b" method="Post">
<div align=center >
要修改的cId：<Input Type="text" Name="cId" style="background-color:pink;"><p>
</div>
<p></p>
<p></p>
<p>修改成:</p>
 cId：<Input Type="text" Name="cId"><p>
 email：<Input Type="text" Name="email"><p>
 cName：<Input Type="text" Name="cName"><p>
 phone：<Input Type="text" Name="phone"><p>
 address：<Input Type="text" Name="address"><p>
</form>

<input type="button" value="修改" type="submit" onclick="form_b.action='customer_update2.php';form_b.submit();"/><p></p>
<p><a href="index.php">回首頁</p></a>


</div>


</body>
</html>