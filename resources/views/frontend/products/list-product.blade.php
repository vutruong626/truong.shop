@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <div class="section vc_custom_1500983367121">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 verso-text-light">

                        <h1 class="text-left  vc_custom_1500983581490">
                            Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-content verso-default-page-padding section-commerce ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row verso-global-margin-bottom-small align-items-center">
                            <div class="col-md-6">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item">Sản phẩm</li>
                                </ol>
                            </div>
                            <div class="col-md-6 text-right hidden-sm-down">
                                <p class="woocommerce-result-count">
                                    Hiển thị tất cả 12 kết quả</p>
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order" selected='selected'>Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                    <input type="hidden" name="paged" value="1" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <header class="woocommerce-products-header">

                    </header>
                    <div class="col-12">
                        <ul class="products columns-4">
                            @foreach($shop as $item_shop)
                            <li
                                class="post-95 product type-product status-publish has-post-thumbnail product_cat-speakers product_tag-chill product_tag-inspiration product_tag-music product_tag-upbeats first instock shipping-taxable purchasable product-type-simple col-lg-4 col-md-6 col-12">
                                <div
                                    class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                    <a href="{{route('detail_shop',$item_shop->slug)}}"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img src="{{asset('storage/'.$item_shop->image)}}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                            alt=""
                                            sizes="(max-width: 600px) 100vw, 600px" /><img
                                            class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                            src="{{asset('storage/'.$item_shop->image)}}"
                                            alt=""></a>
                                    <div class="card-body"><a href="{{route('detail_shop',$item_shop->slug)}}"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="woocommerce-loop-product__title">{{$item_shop->title}}</h2>
                                        </a>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&pound;</span>{{number_format($item_shop->price)}} VND </span></span>
                                        <a href="{{asset('/cart/add/'.$item_shop->id)}}" data-quantity="1"
                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                            data-product_id="95" data-product_sku=""
                                            aria-label="Add &ldquo;Big Blasters 2&rdquo; to your cart"
                                            rel="nofollow">Mua Ngay</a></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection