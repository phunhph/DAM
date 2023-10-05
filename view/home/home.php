<?php
require_once 'view/globle/head.php';
require_once 'view/globle/slideshow.php';
?>
<section class="product-tabs section-padding position-relative wow fadeIn animated">
    <div class="bg-square"></div>
    <div class="container">
        <div class="tab-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">
                        <a href="index.php?controller=home?product=laptop"> Laptop</a>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">
                        <a href="index.php?controller=home?product=phone">Điện thoại</a>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                        <a href="index.php?controller=home?product=phukien">Phụ kiện</a>
                    </button>
                </li>
            </ul>
        </div>

</section>
<?php require_once 'view/globle/footer.php';
