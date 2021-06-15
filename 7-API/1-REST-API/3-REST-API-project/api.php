<?php
header("Content-Type:application/json");
include_once './db.php';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $selected_record = mysqli_query($conn, "SELECT * FROM `users` WHERE `u_name` = '$username'");
    $record_item = mysqli_fetch_array($selected_record, MYSQLI_NUM);


    if (isset($record_item[0])) {


        if (!empty(safe_input($username))) {
            global $data;
            global $data;
            $data = array(
                $record_item[0],
                $record_item[1],
                $record_item[2],
                $record_item[3]
            );
            response(200, 'User found ', $data);
        }

    } else {
        response(400, 'No Content', null);
    }
} else {
    response(400, 'No Content', null);
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
    if(isset($data)){
        $response['id'] = $data[0];
        $response['username'] = $data[1];
        $response['mail'] = $data[2];
        $response['pwd'] = $data[3];
    }
    $json_response = json_encode($response);
    echo $json_response;
}
