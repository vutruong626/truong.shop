@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <div class="section vc_custom_1500983367121">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 verso-text-light">

                        <h1 class="text-left  vc_custom_1500983581490">
                            {{$news->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-content verso-default-page-padding">
            <div class="container">
                <div class="row verso-customizer-blog-single-post-layout">
                    <div class="col-lg-9">
                        <article id="post-75"
                            class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-global-margin-bottom-big card-hero  post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-headsets category-sound tag-earphones tag-modern tag-music">
                            <div class="card-img-container">
                                <img width="900" height="500" src="{{asset('storage/'.$news->image)}}"
                                    class="card-img wp-post-image" alt="Choosing a proper headet" srcset="{{asset('storage/'.$news->image)}} 900w, 
                                    {{asset('storage/'.$news->image)}} 300w, 
                                    {{asset('storage/'.$news->image)}} 768w"
                                    sizes="(max-width: 900px) 100vw, 900px" /> </div>

                            <div class="card-body">
                                <h1 class="card-title verso-mb-1 verso-customizer-blog-single-title-size h1">
                                    {{$news->title}}</h1>
                                <p class="card-subtitle font-italic text-muted verso-mb-3">
                                    <a href="">
                                        {{$news->created_at}} </a>
                                </p>
                                <p>{!!$news->body!!}</p>
                            </div>

                            <div class="card-footer">
                                <small class="text-muted">
                                    <i class="fa fa-tags p-r-1 text-muted"></i>
                                    <a class="text-muted" href="" rel="tag">earphones</a>, <a
                                        class="text-muted" href="" rel="tag">modern</a>, <a
                                        class="text-muted" href="" rel="tag">music</a>
                                </small>

                                <div class="verso-icon-set verso-icon-set-expandable verso-transition float-right">
                                    <a class="verso-icon-set-item verso-icon-set-item-trigger text-muted"
                                        href="index.html">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                    <a class="verso-icon-set-item verso-icon-set-item-close verso-transition"
                                        href="2/index.html">
                                        <i class="fa fa-close"></i>
                                    </a>
                                    <a class="verso-icon-set-item text-muted verso-transition"
                                        href="https://plus.google.com/share?url=https://verso.oxygenna.com/commerce-modern/choosing-a-proper-headet/"
                                        title="Share on Google+">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a class="verso-icon-set-item text-muted verso-transition"
                                        href="https://twitter.com/share?url=https://verso.oxygenna.com/commerce-modern/choosing-a-proper-headet/"
                                        title="Share on Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="verso-icon-set-item text-muted verso-transition"
                                        href="https://www.facebook.com/sharer.php?u=https://verso.oxygenna.com/commerce-modern/choosing-a-proper-headet/"
                                        title="Share on Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </div>
                            <span class="oxy-display-none"></span>
                        </article>

                        <div class="verso-global-margin-bottom-big clearfix">
                            <a href=""
                                class="btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition">&larr;
                                Bài viết trước </a>
                        </div>
                    </div>
                    <div class="col-lg-3 sidebar">
                        <div id="woocommerce_product_search-4"
                            class="verso-widget widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search"
                                action="https://verso.oxygenna.com/commerce-modern/">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search
                                    for:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field"
                                    placeholder="Search products&hellip;" value="" name="s" />
                                <button type="submit" value="Search">Search</button>
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <div id="woocommerce_top_rated_products-2"
                            class="verso-widget widget woocommerce widget_top_rated_products">
                            <h4 class="h3 verso-widget-header">Sản phẩm được đánh giá hàng đầu</h4>
                            <ul class="product_list_widget">
                                @foreach($shop as $item_shop)
                                <li>

                                    <a href="{{route('detail_shop',$item_shop->slug)}}">
                                        <img src="{{asset('storage/'.$item_shop->image)}}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                            alt=""
                                            sizes="(max-width: 600px) 100vw, 600px" /> <span
                                            class="product-title">{{$item_shop->title}}</span>
                                    </a>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">&pound;</span>{{number_format($item_shop->price)}} VND </span></ins>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <div id="media_image-2" class="verso-widget widget widget_media_image"><img width="400"
                                height="300"
                                src="{{asset('images/iphoneX/66029971_6126600104752_5795174298473725952_n.png')}}"
                                class="image wp-image-24  attachment-full size-full" alt=""
                                style="max-width: 100%; height: auto;"
                                
                                sizes="(max-width: 400px) 100vw, 400px" /></div>
                                <div id="woocommerce_product_categories-2"
                            class="verso-widget widget woocommerce widget_product_categories">
                            <h4 class="h3 verso-widget-header">Loại sản phẩm</h4>
                            <ul class="product-categories">
                                <li class="cat-item cat-item-41"><a
                                        href="">Iphone 6</a> <span
                                        class="count">(10)</span></li>
                                <li class="cat-item cat-item-35"><a
                                        href="">Iphone 7</a> <span
                                        class="count">(10)</span></li>
                                <li class="cat-item cat-item-28"><a
                                        href="">Iphone 8</a> <span
                                        class="count">(10)</span></li>
                                <li class="cat-item cat-item-39"><a
                                        href="">Iphone X</a> <span
                                        class="count">(10)</span></li>
                            </ul>
                        </div>
                        <div id="woocommerce_products-2" class="verso-widget widget woocommerce widget_products">
                            <h4 class="h3 verso-widget-header">Best Sellers</h4>
                            <ul class="product_list_widget">
                                @foreach($list_new as $item_list_new)
                                <li>

                                    <a href="{{route('detail_news',$item_list_new->slug)}}">
                                        <img src="{{asset('storage/'.$item_list_new->image)}}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                            alt=""
                                            sizes="(max-width: 600px) 100vw, 600px" /> <span
                                            class="product-title">{{$item_list_new->title}}</span>
                                    </a>
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
@endsection