
<nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbar-brand" href="./home.php">
        <img src="./images/logo_small.png" width="150" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item m-auto">
            <a class="nav-link <?php if($active_page === 'home') echo 'active' ?>" href="./home.php">Home</a>
        </li>
        <li class="nav-item m-auto">
            <a class="nav-link <?php if($active_page === 'shop') echo 'active' ?>" href="shop.php">Shop</a>
        </li>
        <li class="nav-item m-auto">
            <a class="nav-link <?php if($active_page === 'aboutUs') echo 'active' ?>" href="aboutUs.php">About Us</a>
        </li>
        <li class="nav-item m-auto">
            <a class="nav-link <?php if($active_page === 'contactUs') echo 'active' ?>" href="contactUs.php">Contact Us</a>
        </li>
        </ul>
        <div class="button">
            <a href="login.php" class="p-md-0 px-lg-4">
                <img src="./images/login.png" alt="">
                <?php echo (isset($_SESSION['logger_user'])) ? substr($_SESSION['logger_user'], 0, 10) : 'login'; ?>
                <!-- Login -->
            </a>
            <?php  if(isset($_SESSION['logger_user'])): ?>
            <a href="./shopping_card.php" class="p-md-0" >
                <img src="./images/shop.png" alt="">
                Shopping Cart
            </a>
            <?php endif; ?>
        </div>
    </div>
    </div>
</nav>


