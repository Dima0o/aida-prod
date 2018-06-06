
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Products-->
            <div class="col-xl-9 col-lg-8 order-lg-2">
                <!-- Shop Toolbar-->
                <div  id="nav-bars" class="shop-toolbar padding-bottom-1x mb-2">
                    <div class="column">
                        <div class="shop-sorting">
                            <label for="sorting">Sort by:</label>
                            <select class="form-control" id="sorting">
                                <option>Popularity</option>
                                <option>Low - High Price</option>
                                <option>High - Low Price</option>
                                <option>Avarage Rating</option>
                                <option>A - Z Order</option>
                                <option>Z - A Order</option>
                            </select><span class="text-muted">Найденно:&nbsp;</span><span class="shop-col">1 - 12 items</span>
                        </div>
                    </div>
                    <div class="column">
                        <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div>
                    </div>
                </div>
                <!-- Products Grid-->
                <div class="isotope-grid cols-3 mb-2 row" id="catalog">
                    <!-- Product-->


                </div>
                <!-- Pagination-->
                <nav class="pagination">
                    <div class="column">
                        <ul class="pages">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">12</a></li>
                        </ul>
                    </div>
                    <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
                </nav>
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-3 col-lg-4 order-lg-1">
                <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopFilters"><i class="icon-layout"></i></button>
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">Shop Categories</h3>
                        <ul id="widget-categories-2">

                        </ul>
                    </section>
                    <!-- Widget Price Range-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">Price Range</h3>
                        <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                            <div class="ui-range-slider"></div>
                            <footer class="ui-range-slider-footer">
                                <div class="column">
                                    <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                                </div>
                                <div class="column">
                                    <div class="ui-range-values">
                                        <div class="ui-range-value-min">$<span></span>
                                            <input type="hidden">
                                        </div>&nbsp;-&nbsp;
                                        <div class="ui-range-value-max">$<span></span>
                                            <input type="hidden">
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </form>
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
                    <section class="promo-box" style="background-image: url(img/banners/02.jpg);">
                        <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                        <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                            <h4 class="text-light text-thin text-shadow">Рекламная запись</h4>
                            <h3 class="text-bold text-light text-shadow">Горячий сыр</h3><a class="btn btn-sm btn-warning" href="#">Пордробнее</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <!-- Site Footer-->
