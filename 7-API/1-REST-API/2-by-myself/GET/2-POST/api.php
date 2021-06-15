<?php
header("Content-Type:application/json");
require './db.php';
include_once "./db.php";
if ($conn) {
    if (isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['phonenumber'])) {
        $username = $_POST['username'];
        $mail = $_POST['mail'];
        $phonenumber = $_POST['phonenumber'];
        if (!empty($username) && !empty($mail) && !empty($phonenumber)) {
            INSERT(
                $conn,
                safe_input($username),
                safe_input($mail),
                safe_input($phonenumber)
            );
            response(200, " account created ", array(
                'username' => safe_input($username),
                'mail' => safe_input($mail),
                'pwd' => safe_input($phonenumber)
            )
        );
        } else {
            response(300, "inputs empty ", null);
        }
    } else {
        response(400, "inputs are not set ", null);
    }
} else {
    response(404, "Cant connect to Servers", null);
}
function safe_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);
    $response['status_msg'] = $status_message;
    $response['username'] = $data['username'];
    $response['mail'] = $data['mail'];
    $response['pwd'] = $data['pwd'];
    $json_response = json_encode($response);
    echo $json_response;
}
