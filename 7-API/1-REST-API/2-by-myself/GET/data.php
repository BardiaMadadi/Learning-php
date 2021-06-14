<?php
function Get_info($product_name)
{
    $products = [
        "Pen" => [
            "price" => 20,
            "Name" => "Pen"
        ]
        ,
        "Book" => [
            "price" => 200,
            "Name" => "Book"
        ]
    ];
        foreach ($products[$product_name] as $product_item) {
            if($product_name == $product_item["name"]){
                return $product_item;
                break;
            }
        }
    
}
