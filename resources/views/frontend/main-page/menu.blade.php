<div class="verso-header  ">
    <!-- Top Bar -->
    <div class="verso-topbar verso-topbar-leftright">
        <div class="verso-topbar-inner">
            <div class="verso-topbar-container">
                <div class="verso-topbar-col">
                    <div id="text-1" class="verso-widget widget widget_text">
                        <div class="textwidget">
                            <p><i class="fa fa-phone"></i> &nbsp; 0918-993-459</p>
                        </div>
                    </div>
                </div>
                <div class="verso-topbar-col">
                    <div id="versosocialwidget-2" class="verso-widget widget widget_social">
                        <div class="verso-icon-set">
                            <a target="_blank" href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-IPHONE-181516395776407/?modal=admin_todo_tour" class="verso-icon-set-item verso-transition">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="verso-nav verso-nav-layout-logo-l-menu-r verso-nav-shadow-style-2 verso-nav-click verso-nav-sticky">
        <div class="verso-nav-inner">
            <div class="verso-nav-container verso-customizer-menu-layout">
                <div class="verso-nav-brand">
                    <a href="/" class="verso-customizer-menu-logo-text" title="One Slogan">
                        <img src="{{asset('images/iphoneX/logo-vt3.png')}}"
                            alt="Verso - E-Commerce 2018">
                        One Slogan </a>
                </div>
                <!-- Mobile menu toggle button -->
                <div class="verso-nav-mobile">
                    <a id="nav-toggle" href="#">
                        <span></span>
                    </a>
                </div>
                <nav class="verso-nav-menu">
                    <ul id="menu-main-menu" class="verso-nav-list">
                        <li id="menu-item-114"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-112 current_page_item nav-item menu-item-114 {{Request::is('/') ? 'active' : ' '}} ">
                            <a title="Home" href="/">TRANG CHỦ</a></li>
                        <li id="menu-item-115"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-115 dropdown {{Request::is('shop') ? 'active' : ' '}}">
                            <a title="Shop" href="{{asset('shop')}}">SHOP</a>
                        </li>
                        <li id="menu-item-124"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-124 dropdown {{Request::is('about') ? 'active' : ' '}}">
                            <a title="VỀ CHÚNG TÔI" href="{{route('about_us')}}">VỀ CHÚNG TÔI</a>
                        </li>
                        <li id="menu-item-128"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-128 dropdown {{Request::is('tin-tuc') ? 'active' : ' '}}">
                            <a title="TIN TỨC" href="{{route('news')}}">TIN TỨC</a>
                        </li>
                        <li id="menu-item-133"
                            class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-133 {{Request::is('lien-he') ? 'active' : ' '}}">
                            <a title="LIÊN HỆ" href="{{route('contact')}}">LIÊN HỆ</a></li>

                        <!-- <li id="verso-menu-cart-item" class="menu-item menu-item-cart nav-item ">
                            <a href="cart/index.html">
                                <i class="fa fa-shopping-cart align-middle"></i>
                                <span class="badge badge-primary rounded-circle">
                                    0 </span> -
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">&pound;</span>0.00</span> </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>