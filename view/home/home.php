<?php
require_once 'view/globle/head.php';
require_once 'view/globle/slideshow.php';
?>
<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="bg-square"></div>
    <div class="container">
        <div class="items">
            <?php
            if (isset($products) && is_array($products)) {
                foreach ($products as $product) {
            ?>
            <div class="item">
                <img src="assets/imgs/item/<?php echo $product->image; ?>" alt="image">
                <h4><?php echo $product->name; ?></h4>
                <p>Price: $<?php echo $product->price; ?></p>
                <p>Details: <?php echo $product->chitiet; ?></p>
            </div>
            <?php
                }
            } else {
                echo "Trống";
            }
            ?>
        </div>
</section>

<?php require_once 'view/globle/footer.php';