@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <article id="post-112" class="post-112 page type-page status-publish hentry">
        <div class="entry-content">
            <div class="section vc_custom_1500625330000">
                <div class="section-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 verso-text-normal" style="z-index: 1;">

                                <div
                                    class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_slideInUp slideInUp vc_custom_1500972730557">

                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="650"
                                                height="650" src="{{asset('images/iphoneX/hero-iphone@2x.png')}}"
                                                class="vc_single_image-img attachment-full" alt=""
                                                sizes="(max-width: 650px) 100vw, 650px" style="margin-left: 30px;" />
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center verso-text-normal">
                                <div
                                    class="card verso-transition  wpb_animate_when_almost_visible wpb_fadeIn fadeIn verso-shadow-15 verso-shadow-hover-20 card-hero card-inverse ">
                                    <div class="card-body">
                                        <h1 style="text-align: center"
                                            class="vc_custom_heading vc_custom_1505292984319"><a href=""
                                                target=" _blank" rel="nofollow" title="iPhone Xs Max 512GB">iPhone Xs Max 512GB</a></h1>
                                        <h2 style="text-align: center"
                                            class="vc_custom_heading vc_custom_1500626326748">Giá chỉ 39.990.000 đ</h2>
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1500626354149">
                                            <div class="wpb_wrapper">
                                                <p class="lead">Thiết kế toàn màn hình. Tuổi thọ pin dài nhất từng có
                                                    trong iPhone. Hiệu suất nhanh nhất. Chống nước và văng. Studio chất
                                                    lượng hình ảnh và video 4K. An toàn hơn với Face ID. Mới iPhone X R
                                                    . Đó là một bản nâng cấp tuyệt vời.</p>

                                            </div>
                                        </div>
                                        <a href="{{route('shop')}}" title="Buy Now" target=" _blank" rel="nofollow"
                                            class="btn btn-secondary  btn-lg verso-shadow-8 verso-shadow-hover-16 ">
                                            Mua Ngay </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section vc_custom_1500627447031">
                <div class="section-background" data-section-bg-title="">
                    <div class="section-bg-image section-bg-image-size-100 section-bg-image-size-md-100 section-bg-image-size-lg-100 section-bg-image-position-bottom verso-opacity-10"
                        style="background-image: url('{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-angle_blue-UL-1600x240.jpg')}}');">
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 verso-text-normal">
                                <div class="woocommerce columns-4">
                                    <h2 style="text-align: center"
                                        class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1501050615618">
                                        Tin Tức & Sự Kiện</h2>
                                    <ul class="products columns-4">
                                        @foreach($news as $item_news)
                                        <li class="product-category product first col-lg-4 col-md-6 col-12">
                                            <a href="{{route('detail_news',$item_news->slug)}}"><img
                                                    src="{{asset('storage/'.$item_news->image)}}" alt="Cables"
                                                    width="600" height="" sizes="(max-width: 500px) 100vw, 500px" />
                                                <h2 class="woocommerce-loop-category__title">
                                                    {{$item_news->title}} </h2>
                                            </a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section vc_custom_1500896313198">
                <div class="section-background" data-section-bg-title="">
                    <div class="section-bg-image section-bg-image-size-100 section-bg-image-size-md-100 section-bg-image-size-lg-100 section-bg-image-position-bottom verso-opacity-10"
                        style="background-image: url('{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-angle_blue-DL-1600x240.jpg')}}');">
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 verso-text-normal verso-order-lg-2">

                                <div
                                    class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_slideInUp slideInUp">

                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="650"
                                                height="650" src="{{asset('images/iphoneX/hero-iphone@2x.png')}}"
                                                class="vc_single_image-img attachment-full" alt=""
                                                sizes="(max-width: 650px) 100vw, 650px" /></div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center verso-text-light">
                                <h2 style="text-align: center" class="vc_custom_heading h1 vc_custom_1505292993916"><a
                                        href="" target=" _blank" rel="nofollow" title="Stan Bluster">ĐIỆN THOẠI APPLE
                                        (IPHONE)</a></h2>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1500978332582">
                                    <div class="wpb_wrapper">
                                        <p class="lead">Mua ngay tất cả các lọai điện thoại từ 7 đến X để được giảm giá
                                            hơn 20% cho các linh kiện của apple cho đến cuối tháng.</p>

                                    </div>
                                </div>
                                <a href="{{route('shop')}}" title="Buy Now" target=" _blank" rel="nofollow"
                                    class="btn btn-primary  btn-lg verso-shadow-8 verso-shadow-hover-16 ">
                                    Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section vc_custom_1500896918895">
                <div class="section-background" data-section-bg-title="">
                    <div class="section-bg-image section-bg-image-size-100 section-bg-image-size-md-100 section-bg-image-size-lg-100 section-bg-image-position-bottom verso-opacity-10"
                        style="background-image: url('{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-angle_blue-UR-1600x240.jpg')}}');">
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 verso-text-normal">
                                <h2 style="text-align: center"
                                    class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1501050615618">
                                    Sản phẩm mới nhất</h2>
                                <div class="woocommerce columns-3 ">
                                    <ul class="products columns-3">
                                        @foreach($shop as $item_shop)
                                        <li
                                            class="post-95 product type-product status-publish has-post-thumbnail product_cat-speakers product_tag-chill product_tag-inspiration product_tag-music product_tag-upbeats first instock shipping-taxable purchasable product-type-simple">
                                            <div
                                                class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                                <a href="{{route('detail_shop',$item_shop->slug)}}"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                        src="{{asset('storage/'.$item_shop->image)}}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="" srcset="{{asset('storage/'.$item_shop->image)}} 1000w, 
                                                        {{asset('storage/'.$item_shop->image)}} 150w, 
                                                        {{asset('storage/'.$item_shop->image)}} 300w, 
                                                        {{asset('storage/'.$item_shop->image)}} 768w, 
                                                        {{asset('storage/'.$item_shop->image)}} 180w, 
                                                        {{asset('storage/'.$item_shop->image)}} 350w, 
                                                        {{asset('storage/'.$item_shop->image)}} 600w"
                                                        sizes="(max-width: 600px) 100vw, 600px" /><img
                                                        class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                                        src="wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-58-notinclude.jpg"
                                                        alt=""></a>
                                                <div class="card-body"><a
                                                        href="{{route('detail_shop',$item_shop->slug)}}"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <h2 class="woocommerce-loop-product__title">
                                                            {{$item_shop->title}}</h2>
                                                    </a>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{number_format($item_shop->price)}}
                                                            VND </span></span>
                                                    <a href="{{asset('/cart/add/'.$item_shop->id)}}" data-quantity="1"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                        data-product_id="95" data-product_sku=""
                                                        aria-label="Add &ldquo;Big Blasters 2&rdquo; to your cart"
                                                        rel="nofollow">Mua ngay</a></div>
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
            <div class="section vc_custom_1500897734778">
                <div class="section-background" data-section-bg-title="">
                    <div class="section-bg-image section-bg-image-size-100 section-bg-image-size-md-100 section-bg-image-size-lg-100 section-bg-image-position-bottom verso-opacity-10"
                        style="background-image: url('{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-angle_blue-DR-1600x240.jpg')}}');">
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 verso-text-light verso-order-lg-2 text-lg-left">
                                <h2 style="text-align: left" class="vc_custom_heading h1 vc_custom_1500978206666">Tất cả
                                    các cửa hàng của chúng tôi</h2>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1500898003194">
                                    <div class="wpb_wrapper">
                                        <p class="lead"><strong>One Slogan</strong> là một cửa hàng chuyên bán lẻ và bán buôn các thiết
                                            bị thông minh, điện tử, thông minh mới nhất.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 verso-text-normal">
                                <div
                                    class="card verso-transition  wpb_animate_when_almost_visible wpb_fadeIn fadeIn verso-shadow-15 verso-shadow-hover-20 card-hero  ">
                                    <div class="card-body">
                                        <div class="media  vc_custom_1500898161022">
                                            <img width="80" height="80"
                                                src="{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-icon-01-80x80-notinclude.png')}}"
                                                class="d-flex verso-mr-2" alt="best prices on the market" />
                                            <div class="media-body">
                                                <h3 class="verso-mt-0 verso-mb-1">
                                                    Giá tốt nhất trên thị trường</h3>
                                                <p> Cras ngồi amet nibh Libero, trong gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, tiền đình ở
                                                    Vulputate tại.</p>
                                            </div>
                                        </div>
                                        <div class="media  vc_custom_1500898277898">
                                            <img width="80" height="80"
                                                src="{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-icon-02-80x80-notinclude.png')}}"
                                                class="d-flex verso-mr-2" alt="Fast delivery" />
                                            <div class="media-body">
                                                <h3 class="verso-mt-0 verso-mb-1">
                                                    Chuyển phát nhanh </h3>
                                                <p>
                                                    Illo cum dolore dolorem a, magnam ipsam unde perferendis ea,
                                                    sed itaque laudantium quas voluptas. vestibulum in vulputate
                                                    at. Illo cum dolore dolorem a, magnam ipsam. </p>
                                            </div>
                                        </div>
                                        <div class="media  ">
                                            <img width="80" height="80"
                                                src="{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-icon-03-80x80-notinclude.png')}}"
                                                class="d-flex verso-mr-2" alt="money back guarranty" />
                                            <div class="media-body">
                                                <h3 class="verso-mt-0 verso-mb-1">
                                                    money back guarranty </h3>
                                                <p>
                                                    Illo cum dolore dolorem a, magnam ipsam unde perferendis ea,
                                                    sed itaque laudantium quas voluptas. vestibulum in vulputate
                                                    at. Illo cum dolore dolorem a, magnam ipsam. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section vc_custom_1500898487684">
                <div class="section-background" data-section-bg-title="">
                    <div class="section-bg-image section-bg-image-size-100 section-bg-image-size-md-100 section-bg-image-size-lg-100 section-bg-image-position-bottom verso-opacity-10"
                        style="background-image: url('{{asset('css/vt-csk/uploads/sites/15/2017/09/commerce-funky-angle_red-UL-1600x240.jpg')}}');">
                    </div>
                </div>
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 verso-text-normal">
                                <h2 style="text-align: center"
                                    class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1501050624737">
                                    Bán chạy nhất</h2>
                                <div class="woocommerce columns-4 ">
                                    <ul class="products columns-4">
                                        @foreach($shop as $item_shop)
                                        <li
                                            class="post-89 product type-product status-publish has-post-thumbnail product_cat-cables product_tag-connector product_tag-detachable product_tag-remote first instock shipping-taxable purchasable product-type-simple">
                                            <div
                                                class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                                <a href="{{route('detail_shop',$item_shop->slug)}}"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <img src="{{asset('storage/'.$item_shop->image)}}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="" sizes="(max-width: 600px) 100vw, 600px" /><img
                                                        class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                                        src="{{asset('storage/'.$item_shop->image)}}" alt=""></a>
                                                <div class="card-body"><a
                                                        href="{{route('detail_shop',$item_shop->slug)}}"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <h2 class="woocommerce-loop-product__title">
                                                            {{$item_shop->title}}</h2>
                                                    </a>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{number_format($item_shop->price)}}
                                                            VND</span></span>
                                                    <a href="{{asset('/cart/add/'.$item_shop->id)}}" data-quantity="1"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                        data-product_id="89" data-product_sku=""
                                                        aria-label="Add &ldquo;Detachable cable&rdquo; to your cart"
                                                        rel="nofollow">Mua Ngay</a>
                                                </div>
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
        </div>
    </article>
</div>
@endsection