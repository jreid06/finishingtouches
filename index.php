<?php

require_once __DIR__.'/scripts/config.php';

// get all products 
$options = [
    "status"=> 1,
    "limit"=> 10
];

$products = $DB->createCustomRequest('products', $options);

// var_dump($products['result']);

echo $twig->render('home.html.twig', array(
    "status"=>"connected",
    "products"=> $products['result'],
    "type"=> gettype($products['result'])
));