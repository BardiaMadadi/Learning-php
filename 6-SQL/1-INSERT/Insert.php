<?php
include_once './db.php';
if ($conn) {
        mysqli_query($conn, "INSERT INTO `users`(`Name`,`Lastname`,`pwd`,`profile`) VALUES ('akbar','akbari','4321','...')");
    echo 'connect';
} else {

}
