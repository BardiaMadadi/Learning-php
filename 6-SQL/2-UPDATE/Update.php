<?php
if (isset($_POST['sub'])) {
    include_once './db.php';
    $Username = $_POST['username'];
    $Lastname = $_POST['lastname'];
    $pwd = $_POST['pwd'];
    $profile = '...';
    if ($conn) {
        mysqli_query($conn, "UPDATE `users` SET `Name`='$Username',`Lastname`='$Lastname',`pwd`='$pwd',`profile`='$profile' WHERE Name='$Username'");
        echo 'connect';
    } else {
    }
}
