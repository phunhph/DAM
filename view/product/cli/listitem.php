<?php
require_once 'view/globle/head.php';
require_once 'view/globle/slideshow.php';
?>
<h3 style="margin-left: 6%;"><?php echo $_GET['product'] ?></h3>
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
                        <h4><a href="index.php?controller=product&act=item&id=<?php echo $product->id; ?>"><?php echo $product->name; ?></a>
                        </h4>
                        <p>Price: $<?php echo $product->price; ?></p>
                        <button id="mua">Xem thông tin</button>
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
