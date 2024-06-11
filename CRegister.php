<?php
include('connect.php');
if (isset($_POST['submit'])) {

    $firstname = stripcslashes(strtolower($_POST['firstname']));
    $lastname = stripcslashes(strtolower($_POST['lastname']));
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $c_password = stripcslashes($_POST['c_password']);
    $phone = stripcslashes($_POST['phone']);
    $firstname  = htmlentities(mysqli_real_escape_string($conn, $_POST['firstname']));
    $lastname  = htmlentities(mysqli_real_escape_string($conn, $_POST['lastname']));
    $email  = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password  = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
    $phone  = htmlentities(mysqli_real_escape_string($conn, $_POST['phone']));
    $md5_pass = md5($password);


    if (empty($firstname)) {
        $firstname_error = "<p class='error' style='color: red;'>Enter your first name</p>";
        $err_s = 1;
    } elseif (strlen($firstname) < 2) {
        $firstname_error = "first name must be more than two characters";
        $err_s = 1;
    } elseif (filter_var($firstname, FILTER_VALIDATE_INT)) {
        $firstname_error = "firstname cannot be numbers";
        $err_s = 1;
    }


    if (empty($lastname)) {
        $lastname_error = "<p class='error' style ='color: red;'>Enter your last name</p>";
        $err_s = 1;
    } elseif (strlen($lastname) < 2) {
        $lastname_error = "Last name must be more than two characters";
        $err_s = 1;
    } elseif (filter_var($lastname, FILTER_VALIDATE_INT)) {
        $lastname_error = "lastname cannot be numbers";
        $err_s = 1;
    }


    if (empty($email)) {
        $email_error =  "<p class='error' style ='color: red;'>Email can not be empty</p>";
        $err_s = 1;
    }

    if ($password != $c_password) {
        $c_password_error = "<p class='error' style ='color: red;'>Password does not match</p>";
        $err_s = 1;
    }

    if (empty($password)) {
        $password_error = "<p class='error' style ='color: red;'>Password can not be empty</p>";
        $err_s = 1;
    }

    if (empty($phone)) {
        $phone_error = "<p class='error' style ='color: red;'>Phone number can not be empty</p>";
        $err_s = 1;
        include('customer-register.php');
    } else {
        if ($err_s == 0) {
            $sql = "INSERT INTO `customer` (`first-name` , `last-name` , `email` , `password` , `phone-number` ) 
            VALUES ('$firstname' , '$lastname' , '$email' , '$md5_pass' , '$phone')";
            mysqli_query($conn, $sql);
            header("location: customer-profile.html");
        } else {
            include('customer-register.php');
        }
    }
}
