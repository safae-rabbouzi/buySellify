<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = 'aboutUs';
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
  include_once("./nav.php"); ?>

  <main id="about_us">
    <div class="about_us">
      <h1>About Us</h1>
    </div>
    <div class="container">
      <h2>Who We Are</h2>
      <p>
        Welcome to <b>buysellify</b>!
      </p>
      <p>
        Discover an extraordinary collection of clothing for men and women, along with stunning jewelry. Embrace your
        unique style with our carefully curated pieces, designed for quality, comfort, and trendsetting fashion.
      </p>
      <p>
        Enjoy a seamless shopping experience and exceptional customer service as you explore our diverse selection.
        Start your fashion journey with us today and let us be your go-to destination for stylish clothing and exquisite
        jewelry.

      </p>
      <button class="about_product"><a href="./shop.html">SEE OUR PRODUCTS</a></button>
    </div>
  </main>



  <?php include_once("./footer.php") ?>

  <?php include_once("./script.php"); ?>
</body>

</html>