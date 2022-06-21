<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custrek. / all items</title>
  <link rel="shortcut icon" href="../img/giphy.gif" type="image/gif">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pages/allitems.css">
</head>

<body>
  <section class="allitems">
    <div class="container allitems-container">
      <div class="section-title">
        <div class="line"></div>
        <h1>all items<span>.</span></h1>
      </div>
      <div class="allitems-wrapper">
        <?php
        include('connect.php');
        $query = "SELECT * FROM products";
        if (isset($link)) {
          $result = $link->query($query);
        }
        while ($products = $result->fetch_assoc()) {
        ?>
          <a href="?page=item&id=<?= $products['id'] ?>" class="all-link">
            <div class="all-item">
              <img src="img/<?= $products['img'] ?>.png" alt="Product">
              <div class="all-desc">
                <p><?= $products['title'] ?></p>
                <p><?= $products['price'] ?> $</p>
              </div>
            </div>
          </a>
        <? }
        ?>
      </div>
    </div>
  </section>
  <script src="../headerFix.js"></script>
</body>

</html>