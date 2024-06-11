<?php
session_start();
include('connect.php');
if (isset($_POST['email']) &&  isset($_POST['password'])) {
    $email    = stripcslashes(strtolower($_POST['email']));
    $pass_md5 = md5($_POST['password']);
    $username = filter_input(INPUT_POST, 'username');
    $password = stripcslashes(strtolower($_POST['password']));
    $customer_phone = stripcslashes(strtolower($_POST['customer-phone']));
    $email  = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password  = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
    $customer_phone  = htmlentities(mysqli_real_escape_string($conn, $_POST['customer-phone']));
}

if (empty($email)) {
    $email_error = "<p style = 'color: red;'> Enter your email</p>";
    $errors = 1;
}

if (empty($password)) {
    $password_error = "<p  style = 'color: red;'> Enter your password</p>";
    $errors = 1;
}
if (empty($customer_phone)) {
    $customer_phone_error = "<p  style = 'color: red;'> Enter your phone number</p>";
    $errors = 1;
    include('customer-sign-in.php');
}

if (!isset($errors)) {
    $sql = "SELECT `email` , `password` , `phone-number` FROM `customer` WHERE `email` = '$email' AND `password` = '$pass_md5' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $email && $row['password'] === $pass_md5 && $row['phone-number'] === $customer_phone) {
        header('Location: customer-profile.html');
        exit();
    } else {
        $erroremail = "Invaild Email or Password";
        include('customer-sign-in.php');
    }
}

// && $row['phone-number'] === $customer_phone