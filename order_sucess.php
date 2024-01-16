<?php 
    $active_page = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buysellify</title>
    <?php include_once("./style.php"); ?>
</head>
<body>
<?php
  include_once("./nav.php"); 
  include_once("./prod_nav.php");
  ?>
<div class="container">
      <div class="alert alert-dismissible fade show alert_succes" role="alert">
        Order confirmed succefelly 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    
    <div class="container">
      <div class="products_section">
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
        <div class="card card_prod">
          <div class="img">
            <img src="./images/cl_1.jpg" alt="">
          </div>
          <div class="description">
            <h3>
              awsome dress for...
            </h3>
            <p class="price">$82.5</p>
            <button class="btn-add">ADD TO CARD</button>
          </div>
        </div>
      </div>
    </div>
  <?php include_once("./footer.php") ?>

    <?php include_once("./script.php"); ?>
</body>
</html>