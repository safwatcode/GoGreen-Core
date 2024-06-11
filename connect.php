<?php
$conn = mysqli_connect('localhost', 'root', '', 'ShattablyDB');
if (!$conn) {
    die("Error Connecting to Database" . mysqli_connect_error());
}
