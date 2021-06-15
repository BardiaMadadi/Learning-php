<?php
$hostname = 'localhost';
$username = 'root';
$pwd = '';
$database = 'api';
$conn = mysqli_connect($hostname, $username, $pwd, $database);

function INSERT($conn,$value_2, $value_3, $value_4)
{
    mysqli_query($conn, "INSERT INTO `users`(`u_name`, `u_mail`, `u_phonenumber`) VALUES ('$value_2','$value_3','$value_4')");
}
