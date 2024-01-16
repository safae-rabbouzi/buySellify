<!-- <?php session_start(); ?> -->
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = 'shop';

?>

<?php
$cat = 'all';
if(isset($_GET['cat'])){
  $cat = $_GET['cat'];
}
$prods;
switch ($cat) {
    case "all":
        $prods = $allProducts;
        break;
    case "women":
        $prods = $womenProducts;
        break;
    case "Men":
        $prods = $menProducts;
        break;
    case "Jewelery":
      $prods = $jeweleryProducts;
      break;
    default:
        $prods = $allProducts;
        break;
}
?>

<?php 
if(isset($_GET['email'])){
  $insert_email = $my_sql_client->prepare('INSERT INTO e_com.join_email(email) VALUES(:email)');

//execution
$insert_email->execute([
    'email' => $_GET['email'] ,
])or die(print_r($my_sql_client->errorInfo()));

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include_once("./style.php"); ?>
</head>

<body>
  <!-- navbar  -->
  <?php
  include_once("./nav.php"); 
  include_once("./prod_nav.php");
  ?>

  <div class="container">
    <div class="products_section">
      <?php
      foreach ($prods as $prod): ?>
        <a href="./product.php?id=<?php echo $prod['id']?>" >
          <div class="card card_prod" data-aos="fade-up" data-aos-duration="3000">
            <div class="img">
              <img src=<?php echo $prod['img']?> alt=<?php echo $prod['name']?> />
            </div>
            <div class="description">
              <h3>
              <?php echo substr($prod['name'],0,15)?> ...
              </h3>
              <p class="price">
              $<?php echo $prod['price'] ?>
              </p>
              <a href="./shopping_card.php?id_add=<?php echo $prod['id'] ?>">
              <button class="btn-add">ADD TO CARD</button>
              </a>
              
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>


  <?php include_once("./footer.php") ?>

  <?php include_once("./script.php"); ?>
</body>

</html>