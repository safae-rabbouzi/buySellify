<?php
// Récupération des variables à l'aide du client MySQL
$usersStatement = $my_sql_client->prepare('SELECT * FROM e_com.users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

// print_r($users);


$allProductsstatment = $my_sql_client->prepare('SELECT * FROM e_com.products');
$allProductsstatment->execute();
$allProducts = $allProductsstatment->fetchAll();

$menStatment = $my_sql_client->prepare('SELECT * FROM e_com.products p WHERE p.categories = "Men"');
$menStatment->execute();
$menProducts = $menStatment->fetchAll();

$womenStatment = $my_sql_client->prepare('SELECT * FROM e_com.products p WHERE p.categories = "women"');
$womenStatment->execute();
$womenProducts = $womenStatment->fetchAll();

$jeweleryStatment = $my_sql_client->prepare('SELECT * FROM e_com.products p WHERE p.categories = "Jewelery"');
$jeweleryStatment->execute();
$jeweleryProducts = $jeweleryStatment->fetchAll();

?> 