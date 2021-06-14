<?php
header("Content-Type:application/json");
require './data.php';
if (!empty($_GET["product"])) {
    $product_name = $_GET["product"];
    $info = Get_info($product_name);
    if (empty($info)) {
        response(400, "Product Not Found", NULL);
    } else {
        response(200, "Product Found",$info);
    }
} else {
    response(400, "Invalid Request", NULL);
}
function response($reponse_status, $status_msg,$data)
{
    header("HTTP/1.1 " . $status_msg);
    $response['status'] = $reponse_status;
    $response['msg'] = $status_msg;
    $response['data'] = $data;
    $json_response = json_encode($response);
    echo $json_response;
}
