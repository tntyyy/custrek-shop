<?php
    include ('../connect.php');

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."saltmegacream");

    if (isset($link)) {
        $request = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
        $result = $link->query($request);

        $user = $result -> fetch_assoc();

        if (count($user) == 0) {
            echo "user not found";
            exit();
        }

        setcookie('user', $user['email'], time() + 3600, "/");
    }

    header('Location: /custrek');