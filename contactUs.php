<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = 'contactUs';

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
    
    <main>
    <div class="contact_us">
      <h1>Contact Us</h1>
    </div>
    <div class="container">
      <h2 class="h_contact">Get in touch with us</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="contact">
            
            <div class="contact_social">
              <p>
                <img src="./images/email.jpeg" alt="email">
                buysellify@gmail.com
              </p>
              <p>
                <img src="./images/telephone.jpeg" alt="telephone">
                +212 6054875913
              </p>
              <p>
                <img src="./images/facebook_black.jpeg" alt="feacbok">
                buysellify
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="formul">
            <form method="get" action="">
            <div class="row">
              <div class="col-6">
                <label for="nom">First Name</label>
                <input type="nom" name="nom" id="nom" required/>
              </div>
              <div class="col-6">
                <label for="prenom">Last Name</label>
              <input type="prenom" name="prenom" id="prenom" required/>
              </div>
             </div>
             <div class="email">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" required>
            </div>
            <div class="messag">
              <label for="message">Message</label>
              <textarea name="message" id="message" ></textarea> 
            </div>
            <button class="send">Send Message</button>
           </form> 
  
          </div>
        </div>
      </div>
    </div>
    
   
  </main>
    

    <?php include_once("./footer.php") ?>
    
    <?php include_once("./script.php"); ?>
</body>
</html>