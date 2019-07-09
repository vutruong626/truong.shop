@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <div class="section vc_custom_1500983367121">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 verso-text-light">

                        <h1 class="text-left  vc_custom_1500983581490">
                            {{$shop->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-content verso-default-page-padding section-commerce ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        <div class="row verso-global-margin-bottom-small align-items-center">
                            <div class="col-md-6">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a
                                            href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item">{{$shop->title}}</li>
                                </ol>
                            </div>
                            <div class="col-md-6 text-right hidden-sm-down"><a
                                    class="btn btn-primary verso-ml-1 verso-px-2 verso-global-button-shadow-normal verso-global-button-shadow-hover rounded-0"
                                    href="../blue-headphones/index.html" rel="prev"><i class="fa fa-angle-left"
                                        data-toggle="tooltip" title="Blue headphones"></i></a><a
                                    class="btn btn-primary verso-ml-1 verso-px-2 verso-global-button-shadow-normal verso-global-button-shadow-hover rounded-0"
                                    href="../galiano-headset/index.html" rel="next"><i class="fa fa-angle-right"
                                        data-toggle="tooltip" title="Galiano Headset"></i></a></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div id="product-80"
                            class="post-80 product type-product status-publish has-post-thumbnail product_cat-earphones product_tag-clear product_tag-wireless first instock shipping-taxable purchasable product-type-variable has-default-attributes row">

                            <div class="col-md-6 verso-global-margin-bottom-small">
                                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                    data-columns="4" style="opacity: 1; transition: opacity .25s ease-in-out;">
                                    <a href="#" class="woocommerce-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                            src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport"
                                        style="overflow: hidden; position: relative; height: 330px;">
                                        <figure class="woocommerce-product-gallery__wrapper"
                                            style="width: 600%; transition-duration: 0s; transform: translate3d(-660px, 0px, 0px);">
                                            <div data-thumb="{{asset('storage/'.$shop->image)}}"
                                                class="woocommerce-product-gallery__image"
                                                style="width: 330px; float: left; display: block; position: relative; overflow: hidden;">
                                                <a
                                                    href="{{asset('storage/'.$shop->image)}}"><img
                                                        width="600" height="600"
                                                        src="{{asset('storage/'.$shop->image)}}"
                                                        class="wp-post-image" alt=""
                                                        title="verso-commerce-funky-product-1000x1000-52-notinclude"
                                                        data-caption=""
                                                        data-src="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image_width="1000" data-large_image_height="1000"
                                                        srcset="{{asset('storage/'.$shop->image)}} 1000w"
                                                        sizes="(max-width: 600px) 100vw, 600px"
                                                        draggable="false"></a><img role="presentation" alt=""
                                                    src="{{asset('storage/'.$shop->image)}}"
                                                    class="zoomImg"
                                                    style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none; max-height: none;">
                                            </div>
                                            <div data-thumb="{{asset('storage/'.$shop->image)}}"
                                                class="woocommerce-product-gallery__image"
                                                style="width: 330px; float: left; display: block;"><a
                                                    href="{{asset('storage/'.$shop->image)}}"><img
                                                        width="600" height="600"
                                                        src="{{asset('storage/'.$shop->image)}}"
                                                        class="" alt=""
                                                        title="verso-commerce-funky-product-1000x1000-53-notinclude"
                                                        data-caption=""
                                                        data-src="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image_width="1000" data-large_image_height="1000"
                                                        srcset="{{asset('storage/'.$shop->image)}} 1000w, {{asset('storage/'.$shop->image)}} 150w, 
                                                                {{asset('storage/'.$shop->image)}} 300w, {{asset('storage/'.$shop->image)}} 768w, 
                                                                {{asset('storage/'.$shop->image)}} 180w, {{asset('storage/'.$shop->image)}} 350w, 
                                                                {{asset('storage/'.$shop->image)}} 600w"
                                                        sizes="(max-width: 600px) 100vw, 600px" draggable="false"></a>
                                            </div>
                                            <div data-thumb="{{asset('storage/'.$shop->image)}}"
                                                class="woocommerce-product-gallery__image flex-active-slide"
                                                style="width: 330px; float: left; display: block; position: relative; overflow: hidden;">
                                                <a
                                                    href="{{asset('storage/'.$shop->image)}}"><img
                                                        width="600" height="600"
                                                        src="{{asset('storage/'.$shop->image)}}"
                                                        class="" alt=""
                                                        title="verso-commerce-funky-product-1000x1000-55-notinclude"
                                                        data-caption=""
                                                        data-src="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image="{{asset('storage/'.$shop->image)}}"
                                                        data-large_image_width="1000" data-large_image_height="1000"
                                                        srcset="{{asset('storage/'.$shop->image)}} 1000w, 
                                                                {{asset('storage/'.$shop->image)}} 150w, 
                                                                {{asset('storage/'.$shop->image)}} 300w, 
                                                                {{asset('storage/'.$shop->image)}} 768w, 
                                                                {{asset('storage/'.$shop->image)}} 180w, 
                                                                {{asset('storage/'.$shop->image)}} 350w, 
                                                                {{asset('storage/'.$shop->image)}} 600w"
                                                        sizes="(max-width: 600px) 100vw, 600px"
                                                        draggable="false"></a><img role="presentation" alt=""
                                                    src="{{asset('storage/'.$shop->image)}}"
                                                    class="zoomImg"
                                                    style="position: absolute; top: -647.667px; left: -382.712px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none; max-height: none;">
                                            </div>
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        <li>
                                            <img src="{{asset('storage/'.$shop->image_1)}}"
                                                class="flex-active" draggable="false"></li>
                                        <li><img src="{{asset('storage/'.$shop->image_2)}}"
                                                draggable="false"></li>
                                        <li><img src="{{asset('storage/'.$shop->image_3)}}"
                                                draggable="false"></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-6 verso-global-margin-bottom-big">
                                <div class="summary entry-summary">
                                    <h1 class="product_title entry-title">{{$shop->title}}</h1>
                                    <p class="price"><span
                                            class="h2 verso-global-margin-bottom-small verso-mt-2 d-block"><span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&pound;</span>{{number_format($shop->price)}}
                                                VND</span></span>
                                    </p>
                                    <div class="woocommerce-product-details__short-description">
                                        <p class="lead verso-global-margin-bottom-small">{{$shop->excerpt}}</p>
                                    </div>

                                    <form class="variations_form cart"
                                        action="https://verso.oxygenna.com/commerce-modern/product/cozy-earphones/"
                                        method="post" enctype='multipart/form-data' data-product_id="80"
                                        data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_color&quot;:&quot;White&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:66,&quot;display_regular_price&quot;:66,&quot;image&quot;:{&quot;title&quot;:&quot;verso-commerce-funky-product-1000x1000-52-notinclude&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude.jpg 1000w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-150x150.jpg 150w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-300x300.jpg 300w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-768x768.jpg 768w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-180x180.jpg 180w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-350x350.jpg 350w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-600x600.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude.jpg&quot;,&quot;full_src_w&quot;:1000,&quot;full_src_h&quot;:1000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude-150x150.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-52-notinclude.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:600,&quot;src_w&quot;:600,&quot;src_h&quot;:600},&quot;image_id&quot;:&quot;50&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:159,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_color&quot;:&quot;Black&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:66,&quot;display_regular_price&quot;:66,&quot;image&quot;:{&quot;title&quot;:&quot;verso-commerce-funky-product-1000x1000-53-notinclude&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude.jpg 1000w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-150x150.jpg 150w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-300x300.jpg 300w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-768x768.jpg 768w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-180x180.jpg 180w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-350x350.jpg 350w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-600x600.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude.jpg&quot;,&quot;full_src_w&quot;:1000,&quot;full_src_h&quot;:1000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude-150x150.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-53-notinclude.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:600,&quot;src_w&quot;:600,&quot;src_h&quot;:600},&quot;image_id&quot;:&quot;49&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:158,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_color&quot;:&quot;Blue&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:66,&quot;display_regular_price&quot;:66,&quot;image&quot;:{&quot;title&quot;:&quot;verso-commerce-funky-product-1000x1000-55-notinclude&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude.jpg 1000w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-150x150.jpg 150w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-300x300.jpg 300w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-768x768.jpg 768w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-180x180.jpg 180w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-350x350.jpg 350w, https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-600x600.jpg 600w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude.jpg&quot;,&quot;full_src_w&quot;:1000,&quot;full_src_h&quot;:1000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude-150x150.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/verso.oxygenna.com\/commerce-modern\/wp-content\/uploads\/sites\/15\/2017\/09\/verso-commerce-funky-product-1000x1000-55-notinclude.jpg&quot;,&quot;thumb_src_w&quot;:600,&quot;thumb_src_h&quot;:600,&quot;src_w&quot;:600,&quot;src_h&quot;:600},&quot;image_id&quot;:&quot;55&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:157,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;}]">

                                        <table class="variations" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="label"><label for="color">Color</label></td>
                                                    <td class="value">
                                                        <select id="color" class="" name="attribute_color"
                                                            data-attribute_name="attribute_color"
                                                            data-show_option_none="yes">
                                                            <option value="">Choose an option</option>
                                                            <option value="White">White</option>
                                                            <option value="Black">Black</option>
                                                            <option value="Blue">Blue</option>
                                                        </select><a class="reset_variations" href="#">Clear</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="single_variation_wrap">
                                            <div class="woocommerce-variation single_variation"></div>
                                            <div class="woocommerce-variation-add-to-cart variations_button">

                                                <div
                                                    class="d-flex justify-content-between verso-global-margin-bottom-small">
                                                    <div class="quantity">
                                                        <label class="screen-reader-text"
                                                            for="quantity_5d1c27036491a">Quantity</label>
                                                        <input type="number" id="quantity_5d1c27036491a"
                                                            class="input-text qty text" step="1" min="1" max=""
                                                            name="quantity" value="1" title="Qty" size="4"
                                                            pattern="[0-9]*" inputmode="numeric" aria-labelledby="" />
                                                    </div>
                                                </div>
                                                <button type="submit" class="single_add_to_cart_button button alt">Add
                                                    to
                                                    cart</button>


                                                <input type="hidden" name="add-to-cart" value="80" />
                                                <input type="hidden" name="product_id" value="80" />
                                                <input type="hidden" name="variation_id" class="variation_id"
                                                    value="0" />
                                            </div>
                                        </div>

                                    </form>

                                    <div class="product_meta">



                                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>


                                        <span class="posted_in">Category: <a
                                                href="../../product-category/earphones/index.html"
                                                rel="tag">Earphones</a></span>
                                        <span class="tagged_as">Tags: <a href="../../product-tag/clear/index.html"
                                                rel="tag">clear</a>,
                                            <a href="../../product-tag/wireless/index.html"
                                                rel="tag">wireless</a></span>

                                    </div>

                                </div>
                            </div>

                            <div class="col-12 verso-global-margin-bottom-big">
                                <div class="single-product-extras">
                                    <ul class="nav nav-tabs" data-tabs="tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" role="tab"
                                                href="#tab-description">
                                                Miêu tả </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" role="tab"
                                                href="#tab-additional_information">
                                                Thêm thông tin </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" role="tab" href="#tab-reviews">
                                            Nhận xét (1) </a>
                                        </li>
                                    </ul>
                                    <div
                                        class="tab-content verso-global-shadow-normal verso-global-shadow-hover verso-global-margin-bottom-big verso-transition">
                                        <div class="tab-pane active" id="tab-description" role="tabpanel">
                                            <div class="verso-py-3 verso-px-2">
                                                <p>{!!$shop->body!!}</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-additional_information" role="tabpanel">
                                            <div class="verso-py-3 verso-px-2">

                                                <h2>Thêm thông tin</h2>

                                                <table class="shop_attributes">


                                                    <tr>
                                                        <th>Color</th>
                                                        <td>
                                                            <p>White, Black, Blue</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                            <div class="verso-py-3 verso-px-2">
                                                <div id="reviews" class="woocommerce-Reviews">
                                                    <div id="comments">
                                                        <h2 class="woocommerce-Reviews-title">1 review for
                                                            <span>Cozy Earphones</span></h2>


                                                        <ol class="commentlist">
                                                            <li class="comment byuser comment-author-proistak even thread-even depth-1"
                                                                id="li-comment-12">

                                                                <div id="comment-12" class="comment_container">

                                                                    <div class="media-list verso-mb-5">
                                                                        <div class="media">
                                                                            <div class="media-left"><img alt=''
                                                                                    src='https://secure.gravatar.com/avatar/c38db180595ac059f661cfdef1dd3c2b?s=60&amp;d=mm&amp;r=g'
                                                                                    srcset='https://secure.gravatar.com/avatar/c38db180595ac059f661cfdef1dd3c2b?s=120&#038;d=mm&#038;r=g 2x'
                                                                                    class='avatar d-flex verso-mr-1 verso-mr-md-3 rounded-circle avatar-60 photo'
                                                                                    height='60' width='60' />
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <div class="comment-text">


                                                                                    <p class="meta">
                                                                                        <strong
                                                                                            class="woocommerce-review__author">proistak
                                                                                        </strong>
                                                                                        <span
                                                                                            class="woocommerce-review__dash">&ndash;</span>
                                                                                        <time
                                                                                            class="woocommerce-review__published-date"
                                                                                            datetime="2017-09-13T07:03:07+00:00">September
                                                                                            13, 2017</time>
                                                                                    </p>

                                                                                    <div class="description">
                                                                                        <p>Made for urban
                                                                                            environments, the
                                                                                            Boombasters are
                                                                                            designed to keep
                                                                                            your powerful and
                                                                                            compact DSLR kit
                                                                                            within quick reach.
                                                                                            And your go-to
                                                                                            tablet, smartphone,
                                                                                            headphones, wallet
                                                                                            and other essentials
                                                                                            well organized.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><!-- #comment-## -->
                                                        </ol>


                                                    </div>


                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                                <span id="reply-title" class="comment-reply-title">Add a
                                                                    review
                                                                    <small><a rel="nofollow"
                                                                            id="cancel-comment-reply-link"
                                                                            href="index.html#respond"
                                                                            style="display:none;">Cancel
                                                                            reply</a></small></span>
                                                                <form
                                                                    action="https://verso.oxygenna.com/commerce-modern/wp-comments-post.php"
                                                                    method="post" id="commentform" class="contact-form"
                                                                    novalidate>
                                                                    <div class="form-group row">
                                                                        <div class="col-md-12">
                                                                            <div class="comment-form-rating">
                                                                                <label for="rating">Your
                                                                                    rating</label><select name="rating"
                                                                                    id="rating" aria-required="true"
                                                                                    required>
                                                                                    <option value="">
                                                                                        Rate&hellip;</option>
                                                                                    <option value="5">Perfect
                                                                                    </option>
                                                                                    <option value="4">Good
                                                                                    </option>
                                                                                    <option value="3">Average
                                                                                    </option>
                                                                                    <option value="2">Not that
                                                                                        bad</option>
                                                                                    <option value="1">Very poor
                                                                                    </option>
                                                                                </select></div>
                                                                            <p class="comment-form-comment">
                                                                                <label for="comment">Your
                                                                                    review&nbsp;<span
                                                                                        class="required">*</span></label><textarea
                                                                                    placeholder="Your review"
                                                                                    class="form-control verso-mb-3"
                                                                                    id="comment" name="comment"
                                                                                    cols="45" rows="8"
                                                                                    aria-required="true"
                                                                                    required></textarea></p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p class="comment-form-author">
                                                                                <label for="author">Name&nbsp;<span
                                                                                        class="required">*</span></label>
                                                                                <input placeholder="Name"
                                                                                    class="form-control verso-mb-3"
                                                                                    id="author" name="author"
                                                                                    type="text" value="" size="30"
                                                                                    aria-required="true" required /></p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p class="comment-form-email"><label
                                                                                    for="email">Email&nbsp;<span
                                                                                        class="required">*</span></label>
                                                                                <input placeholder="Your Email"
                                                                                    class="form-control verso-mb-3"
                                                                                    id="email" name="email" type="email"
                                                                                    value="" size="30"
                                                                                    aria-required="true" required /></p>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <p class="form-submit"><input name="submit"
                                                                                    type="submit" id="submit"
                                                                                    class="btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                                                    value="Submit" /> <input
                                                                                    type='hidden' name='comment_post_ID'
                                                                                    value='80' id='comment_post_ID' />
                                                                                <input type='hidden'
                                                                                    name='comment_parent'
                                                                                    id='comment_parent' value='0' />
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div><!-- #respond -->
                                                        </div>
                                                    </div>


                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="related products">
                                <h2>Những sản phẩm liên quan</h2>
                                <ul class="products columns-3">
                                    <li
                                        class="post-88 product type-product status-publish has-post-thumbnail product_cat-cables product_tag-music product_tag-sound product_tag-wireless first instock shipping-taxable purchasable product-type-simple col-lg-4 verso-related-product">
                                        <div
                                            class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                            <a href="../mamba-cable/index.html"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude.jpg 1000w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-150x150.jpg 150w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-300x300.jpg 300w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-768x768.jpg 768w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-180x180.jpg 180w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-350x350.jpg 350w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-43-notinclude-600x600.jpg 600w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                    class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-42-notinclude.jpg"
                                                    alt=""></a>
                                            <div class="card-body"><a href="../mamba-cable/index.html"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2 class="woocommerce-loop-product__title">Mamba Cable</h2>
                                                </a>
                                                <div class="star-rating"><span style="width:86.6%">Rated <strong
                                                            class="rating">4.33</strong> out of 5</span></div>
                                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&pound;</span>39.00</span></span>
                                                <a href="index4ea3.html?add-to-cart=88" data-quantity="1"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                    data-product_id="88" data-product_sku=""
                                                    aria-label="Add &ldquo;Mamba Cable&rdquo; to your cart"
                                                    rel="nofollow">Buy Now</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li
                                        class="post-78 product type-product status-publish has-post-thumbnail product_cat-headphones product_tag-beats product_tag-upbeats product_tag-wireless instock shipping-taxable purchasable product-type-simple col-lg-4 verso-related-product">
                                        <div
                                            class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                            <a href="../stan-bluster/index.html"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude.jpg 1000w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-150x150.jpg 150w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-300x300.jpg 300w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-768x768.jpg 768w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-180x180.jpg 180w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-350x350.jpg 350w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-64-notinclude-600x600.jpg 600w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                    class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-63-notinclude.jpg"
                                                    alt=""></a>
                                            <div class="card-body"><a href="../stan-bluster/index.html"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2 class="woocommerce-loop-product__title">Stan Bluster
                                                    </h2>
                                                </a>
                                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&pound;</span>109.00</span></span>
                                                <a href="indexd5f5.html?add-to-cart=78" data-quantity="1"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                    data-product_id="78" data-product_sku=""
                                                    aria-label="Add &ldquo;Stan Bluster&rdquo; to your cart"
                                                    rel="nofollow">Buy Now</a></div>
                                        </div>
                                    </li>


                                    <li
                                        class="post-79 product type-product status-publish has-post-thumbnail product_cat-headphones product_tag-chill product_tag-inspiration product_tag-wireless last instock shipping-taxable purchasable product-type-simple col-lg-4 verso-related-product">
                                        <div
                                            class="card verso-global-shadow-normal verso-global-shadow-hover verso-transition verso-mb-3 text-center">
                                            <a href="../galiano-headset/index.html"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                    alt=""
                                                    srcset="https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude.jpg 1000w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-150x150.jpg 150w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-300x300.jpg 300w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-768x768.jpg 768w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-180x180.jpg 180w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-350x350.jpg 350w, https://verso.oxygenna.com/commerce-modern/wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-62-notinclude-600x600.jpg 600w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                    class="card-img-top verso-pos-absolute verso-opacity-hover-0 verso-transition-slow"
                                                    src="../../wp-content/uploads/sites/15/2017/09/verso-commerce-funky-product-1000x1000-61-notinclude.jpg"
                                                    alt=""></a>
                                            <div class="card-body"><a href="../galiano-headset/index.html"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <h2 class="woocommerce-loop-product__title">Galiano Headset
                                                    </h2>
                                                </a>
                                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">&pound;</span>99.00</span></span>
                                                <a href="index70f8.html?add-to-cart=79" data-quantity="1"
                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart btn btn-primary verso-global-button-shadow-normal verso-global-button-shadow-hover verso-transition"
                                                    data-product_id="79" data-product_sku=""
                                                    aria-label="Add &ldquo;Galiano Headset&rdquo; to your cart"
                                                    rel="nofollow">Buy Now</a></div>
                                        </div>
                                    </li>


                                </ul>

                            </section>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection