<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custrek.</title>
  <link rel="shortcut icon" href="./img/giphy.gif" type="image/gif">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  include('./header.php');

  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'allitems') {
      include('pages/allitems.php');
    }
    if ($_GET['page'] == 'item') {
      include('pages/item.php');
    }
    if ($_GET['page'] == 'admin') {
      include('pages/admin.php');
    }
    if ($_GET['page'] == 'login') {
      include('pages/login.php');
    }
    if ($_GET['page'] == 'user') {
      include('pages/user.php');
    }
  } else {
    include('./main.php');
  }
  ?>


  <? include('./footer.php'); ?>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
  <script src="headerFix.js"></script>
</body>

</html>