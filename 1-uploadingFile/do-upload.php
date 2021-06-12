<?php

$profile = $_FILES['profile-pic'];

uploadfile($profile);

function uploadfile($image)
{
    //if image type is not png/jpeg/
    if ($image['type'] !== "image/png"  &&
        $image['type'] !== "image/jpeg" &&
        $image['type'] !== "image/jpg"
        ) {
        echo ' YOUR FILE IS SO NOT IMAGE / PNG / JPEG / JPG !';
    } else {

        if ($image['size'] > 8388608) {
            echo 'YoureFile Size Is Too Big';
        } else if (file_exists('uploads/' . $image['name'])) {
            echo 'fileexist';
        }else{
            move_uploaded_file($image['tmp_name'], 'uploads/' . $image['name']);
        }
    }
}
