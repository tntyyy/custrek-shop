<?php
    include ('../connect.php');

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if (mb_strlen($password) < 5 ||  mb_strlen($password) > 25) {
        echo "invalid password length";
        exit();
    } elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "invalid name length";
        exit();
    }

    $password = md5($password."saltmegacream");

    if (isset($link)) {
        $request = "INSERT INTO users (name, email, password, role)
                    VALUES ('$name', '$email', '$password', '1')";
        $link->query($request);

    header('Location: /custrek/?');
}