<footer id="footer" class="verso-footer">
    <div class="upper-footer section ">
        <div class="section-content">
            <div class="container">
                <div class="row verso-customizer-footer-columns">
                    <div class="col-md-3 ">
                        <div id="text-2" class="verso-widget widget widget_text">
                            <h4 class="h3 verso-widget-header">VỀ CHÚNG TÔI</h4>
                            <div class="textwidget">
                                <p>Trường`Shop chuyên bán lẻ và bán buôn các thiết bị công nghệ tiên tiến mới nhất.</p>
                                <p>Mục đích chính của chúng tôi là cung cấp các sản phẩm và dịch vụ thu hút tất cả những
                                    người yêu thích tiện ích.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div id="woocommerce_products-3" class="verso-widget widget woocommerce widget_products">
                            <h4 class="h3 verso-widget-header">Sản phẩm mới</h4>
                            <ul class="product_list_widget">
                                @foreach($common_data['list_shop'] as $item_show_list)
                                <li>
                                    <a href="{{route('detail_shop',$item_show_list->slug)}}">
                                        <img src="{{asset('storage/'.$item_show_list->image)}}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                            alt=""
                                            sizes="(max-width: 600px) 100vw, 600px" /> <span class="product-title">{{$item_show_list->title}}</span>
                                    </a>
                                    <span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol"></span>{{number_format($item_show_list->price)}} VND</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div id="woocommerce_product_categories-3"
                            class="verso-widget widget woocommerce widget_product_categories">
                            <h4 class="h3 verso-widget-header">Danh mục sản phẩm</h4>
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
                    <div class="col-md-3 ">
                        <div id="text-3" class="verso-widget widget widget_text">
                            <h4 class="h3 verso-widget-header">Thanh toán</h4>
                            <div class="textwidget">
                                <p>
                                    Đối với thanh toán bằng thẻ tín dụng, bạn có thể sử dụng Visa, MasterCard hoặc
                                    American Express. Hình thức thanh toán bổ sung cũng có sẵn.</p>
                            </div>
                        </div>
                        <div id="versosocialwidget-3" class="verso-widget widget widget_social">
                            <div class="verso-icon-set">
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-credit-card-alt"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-paypal"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-id-card"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-cc-visa"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-cc-mastercard"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section verso-pt-1 verso-pb-1">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="text-4" class="verso-widget widget widget_text">
                            <div class="textwidget">
                                <p>Trường`Shop Theme. © Oxygenna 2017</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="versosocialwidget-4" class="verso-widget widget widget_social">
                            <div class="verso-icon-set">
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a target="_blank" href="#" class="verso-icon-set-item verso-transition">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>