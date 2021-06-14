<?php
function get_price($name)
{
    $products = [
        "book" => '20,000 tooman',
        "pen" => '100,000 tooman',
        "pencil" => '2,000 tooman'
    ];
    foreach ($products as $product => $price) {
        if ($product == $name) {
            return $price;
            break;
        }
    }
}
