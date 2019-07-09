@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <div class="section vc_custom_1500983367121">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 verso-text-light">

                        <h1 class="text-left  vc_custom_1500983581490">
                            Tin tức của chúng tôi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-content verso-default-page-padding">
            <div class="container">
                <div class="row verso-customizer-blog-list-post-layout">
                    <div class="col-lg-9 verso-global-margin-bottom-big">
                        @foreach($news as $item_news)
                        <article id="post-75"
                            class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-global-margin-bottom-small card-hero  post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-headsets category-sound tag-earphones tag-modern tag-music">
                            <div class="card-img-container">
                                <a href="{{route('detail_news',$item_news->slug)}}">
                                    <img src="{{asset('storage/'.$item_news->image)}}" class="card-img wp-post-image"
                                        alt="Choosing a proper headet" sizes="(max-width: 900px) 100vw, 900px" /> </a>
                            </div>
                            <div class="card-body">

                                <h2 class="card-title verso-customizer-blog-slist-title-size h2 verso-mb-1">
                                    <a href="{{route('detail_news',$item_news->slug)}}">{{$item_news->title}}</a>
                                </h2>
                                <p class="card-subtitle text-muted font-italic verso-mb-3">
                                    {{$item_news->created_at}}</p>
                                <p>{{$item_news->excerpt}}</p>
                            </div>
                            <footer class="card-footer clearfix">
                                <small class="text-muted">
                                    <i class="fa fa-tags text-muted"></i>
                                    <a class="text-muted" href="" rel="tag">tai nghe</a>, <a class="text-muted" href=""
                                        rel="tag">dây sạc</a>,
                                    <!-- <a class="text-muted" href="" rel="tag">music</a> -->
                                </small>

                                <a href="{{route('detail_news',$item_news->slug)}}" class="float-right">
                                    đọc thêm &rarr; </a>
                            </footer>
                            <span class="oxy-display-none"></span>
                        </article>
                        @endforeach
                        <nav class="text-center">
                            <ul
                                class="pagination d-inline-flex verso-transition verso-global-shadow-normal verso-global-shadow-hover verso-mt-5 verso-customizer-blog-list-pagination">
                                <li class="page-item active">
                                    <span class='page-link current'>1</span> </li>
                                <li class="page-item">
                                    <a class='page-link' href='page/2/index.html'>2</a> </li>
                                <li class="page-item">
                                    <a class="next page-link" href="page/2/index.html">&raquo;</a> </li>
                            </ul>
                        </nav>
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
                                            alt="" srcset="{{asset('storage/'.$item_shop->image)}} 1000w, 
                                            {{asset('storage/'.$item_shop->image)}} 150w, 
                                            {{asset('storage/'.$item_shop->image)}} 300w, 
                                            {{asset('storage/'.$item_shop->image)}} 768w, 
                                            {{asset('storage/'.$item_shop->image)}} 180w, 
                                            {{asset('storage/'.$item_shop->image)}} 350w, 
                                            {{asset('storage/'.$item_shop->image)}} 600w"
                                            sizes="(max-width: 600px) 100vw, 600px" /> <span
                                            class="product-title">{{$item_shop->title}}</span>
                                    </a>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol"></span>{{number_format($item_shop->price)}}
                                            VND</span></ins>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection