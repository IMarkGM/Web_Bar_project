<?php
require 'flight/Flight.php';

Flight::route('/products', function(){
  $data = [
    'view' => 'pages/products.php',
    'name' => array("Alkohol Mentes Italok","Alkoholos Italok","Hideg Italok","Meleg Italok","Rágcsák","Ételek"),
    'category' => array("Alcohol0","Alcohol1","Temper0","Temper1","Ragcsa","Etel")
  ];

  Flight::render('layout.php', $data);
});

Flight::route('/', function(){
  $data = [
    'view' => 'pages/main_info.php'
  ];

  Flight::render('layout.php', $data);
});

Flight::start();
?>