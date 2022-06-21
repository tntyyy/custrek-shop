<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>custek. / sign</title>
  <link rel="shortcut icon" href="../img/giphy.gif" type="image/gif">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="pages/login.css">
</head>

<body>
  <section class="login">
    <div class="container">
      <?php
      if ($_COOKIE['user'] == '') :
      ?>
        <div class="login-left">
          <div class="section-title">
            <div class="line"></div>
            <h1>login</h1>
          </div>
          <form action="vendor/signin.php" method="POST" name="login" class="log">
            <input id="loginEmail" name="email" type="email" class="inp-fb" placeholder="email">
            <input id="loginPassword" name="password" type="password" class="inp-fb" placeholder="password">
            <button id="loginButton" class="button">login</button>
          </form>
        </div>
        <div class="vertical-line"></div>
        <div class="login-right">
          <div class="section-title">
            <div class="line"></div>
            <h1>register</h1>
          </div>
          <form action="vendor/signup.php" method="POST" name="register" class="reg">
            <input id="registerName" name="name" type="text" class="inp-fb" placeholder="name">
            <input id="registerEmail" name="email" type="email" class="inp-fb" placeholder="email">
            <input id="registerPassword" name="password" type="password" class="inp-fb" placeholder="password">
            <button id="registerButton" name="register" type="submit" class="button">register</button>
            <p class="msg">
            </p>
          </form>
        </div>
    </div>
  <?php else :
        echo '<script>document.location.href="?"</script>';
  ?>
  <?php endif; ?>
  </section>
  <script src="../headerFix.js"></script>
</body>

</html>