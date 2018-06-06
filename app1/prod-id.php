<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118308905-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118308905-1');
    </script>
    <meta charset="utf-8">
    <title>Trilogy Shop
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>

    <!--      ADD GOOGLE ANALYTICS HERE            -->

</head>
<!-- Body-->

<body>
<!-- Topbar-->
<div class="topbar">
    <div class="topbar-column">
        <a class="hidden-md-down" href="mailto:support@tshop.com">
            <i class="icon-mail"></i>&nbsp; support@tshop.com</a>
        <a class="hidden-md-down" href="tel:00331697720">
            <i class="icon-bell"></i>&nbsp; 00 33 169 7720</a>
        <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-facebook"></i>
        </a>
        <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-twitter"></i>
        </a>
        <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-instagram"></i>
        </a>
        <a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank">
            <i class="socicon-pinterest"></i>
        </a>
    </div>
    <div class="topbar-column">
        <a class="hidden-md-down" href="#">
            <i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
            <div class="lang-currency-switcher dropdown-toggle">
          <span class="language">
            <img alt="English" src="img/flags/GB.png">
          </span>
                <span class="currency">$ USD</span>
            </div>
            <div class="dropdown-menu">
                <div class="currency-select">
                    <select class="form-control form-control-rounded form-control-sm">
                        <option value="usd">$ USD</option>
                        <option value="usd">€ EUR</option>
                        <option value="usd">£ UKP</option>
                        <option value="usd">¥ JPY</option>
                    </select>
                </div>
                <a class="dropdown-item" href="#">
                    <img src="img/flags/FR.png" alt="Français">Français</a>
                <a class="dropdown-item" href="#">
                    <img src="img/flags/DE.png" alt="Deutsch">Deutsch</a>
                <a class="dropdown-item" href="#">
                    <img src="img/flags/IT.png" alt="Italiano">Italiano</a>
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
        <div class="search-tools">
            <span class="clear-search">Clear</span>
            <span class="close-search">
          <i class="icon-cross"></i>
        </span>
        </div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)-->
            <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)-->
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo-->
            <a class="site-logo" href="index.html">
                <img src="img/logo/logo.png" alt="tshop">
            </a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu">
                <a href="index.html">
                    <span>Home</span>
                </a>
            </li>
            <li class="active">
                <a href="shop-grid-ls.html">
                    <span>Shop</span>
                </a>
            </li>
            <li class="active">
                <a href="about.html">
                    <span>About</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search">
                    <i class="icon-search"></i>
                </div>
                <div class="account">
                    <a href="account-orders.html"></a>
                    <i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava">
                                <img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Daniel Adams</h6>
                                <span class="text-xs text-muted">290 Reward points</span>
                            </div>
                        </li>
                        <li>
                            <a href="account-profile.html">My Profile</a>
                        </li>
                        <li>
                            <a href="account-orders.html">Orders List</a>
                        </li>
                        <li>
                            <a href="account-wishlist.html">Wishlist</a>
                        </li>
                        <li class="sub-menu-separator"></li>
                        <li>
                            <a href="#">
                                <i class="icon-unlock"></i>Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="cart">
                    <a href="cart.html"></a>
                    <i class="icon-bag"></i>
                    <span class="count">3</span>
                    <span class="subtotal">$289.68</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item">
                <span class="dropdown-product-remove">
                  <i class="icon-cross"></i>
                </span>
                            <a class="dropdown-product-thumb" href="shop-single.html">
                                <img src="img/cart-dropdown/01.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a>
                                <span class="dropdown-product-details">1 x $43.90</span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                <span class="dropdown-product-remove">
                  <i class="icon-cross"></i>
                </span>
                            <a class="dropdown-product-thumb" href="shop-single.html">
                                <img src="img/cart-dropdown/02.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a>
                                <span class="dropdown-product-details">2 x $24.89</span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                <span class="dropdown-product-remove">
                  <i class="icon-cross"></i>
                </span>
                            <a class="dropdown-product-thumb" href="shop-single.html">
                                <img src="img/cart-dropdown/03.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a>
                                <span class="dropdown-product-details">1 x $200.00</span>
                            </div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column">
                                <span class="text-lg">Total:</span>
                            </div>
                            <div class="column text-right">
                                <span class="text-lg text-medium">$289.68&nbsp;</span>
                            </div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a>
                            </div>
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a>
                            </div>
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
                <h1>Single Product</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>
                        <a href="shop-grid-ls.html">Shop</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Single Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery">
                    <span class="product-badge text-danger">30% Off</span>
                    <div class="gallery-wrapper">
                        <div class="gallery-item active">
                            <a href="img/shop/single/01.jpg" data-hash="one" data-size="1000x667"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="img/shop/single/02.jpg" data-hash="two" data-size="1000x667"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="img/shop/single/03.jpg" data-hash="three" data-size="1000x667"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="img/shop/single/04.jpg" data-hash="four" data-size="1000x667"></a>
                        </div>
                        <div class="gallery-item">
                            <a href="img/shop/single/05.jpg" data-hash="five" data-size="1000x667"></a>
                        </div>
                    </div>
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one">
                            <img src="img/shop/single/01.jpg" alt="Product">
                        </div>
                        <div data-hash="two">
                            <img src="img/shop/single/02.jpg" alt="Product">
                        </div>
                        <div data-hash="three">
                            <img src="img/shop/single/03.jpg" alt="Product">
                        </div>
                        <div data-hash="four">
                            <img src="img/shop/single/04.jpg" alt="Product">
                        </div>
                        <div data-hash="five">
                            <img src="img/shop/single/05.jpg" alt="Product">
                        </div>
                    </div>
                    <ul class="product-thumbnails">
                        <li class="active">
                            <a href="#one">
                                <img src="img/shop/single/th01.jpg" alt="Product">
                            </a>
                        </li>
                        <li>
                            <a href="#two">
                                <img src="img/shop/single/th02.jpg" alt="Product">
                            </a>
                        </li>
                        <li>
                            <a href="#three">
                                <img src="img/shop/single/th03.jpg" alt="Product">
                            </a>
                        </li>
                        <li>
                            <a href="#four">
                                <img src="img/shop/single/th04.jpg" alt="Product">
                            </a>
                        </li>
                        <li>
                            <a href="#five">
                                <img src="img/shop/single/th05.jpg" alt="Product">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star"></i>
                </div>
                <span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                <h2 class="padding-top-1x text-normal">Reebok Royal CL Jogger 2</h2>
                <span class="h2 d-block">
            <del class="text-muted text-normal">$68.00</del>&nbsp; $47.60</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus quos ea dolore rem, molestias laudantium
                    et explicabo assumenda fugiat deserunt in, facilis laborum excepturi aliquid nobis ipsam deleniti aut? Aliquid
                    sit hic id velit qui fuga nemo suscipit obcaecati. Officia nisi quaerat minus nulla saepe aperiam sint possimus
                    magni veniam provident.</p>
                <div class="row margin-top-1x">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="size">Men's size</label>
                            <select class="form-control" id="size">
                                <option>Chooze size</option>
                                <option>11.5</option>
                                <option>11</option>
                                <option>10.5</option>
                                <option>10</option>
                                <option>9.5</option>
                                <option>9</option>
                                <option>8.5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="color">Choose color</label>
                            <select class="form-control" id="color">
                                <option>White/Red/Blue</option>
                                <option>Black/Orange/Green</option>
                                <option>Gray/Purple/White</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <select class="form-control" id="quantity">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="pt-1 mb-2">
                    <span class="text-medium">SKU:</span> #21457832</div>
                <div class="padding-bottom-1x mb-2">
                    <span class="text-medium">Categories:&nbsp;</span>
                    <a class="navi-link" href="#">Men’s shoes,</a>
                    <a class="navi-link" href="#"> Snickers,</a>
                    <a class="navi-link" href="#"> Sport shoes</a>
                </div>
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="entry-share mt-2 mb-2">
                        <span class="text-muted">Share:</span>
                        <div class="share-links">
                            <a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="socicon-twitter"></i>
                            </a>
                            <a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
                                <i class="socicon-instagram"></i>
                            </a>
                            <a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top"
                               title="Google +">
                                <i class="socicon-googleplus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">
                            <i class="icon-bag"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tabs-->
        <div class="row padding-top-3x mb-3">
            <div class="col-lg-10 offset-lg-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#description" data-toggle="tab" role="tab">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews" data-toggle="tab" role="tab">Reviews (3)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error blanditiis a, deserunt magnam pariatur quam
                            suscipit quae. Veniam, deserunt reprehenderit quasi hic recusandae itaque omnis fugiat animi architecto facilis
                            repellendus. Commodi dolorem, eius consectetur. Amet maiores nemo at nobi s aspernatur velit, sequi odio,
                            a veritatis inventore autem esse provident in? Placeat, sunt!</p>
                        <p class="mb-30">Iste assumenda, vitae, aliquam excepturi libero quia ullam quisquam tenetur id sint labore. Pariatur praesentium
                            velit, fugit facere maxime voluptates optio qui? Quidem obcaecati necessitatibus rem aspernatur, mollitia,
                            assumenda explicabo numquam minus eos sapiente totam dicta, laborum dolorum! Vitae distinctio quos non ut
                            fugiat.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/B81qd2v6alw?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava">
                                <img src="img/reviews/01.jpg" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">Average quality for the price</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars">
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                                    atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                                    sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                <div class="comment-footer">
                                    <span class="comment-meta">Francis Burton</span>
                                </div>
                            </div>
                        </div>
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava">
                                <img src="img/reviews/02.jpg" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">My husband love his new...</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars">
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.</p>
                                <div class="comment-footer">
                                    <span class="comment-meta">Maggie Scott</span>
                                </div>
                            </div>
                        </div>
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava">
                                <img src="img/reviews/03.jpg" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">Soft, comfortable, quite durable...</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars">
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star filled"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                    magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <div class="comment-footer">
                                    <span class="comment-meta">Jacob Hammond</span>
                                </div>
                            </div>
                        </div>
                        <!-- Review Form-->
                        <h5 class="mb-30 padding-top-1x">Leave Review</h5>
                        <form class="row" method="post">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_name">Your Name</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_email">Your Email</label>
                                    <input class="form-control form-control-rounded" type="email" id="review_email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_subject">Subject</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_subject" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="review_rating">Rating</label>
                                    <select class="form-control form-control-rounded" id="review_rating">
                                        <option>5 Stars</option>
                                        <option>4 Stars</option>
                                        <option>3 Stars</option>
                                        <option>2 Stars</option>
                                        <option>1 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="review_text">Review </label>
                                    <textarea class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-outline-primary" type="submit">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">22% Off</div>
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/09.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Rocket Dog</a>
                    </h3>
                    <h4 class="product-price">
                        <del>$44.95</del>$34.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star"></i>
                    </div>
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/03.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Oakley Kickback</a>
                    </h3>
                    <h4 class="product-price">$155.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/12.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Vented Straw Fedora</a>
                    </h3>
                    <h4 class="product-price">$49.50</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/11.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Top-Sider Fathom</a>
                    </h3>
                    <h4 class="product-price">$90.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/04.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Waist Leather Belt</a>
                    </h3>
                    <h4 class="product-price">$47.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">50% Off</div>
                    <a class="product-thumb" href="shop-single.html">
                        <img src="img/shop/products/01.jpg" alt="Product">
                    </a>
                    <h3 class="product-title">
                        <a href="shop-single.html">Unionbay Park</a>
                    </h3>
                    <h4 class="product-price">
                        <del>$99.99</del>$49.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">Get In Touch With Us</h3>
                        <p class="text-white">Phone: 00 33 169 7720</p>
                        <ul class="list-unstyled text-sm text-white">
                            <li>
                                <span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                            <li>
                                <span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                        </ul>
                        <p>
                            <a class="navi-link-light" href="#">support@tshop.com</a>
                        </p>
                        <a class="social-button shape-circle sb-facebook sb-light-skin" href="#">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a class="social-button shape-circle sb-twitter sb-light-skin" href="#">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a class="social-button shape-circle sb-instagram sb-light-skin" href="#">
                            <i class="socicon-instagram"></i>
                        </a>
                        <a class="social-button shape-circle sb-google-plus sb-light-skin" href="#">
                            <i class="socicon-googleplus"></i>
                        </a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Mobile App Buttons-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">Our Mobile App</h3>
                        <a class="market-button apple-button mb-light-skin" href="#">
                            <span class="mb-subtitle">Download on the</span>
                            <span class="mb-title">App Store</span>
                        </a>
                        <a class="market-button google-button mb-light-skin" href="#">
                            <span class="mb-subtitle">Download on the</span>
                            <span class="mb-title">Google Play</span>
                        </a>
                        <a class="market-button windows-button mb-light-skin" href="#">
                            <span class="mb-subtitle">Download on the</span>
                            <span class="mb-title">Windows Store</span>
                        </a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- About Us-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">About Us</h3>
                        <ul>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">About tshop</a>
                            </li>
                            <li>
                                <a href="#">Our Story</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Our Blog</a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Account / Shipping Info-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">Account &amp; Shipping Info</h3>
                        <ul>
                            <li>
                                <a href="#">Your Account</a>
                            </li>
                            <li>
                                <a href="#">Shipping Rates & Policies</a>
                            </li>
                            <li>
                                <a href="#">Refunds & Replacements</a>
                            </li>
                            <li>
                                <a href="#">Taxes</a>
                            </li>
                            <li>
                                <a href="#">Delivery Info</a>
                            </li>
                            <li>
                                <a href="#">Affiliate Program</a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
            <hr class="hr-light mt-2 margin-bottom-2x">
            <div class="row">
                <div class="col-md-7 padding-bottom-1x">
                    <!-- Payment Methods-->
                    <div class="margin-bottom-1x" style="max-width: 615px;">
                        <img src="img/payment_methods.png" alt="Payment Methods">
                    </div>
                </div>
                <div class="col-md-5 padding-bottom-1x">
                    <div class="margin-top-1x hidden-md-up"></div>
                    <!--Subscription-->
                    <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544"
                          method="post" target="_blank" novalidate>
                        <div class="clearfix">
                            <div class="input-group input-light">
                                <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail">
                                <span class="input-group-addon">
                    <i class="icon-mail"></i>
                  </span>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                            </div>
                            <button class="btn btn-primary" type="submit">
                                <i class="icon-check"></i>
                            </button>
                        </div>
                        <span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Photoswipe container-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- Backdrop-->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="http://code.jquery.com/ui/1.11.0-beta.1/jquery-ui.js" integrity="sha256-q5raG0xmu2guatVMnFCPiZAbKKY5ZX0Wq0Uvar+qN78=" crossorigin="anonymous"></script>
<script src="js/global.js"></script>
<script src="js/catalog.js"></script>
<script src="js/aida_global.js"></script>
<script>
    categoru_list();
    Catalog_bild();
    Menu();
    Card_Bild();
    //поиск  и  глобальный кнонстуркор функци и классов
</script>

<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="js/vendor.min.js"></script>
<script src="js/scripts.min.js"></script>
<!-- Customizer scripts-->
<script src="customizer/customizer.min.js"></script>
</body>

</html>
