
<?php
include_once("./c_variables.php");
// print_r($allProducts[0]);
// echo 'arrayyyyy' .count($allProducts);
$random_numbers = array();

for ($i = 0; $i < 5; $i++) {
    $random_number = rand(0, count($allProducts));
    $random_numbers[] = $random_number;
}


?>

<div class="customersView">
    <h2>Customers Also Viewed</h2>
    <div class="products_section">
        <?php for($i=0;$i<5;$i++): ?>

        <a href="./product.php?id=<?php echo $allProducts[$random_numbers[$i]]['id'] ?>">
            <div class="card card_prod">
                <div class="img">
                    <img src="<?php echo $allProducts[$random_numbers[$i]]['img'] ?>" alt="">
                </div>
                <div class="description">
                    <h3>
                    <?php echo substr($allProducts[$random_numbers[$i]]['name'],0,15) ?>
                    </h3>
                    <p class="price">
                    <?php echo $allProducts[$random_numbers[$i]]['price'] ?>
                    </p>
                    <button class="btn-add">ADD TO CARD</button>
                </div>
            </div>

        </a>
        <?php endfor; ?>
    </div>
</div>