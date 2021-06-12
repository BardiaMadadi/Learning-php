<?php
// if (isset($_POST['sub'])) {
    include_once './db.php';
    $Username = $_POST['username'];
    $Lastname = $_POST['lastname'];
    $pwd = $_POST['pwd'];
    $profile = '...';
    if ($conn) {
        mysqli_query($conn, "DELETE FROM `users` WHERE Name= '$Username' && Lastname='$Lastname'");
        echo 'connect';
    } else {
    }
// }
