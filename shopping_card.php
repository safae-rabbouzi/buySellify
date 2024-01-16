<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
?>

<?php     
$active_page = '';
?>

<?php if(isset($_SESSION['logger_user'])): ?>

  <!-- get the user id -->
<?php 
foreach($users as $user){
  if($user['name'] === $_SESSION['logger_user']){
    $id_user = $user['id'];
  }
}
?>

<!-- update order ==> confirmed -->
<?php 
if(isset($_GET['id'])){
    $update_order = $my_sql_client->prepare('UPDATE e_com.orders SET confirmed = :confirmed WHERE id = :id');

$update_order->execute([
    'confirmed' => true,
    'id' =>$_GET['id']
    
]) or die(print_r($my_sql_client->errorInfo())) ;

}
?>

<!-- delete order -->

<?php 
if(isset($_GET['id_delete'])){
    $delete_order = $my_sql_client->prepare('DELETE FROM e_com.orders WHERE id = :id');

    $delete_order->execute([
        'id' => $_GET['id_delete'],
    ]) or die(print_r($my_sql_client->errorInfo()));
    
}

?>
<!-- ajout d'un order -->
<?php 

if(isset($_GET['id_add'])){
  //préparation
$insert_order = $my_sql_client->prepare('INSERT INTO e_com.orders(user_id,product_id) VALUES(:user_id, :product_id)');

//execution
$insert_order->execute([
    'user_id' => $id_user ,
    'product_id' => $_GET["id_add"],
])or die(print_r($my_sql_client->errorInfo()));

}
?>

<?php
//on récupére tous le contenu de la table
$person = $_SESSION['logger_user'];
$sql_query = 'SELECT * FROM e_com.orders WHERE user_id=(SELECT id FROM e_com.users WHERE name= :name) AND confirmed= :confirmed';
$orders_statement = $my_sql_client->prepare($sql_query);
$orders_statement->execute([
    'name' => $person,
    'confirmed' => false,
    ]
)or die(print_r($my_sql_client->errorInfo()));
$orders = $orders_statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <?php include_once("./style.php"); ?>
</head>
<body>
    <!-- navbar  -->
    <?php if(isset($_GET['id'])):  ?>
    <div class="container alert alert-dismissible fade show alert_succes" role="alert">
        Order confirmed succefelly 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
<?php endif; ?>
  <?php
  include_once("./nav.php"); 
  include_once("./prod_nav.php");
  ?>
  
    <div class="container shopping_card">
        <h1 class="h_order">Order Complete</h1>
        <div class="order">
            <?php foreach($orders as $order): ?>
                <?php foreach($allProducts as $product): ?>
                    <?php if($product['id'] === $order['product_id']) : ?>
             <div class="card card_prod">
                <div class="img">
                  <img src=<?php echo $product['img'] ?> alt="">
                </div>
                <div class="description">
                  <h3>
                  <?php echo (substr($product['name'], 0, 15))  ?>...
                  </h3>
                  <p class="price">
                  $<?php echo $product['price'] ?>
                  </p>
                  <button class="submit btn_order"><a href="./shopping_card.php?id=<?php echo $order['id']?>">Confirm Order</a></button>
                  <button class="submit btn_order btn_delete"><a href="./shopping_card.php?id_delete=<?php echo $order['id']?>">Delete Order</a></button>
                </div>
              </div>
              
              <?php endif; ?><?php endforeach; ?>
              <?php endforeach; ?>
            </div>
        
    </div>
    
    
  <?php include_once("./footer.php") ?>

    <?php include_once("./script.php"); ?>
</body>
</html>

<?php else: ?>

<?php include_once("./login.php"); ?>

<?php endif; ?>