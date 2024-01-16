<?php
include_once("./c_variables.php");
?>

<div class="container categorie_container">
    <div class="cat_title">
        <h2>Men</h2>
        <a href="./shop.php?cat=Men">More</a>
    </div>
    <div class="owl-carousel">
        <?php foreach ($menProducts as $prod): ?>
            <div  data-aos="fade-up" data-aos-duration="3000">
                <a href="./product.php?id=<?php echo $prod['id'] ?>">
                    <div class="card card_prod">
                        <div class="img">
                            <img src=<?php echo $prod['img'] ?> alt=<?php echo $prod['name'] ?> />
                        </div>
                        <div class="description">
                            <h3>
                                <?php echo substr($prod['name'], 0, 15) ?> ...
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
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="cat_title">
        <h2>Women</h2>
        <a href="./shop.php?cat=women">More</a>
    </div>
    <div class="owl-carousel">
        <?php foreach ($womenProducts as $prod): ?>
            <div  data-aos="fade-up" data-aos-duration="3000">
                <a href="./product.php?id=<?php echo $prod['id'] ?>">
                    <div class="card card_prod">
                        <div class="img">
                            <img src=<?php echo $prod['img'] ?> alt=<?php echo $prod['name'] ?> />
                        </div>
                        <div class="description">
                            <h3>
                                <?php echo substr($prod['name'], 0, 15) ?> ...
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
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cat_title">
        <h2>Jewelery</h2>
        <a href="./shop.php?cat=Jewelery">More</a>
    </div>
    <div class="owl-carousel">
        <?php foreach ($jeweleryProducts as $prod): ?>
            <div data-aos="fade-up" data-aos-duration="3000">
                <a href="./product.php?id=<?php echo $prod['id'] ?>">
                    <div class="card card_prod">
                        <div class="img">
                            <img src=<?php echo $prod['img'] ?> alt=<?php echo $prod['name'] ?> />
                        </div>
                        <div class="description">
                            <h3>
                                <?php echo substr($prod['name'], 0, 15) ?> ...
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
            </div>
        <?php endforeach; ?>
    </div>


</div>