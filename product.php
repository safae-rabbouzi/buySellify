
<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
?>

<?php 
//add comments to database

if(isset($_POST['ratingInput']) &&
  isset($_POST['review']) )
{
    
  $rating = $_POST['ratingInput'];
  $review = $_POST['review'];
  foreach($users as $user){
    if($user['name'] == $_SESSION['logger_user']){
        $user_id =  $user['id'];
    }
}
  //préparation
  $insert_user = $my_sql_client->prepare('INSERT INTO e_com.comments(user_id,product_id, comment_text,star) 
  VALUES(:user_id,:product_id, :comment_text,:star)');
  
  //execution
  $insert_user->execute([
      'product_id' => $_GET['id'],
      'comment_text' => $review,
      'star' => $rating,
      'user_id' => $user_id,
  ])or die(print_r($my_sql_client->errorInfo()));
  
  
}
?>

<?php 

//on récupére tous le contenu de la table
$product_sql = 'SELECT * FROM e_com.products p WHERE id = :id';
$product_statement = $my_sql_client->prepare($product_sql);
$product_statement->execute([
    'id' => $_GET['id'],
    ]
)or die(print_r($my_sql_client->errorInfo()));
$product = $product_statement->fetchAll();
?>

<?php 
$start_avg = 0;
//on récupére tous le contenu de la table
$start_sql = 'SELECT AVG(star) AS average_starts
              FROM e_com.comments c
              WHERE product_id = :id;';
$start_statement = $my_sql_client->prepare($start_sql);
$start_statement->execute([
    'id' => $_GET['id'],
    ]
)or die(print_r($my_sql_client->errorInfo()));
$start = $start_statement->fetchAll();
$start_avg =  $start[0]['average_starts'];
?>

<?php
//comments
$comments_sql = 'SELECT
                  u.name AS user_name, c.comment_text, c.star, DATE_FORMAT(c.date_t, "%d/%m/%Y") as date_comment
                  FROM e_com.users u
                  JOIN
                  e_com.comments c ON u.id = c.user_id
                  WHERE
                  c.product_id = :id;';
$comments_statement = $my_sql_client->prepare($comments_sql);
$comments_statement->execute([
    'id' => $_GET['id'],
    ]
)or die(print_r($my_sql_client->errorInfo()));
$comments = $comments_statement->fetchAll();

?>
<?php 
  function star_add($nb_star){
            for($i=0;$i<$nb_star;$i++){
              print('<img src="./images/star_active.png" alt="active start">');
            }
            for($i;$i<5;$i++){
              print('<img src="./images/star.png" alt="start">');
            }
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
    <div class="product">
      <div class="img" data-aos="fade-right" data-aos-duration="3000">
        <img src=<?php echo $product[0]['img'] ?> alt="">
      </div>
      <div class="content" data-aos="fade-left" data-aos-duration="3000">
        <div>
          <h2><?php echo $product[0]['name'] ?></h2>
          <div class="star">
            <?php star_add($start_avg) ?>
            
          </div>
        </div>

        <div class="desc">
          <?php echo $product[0]['description']; ?>
        </div>
        <div>
          <p class="price">$<?php echo $product[0]['price']; ?></p>
          <a href="./shopping_card.php?id_add=<?php echo $product[0]['id'] ?>">
            <button class="dark">ADD TO CARD</button>
          </a>
        </div>
        
      </div>
    </div>
    <hr />
    <div class="feadbacks">
      <h2>Customer Feedback</h2>
      <div class="comments">
        <?php if($comments) : ?>
        <?php foreach($comments as $comment): ?>
        <div class="feadback">
          <div class="content">
            <div class="img">
              <img src="./images/cl_8.jpg" alt="">
            </div>
            <div class="desc">
              <h3><?php echo $comment['user_name']; ?></h3>
              <div class="star">
                <?php star_add($comment['star']) ?>
              </div>
              <div class="comment">
                <p><?php echo $comment['comment_text']?></p>
              </div>
            </div>
          </div>
          <div class="time">
            <p><?php echo $comment['date_comment']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
          <h4>No reviews yet</h4>
        <?php endif; ?>
      </div>
    </div>

    <?php if(isset($_SESSION['logger_user'])):?>
    <div class="add_review">
      <h2>Add a review</h2>
      <p>Your email address will not be published. Required fields are marked *</p>
      <form action="./product.php?id=<?php echo $_GET['id']?>" method="POST">
        <div class="rating my-3">
          <p> Your rating *</p>
          <div class="star" id="start">
            <img id="star1" class="star_img"  src="./images/star_r.png">
            <img id="star2" class="star_img" src="./images/star_r.png">
            <img id="star3" class="star_img" src="./images/star_r.png">
            <img id="star4" class="star_img" src="./images/star_r.png">
            <img id="star5" class="star_img" src="./images/star_r.png">
          </div>
          <input type="text" name="ratingInput" id="ratingInput" class="d-none"/>
        </div>
        <div class="input my-3">
          <label for="review">Your review *</label>
          <textarea name="review" id="review" required></textarea>
        </div>
        <!-- <div class="input my-3 input_two">
          <div>
            <label for="name">Name *</label>
            <input type="text" name="name" id="name">
          </div>
          <div>
            <label for="email">email *</label>
            <input type="email" name="email" id="email">
          </div>
        </div> -->
        <button class="submit">Submit</button>
      </form>


    </div>
    <?php endif; ?>
    <hr>
    <!-- <div class="customersView">
      <h2>Customers Also Viewed</h2>
      <div class="products_section">
        <a href="./product.php">
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

        </a>
      </div>
    </div> -->
    <?php include_once("./customersView.php"); ?>
  </div>



  <?php include_once("./footer.php") ?>

  <?php include_once("./script.php"); ?>
</body>

</html>