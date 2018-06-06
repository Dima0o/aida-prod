<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Главаная</title>
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Modernizr-->


    <!--      ADD GOOGLE ANALYTICS HERE            -->


</head>
<!-- Body-->
<body>
<!-- Shop Filters Modal-->
<div class="modal fade" id="modalShopFilters" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Shop Filters</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- Widget Categories-->
                <section class="widget widget-categories">
                    <h3 class="widget-title">Shop Categories</h3>
                    <ul id="widget-categories">

                    </ul>
                </section>
                <!-- Widget Price Range-->
                <section class="widget">
                    <h3 class="widget-title">Price Range</h3>
                    <select class="form-control">
                        <option>0 - $100</option>
                        <option>$100 - $200</option>
                        <option>$200 - $500</option>
                        <option>$500 - $1000</option>
                        <option>$1000 - $5000</option>
                    </select>
                </section>
                <!-- Widget Brand Filter-->
                <section class="widget">
                    <h3 class="widget-title">Filter by Brand</h3>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="adidas">
                        <label class="custom-control-label" for="adidas">Adidas&nbsp;<span class="text-muted">(254)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="bilabong">
                        <label class="custom-control-label" for="bilabong">Bilabong&nbsp;<span class="text-muted">(39)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="klein">
                        <label class="custom-control-label" for="klein">Calvin Klein&nbsp;<span class="text-muted">(128)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="nike">
                        <label class="custom-control-label" for="nike">Nike&nbsp;<span class="text-muted">(310)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="bahama">
                        <label class="custom-control-label" for="bahama">Tommy Bahama&nbsp;<span class="text-muted">(42)</span></label>
                    </div>
                </section>
                <!-- Widget Size Filter-->
                <section class="widget">
                    <h3 class="widget-title">Filter by Size</h3>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="xl">
                        <label class="custom-control-label" for="xl">XL&nbsp;<span class="text-muted">(208)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="l">
                        <label class="custom-control-label" for="l">L&nbsp;<span class="text-muted">(311)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="m">
                        <label class="custom-control-label" for="m">M&nbsp;<span class="text-muted">(485)</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="s">
                        <label class="custom-control-label" for="s">S&nbsp;<span class="text-muted">(213)</span></label>
                    </div>
                </section>
                <!-- Promo Banner-->
                <section class="promo-box" style="background-image: url(img/banners/01.jpg);">
                    <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                    <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                        <h4 class="text-light text-thin text-shadow">Рекламная запись</h4>
                        <h3 class="text-bold text-light text-shadow">Горячий сыр</h3><a class="btn btn-sm btn-warning" href="#">Shop Now</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Topbar-->
<div class="topbar">
    <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@tshop.com"><i class="icon-mail"></i>&nbsp; support@tshop.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
    </div>
    <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
            <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="img/flags/GB.png"></span><span class="currency">$ USD</span></div>
            <div class="dropdown-menu">
                <div class="currency-select">
                    <select class="form-control form-control-rounded form-control-sm">
                        <option value="usd">$ USD</option>
                        <option value="usd">€ EUR</option>
                        <option value="usd">£ UKP</option>
                        <option value="usd">¥ JPY</option>
                    </select>
                </div><a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="img/flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="index.html"><img src="http://aidaset.ru/wp-content/themes/Aida%20Template%20Mark%201/images/vacancyAida.png" alt="tshop"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul id="header-main">
            <li class="has-megamenu"><a href="index.html"><span>Home</span></a></li>
            <li class="active"><a href="shop-grid-ls.html"><span>Shop</span></a></li>
            <li class="active"><a href="about.html"><span>About</span></a></li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html">My Profile</a></li>
                        <li><a href="account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html">Wishlist</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
                    </ul>
                </div>
                <div id="cart" class="cart">
                    <a href="cart.html"></a><i class="icon-bag"></i><span id="count" class="count">3</span><span
                        id="subtotal"   class="subtotal">Рублеей 00</span>
                    <div class="toolbar-dropdown" id="card-list">
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/01.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/02.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/03.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><span class="text-lg">Total:</span></div>
                            <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>
                            <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Title-->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>Shop Grid Left Sidebar</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Shop Grid Left Sidebar</li>
                </ul>
            </div>
        </div>
    </div>