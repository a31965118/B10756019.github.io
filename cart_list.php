<?php
require_once 'cart_link.php';
?>

<?php
      
       $datas = array();

       $sql = "SELECT * FROM `shoppingbasket` WHERE cId = 10002 ;";
       $result = mysqli_query($link, $sql);
       if ($result)
       {
       if (mysqli_num_rows($result) > 0)
       {

       while ($row = mysqli_fetch_assoc($result))
       {
        $datas[] = $row;
        }
       }


       mysqli_free_result($result);
       }
       else
       {
       echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
       }
       if (!empty($datas))
       {
       }
       else
       {
              echo "查無 資料";
       }
       ?>
<!doctype html>
<html lang="en">
  <head>
    <title>cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="row mb-3">
  <?php if(!empty($datas)):?>
    <?php foreach($datas as $key => $row):?>
      <div class="col-6 themed-grid-col">單據編號: <?php echo $row['ShoppingBasket_Id']; ?></div>
    <div class="col-6 themed-grid-col">數量: <?php echo $row['Quantity']; ?></div>
    <div class="col-6 themed-grid-col">使用者: <?php echo $row['cId']; ?></div>
    <div class="col-6 themed-grid-col">物品: <?php echo $row['bookISBN']; ?></div>
    <div class="col-6 themed-grid-col">總價: <?php echo $row['account']; ?></div>
    
    <?php endforeach; ?>
  <?php else: ?>
  <?php endif; ?>
  </div>
  <p></p>
  <p></p>
  
  <form action="" name="form_b" method="Post">
  <div align=center >
  要刪除的編號：<Input Type="text" Name="ShoppingBasket_Id" style="background-color:pink;"><p>
  </div>
  <p></p>
  </form>
  
  <input type="button" value="刪除" type="submit" onclick="form_b.action='cart_delete.php';form_b.submit();"/>
  
  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>