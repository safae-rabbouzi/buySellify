<?php include_once("./c_variables.php"); ?>

<div class="categories">
      <div class="container">
        <h2>Our Categories</h2>
        <div class="cards">
          <a href="./shop.php?cat=Men" data-aos="fade-up" data-aos-duration="1000">
          <div class="card">
            <div class="img" style="background : url('./images/cl_2.jpg'); background-size: cover;"></div>
            <div class="card-body">
              <h5 class="card-title">Men</h5>
              <p class="card-text">
                (<?php echo count($menProducts); ?> items)
              </p>
            </div>
          </div>
          </a>
          <a href="./shop.php?cat=women" data-aos="fade-up" data-aos-duration="2000">
          <div class="card">
            <div class="img" style="background : url('./images/cl_7.jpg'); background-size: cover;"></div>
            <div class="card-body">
              <h5 class="card-title">Women</h5>
              <p class="card-text">
                (<?php echo count($womenProducts); ?> items)
              </p>
            </div>
          </div>
          </a>
          <a href="./shop.php?cat=Jewelery" data-aos="fade-up" data-aos-duration="3000">
          <div class="card">
            <div class="img" style="background : url('./images/jw_1.jpg'); background-size: cover;"></div>
            <div class="card-body">
              <h5 class="card-title">jewelery</h5>
              <p class="card-text">
                (<?php echo count($jeweleryProducts); ?> items)
              </p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>