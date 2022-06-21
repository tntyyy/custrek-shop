<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custrek. / all items</title>
  <link rel="shortcut icon" href="../img/giphy.gif" type="image/gif">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pages/admin.css">
</head>

<?php
include('connect.php');

if (isset($_POST['addProduct'])) {
  $title = $_POST['title'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $description = $_POST['description'];
  $img = $_POST['image'];
  $error = '';

  $addQuery = "INSERT INTO products (title, price, size, description, img)
        VALUES ('$title', '$price', '$size', '$description', '$img')";

  if (empty($title) or empty($price) or empty($size) or empty($description) or empty($img)) {
    $error = '<p class="error">Заполните все поля!</p>';
  }

  if ($error === '') {
    if (!empty($link)) {
      $link->query($addQuery);

      echo '<script>document.location.href="?page=admin"</script>';
    }
  }
}

?>

<body>
  <?php
  echo $error;
  ?>
  <section class="admin">
    <div class="container">
      <div class="section-title">
        <div class="line"></div>
        <h1>admin panel<span>.</span></h1>
      </div>
      <div class="admin-wrapper">
        <form name="addProduct" method="post" enctype="multipart/form-data">
          <div class="image">
            <input type="text" name="image" placeholder="image name">
          </div>
          <div class="left-section">
            <input name="title" type="text" placeholder="title">
            <input name="price" type="number" placeholder="price">
            <input name="size" type="number" placeholder="size">
            <button name="addProduct" type="submit" class="button">add</button>
          </div>
          <div class="right-section">
            <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="../headerFix.js"></script>
</body>

</html>