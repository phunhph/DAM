<head>
    <meta charset="utf-8" />
    <title>Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.ico" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.php?controller=home"><img src="assets/imgs/logo/logo.png" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-1">
                            <form action="index.php?controller=home" method="post">
                                <input type="search" name="search" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media" src="assets/imgs/theme/icons/icon-heart.svg" />
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="cart.html">
                                        <img alt="Surfside Media" src="assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="product-details.html"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4>
                                                        <a href="product-details.html">Daisy Casual Bag</a>
                                                    </h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="cart.html" class="outline">View cart</a>
                                                <a href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="index.php?controller=home">
                                <span class="fi-rs-apps"></span> Web-Shop
                            </a>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <!--  -->
                            <nav>
                                <ul>
                                    <li><a class="active" href="index.php?controller=home">Home </a></li>

                                    <li>
                                        <a href="#">Danh mục<i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($danhmucs) && is_array($danhmucs)) {
                                                foreach ($danhmucs as $danhmuc) {
                                            ?>
                                                    <li><a href="index.php?controller=product&product=<?php echo $danhmuc->name ?>"><?php echo $danhmuc->name ?></a>
                                                    </li>
                                            <?php
                                                }
                                            } else {
                                                echo "Trống";
                                            }
                                            ?>
                                            <!-- <li><a href="index.php?controller=product&product=laptop">Laptop</a></li>
                                            <li><a href="index.php?controller=product&product=phone">Điện thoại</a>
                                            </li>
                                            <li><a href="index.php?controller=product&product=phukien">Phụ kiện</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="index.php?controller=logout">Đăng xuất</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span><a href="index.php?controller=login&&act=''">user</a></span>
                        </p>
                    </div>
    </header>