<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custrek. / all items</title>
  <link rel="shortcut icon" href="../img/giphy.gif" type="image/gif">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pages/user.css">
</head>

<body>
  <section class="user">
    <div class="container">
      <?php
      include('connect.php');
      if ($_COOKIE['user'] != '') :

        $email = $_COOKIE['user'];
        $request = "SELECT * FROM users WHERE email = '$email'";
        $orderRequest = "SELECT * FROM orders WHERE userEmail = '$email'";
        if (isset($link)) {
          $result = $link->query($request);
          $resultArray = $result->fetch_assoc();

          $ordersResult = $link->query($orderRequest);
          $ordersArray = $ordersResult->fetch_assoc();
        }
      ?>
        <div class="user-pic">
          <img src="img/defaultUserPic.png" alt="Avatar" class="user-photo">
          <p><?= $resultArray['name'] ?></p>
        </div>
        <div class="orders-wrapper">
          <div class="order-title">
            <div class="line"></div>
            <h2>orders</h2>
          </div>
          <div class="orders">
            <?php if (count($ordersArray) === 0) :
            ?>
              <div class="no-order">
                <p>you don't have any orders yet</p>
              </div>
              <?
              ?>
              <?php else :
              while ($ordersArrayWhile = $ordersResult->fetch_assoc()) {
              ?>
                <div class="order">
                  <p><?= $ordersArrayWhile['productTitle'] ?></p>
                  <p><?= $ordersArrayWhile['productPrice'] ?> $</p>
                </div>
              <?
              }
              ?>
            <?php endif; ?>
          </div>
        </div>
    </div>
    </div>
  </section>
<?php else :
        echo '<script>document.location.href="?page=login"</script>';
?>
<?php endif; ?>
<script src="../headerFix.js"></script>
</body>

</html>