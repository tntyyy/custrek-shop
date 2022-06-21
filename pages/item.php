<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custrek.</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pages/item.css">
</head>

<body>
  <section class="product">
    <div class="container">
      <div class="product-wrapper">
        <?php
        include('connect.php');

        if (isset($link)) {
          if (isset($_GET['id'])) {
            $item_id = $_GET['id'];
            $query = "SELECT * FROM products WHERE id = '$item_id'";
            $result = $link->query($query);
            $item = $result->fetch_assoc();

            if (isset($_POST['order'])) {
              $userEmail = $_COOKIE['user'];
              $productTitle = $item['title'];
              $productPrice = $item['price'];

              $requestOrder = "INSERT INTO orders (userEmail, productTitle, productPrice)
                                        VALUES ('$userEmail', '$productTitle', '$productPrice')";
              $link->query($requestOrder);
              echo '<script>document.location.href="?page=user"</script>';
            }
          }
        }
        ?>
        <img src="img/<?= $item['img'] ?>.png" alt="Product">
        <div class="product-content">
          <div class="product-title">
            <div class="line"></div>
            <h2><?= $item['title'] ?></h2>
          </div>
          <div class="characthers">
            <div class="characthers-item">
              <p><span>size:</span></p>
              <p><?= $item['size'] ?> us</p>
            </div>
            <div class="characthers-item">
              <p><span>price:</span></p>
              <p><?= $item['price'] ?> $</p>
            </div>
          </div>
          <div class="product-description">
            <?= $item['description'] ?>
          </div>
          <form method="post">
            <button class="button" type="submit" name="order">buy</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>