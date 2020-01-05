<?php
require_once 'cart_link.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html {
            font-size: 14px;
      }
    @media (min-width: 768px) {
        html {
            font-size: 16px;
        }
    }

    .container {
        max-width: 960px;
    }

    .pricing-header {
        max-width: 700px;
    }

    .card-deck .card {
        min-width: 220px;
    }
   </style>
  

  <?php
      
       $datas = array();

       $sql = "SELECT * FROM `book`;";
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
  
  
  <body>
  
    <?php if(!empty($datas)):?>
        <?php foreach($datas as $key => $row):?>
            <form method="POST" action="cart_add.php">
            <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">物品名稱 : <?php echo $row['title']; ?></h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                        價格 :<input name="price" value="<?php echo $row['price'];?>"  ></h1>
                        <input type="hidden" name="bookISBN" value="<?php echo $row['bookISBN'];?>" >
                        <input class="card-text" type="number" name="Quantity" placeholder="數量">
                        <input class="card-text" type="submit" class="btn btn-lg btn-block btn-outline-primary" value="加入購物車">
                    </div>
                </div>
            </div>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
    <?php endif; ?>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
