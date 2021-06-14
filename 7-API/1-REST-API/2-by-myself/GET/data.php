<?php
function Get_info($name)
{
    $products = [
        "pen"=>[
            "name" => "pen",
            "price" => "10"
        ],
        "book"=>[
            "name" => "book",
            "price" => "100"
        ],
        "pc"=>[
            "name" => "pc",
            "price" => "100,000"
        ],
        "bag"=>[
            "name" => "bag",
            "price" => "100"
        ],
        "SSD"=>[
            "name" => "SSD",
            "price" => "1,000"
        ],
        "HDD"=>[
            "name" => "HDD",
            "price" => "10,000"
        ],
    ];
    $items['name'] = $products[$name]["name"];
    $items['price'] = $products[$name]["price"];
    return $items;
}
