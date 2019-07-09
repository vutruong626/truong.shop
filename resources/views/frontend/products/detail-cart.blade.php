@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <article id="post-107" class="post-107 page type-page status-publish hentry">
        <div class="entry-content">
            <div class="section vc_custom_1500983367121">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 verso-text-light">

                                <h1 class="text-left  vc_custom_1500983581490">
                                    Cart</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-content verso-default-page-padding section-commerce ">
                    <div class="container">
                        <div class="woocommerce">
                            <form class="woocommerce-cart-form" action="{{route('update_giohang')}}" method="post">
                                {{ csrf_field() }}
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá tiền</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Toàn bộ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($shop_vt as $item_cart_shop)
                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="{{asset('/cart/remove/'.$item_cart_shop->id),0}}"
                                                    class="remove" aria-label="Remove this item" data-product_id="95"
                                                    data-product_sku="">×</a> </td>
                                            <td class="product-thumbnail">
                                                <a href="{{asset('detail_shop',$item_cart_shop->slug)}}"><img
                                                        src="{{asset('storage/'.$item_cart_shop->image)}}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                        alt="" width="600" height="600"></a> </td>
                                            <td class="product-name" data-title="Product">
                                                <a
                                                    href="{{asset('detail_shop',$item_cart_shop->slug)}}">{{$item_cart_shop->title}}</a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol"
                                                        id="total_price_money_{{$item_cart_shop->id}}"
                                                        data-price="{{$item_cart_shop->price}}"
                                                        data-id="{{$item_cart_shop->id}}">{{number_format($item_cart_shop->price)}}
                                                    VND</span></span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity buttons_added"><input type="button" value="-"
                                                        class="minus">
                                                    <label class="screen-reader-text"
                                                        for="quantity_5d1f2f2d31433">Quantity</label>
                                                    <input type="number" 
                                                        class="input-text qty text" 
                                                        step="1" min="0" max="" name="quantity"
                                                        value="{{$item_cart_shop['qty']}}" title="Qty" size="4"
                                                        pattern="[0-9]*" inputmode="numeric"
                                                        aria-labelledby=""
                                                        onchange="myFunction({{$item_cart_shop->id}}, this.value)">
                                                    <input type="button" value="+" class="plus"></div>
                                            </td>

                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol"
                                                        id="p_{{$item_cart_shop->id}}">{{number_format($item_cart_shop->price * $item_cart_shop['qty'] )}}</span></span>
                                            </td>
                                        </tr>
                                        <input type="hidden" name="id_product[]" id="id_{{$item_cart_shop->id}}">
                                        <input type="hidden" name="number_product[]" id="num_{{$item_cart_shop->id}}">
                                        <script>
                                        function myFunction(id, num) {

                                            var total_price_money = document.getElementById("total_price_money_" + id)
                                                .getAttribute('data-price');
                                            document.getElementById("p_" + id).innerHTML = currencyFormat(
                                                total_price_money * num);
                                            var id = document.getElementById("total_price_money_" + id).getAttribute(
                                                'data-id');
                                            document.getElementById("id_" + id).value = id;
                                            document.getElementById("num_" + id).value = num;
                                            document.getElementById("demo").disabled = false;

                                        }

                                        function currencyFormat(num) {
                                            return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + 'VND'
                                        }

                                        function addtocart(prod_qty) {
                                            var quantity = parseInt(prod_qty);
                                            if (quantity == 0) {
                                                document.getElementById("addtocartButton").disabled = true;
                                            }

                                        }
                                        </script>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" class="actions">

                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label> <input type="text"
                                                        name="coupon_code" class="input-text" id="coupon_code" value=""
                                                        placeholder="Coupon code"> <button type="submit" class="button"
                                                        name="apply_coupon" value="Apply coupon">Áp dụng phiếu giảm
                                                        giá</button>
                                                </div>

                                                <button type="submit" class="button" name="update_cart"
                                                    value="Update_cart"id="demo" disabled>Cập nhật giỏ hàng</button>


                                                <input type="hidden" id="woocommerce-cart-nonce"
                                                    name="woocommerce-cart-nonce" value="0c5bd859d8"><input
                                                    type="hidden" name="_wp_http_referer"
                                                    value="/commerce-modern/cart/">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Tổng số giỏ hàng</h2>
                                    <table class="shop_table shop_table_responsive" cellspacing="0">
                                        <tbody>
                                            <tr class="order-total">
                                                <th>Toàn bộ</th>
                                                <td data-title="Total"><strong><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{number_format($cart_shop['weight'],0)}}</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="wc-proceed-to-checkout">

                                        <a href="{{route('client_info')}}" class="checkout-button button alt wc-forward">
                                            Tiến hành kiểm tra</a>
                                    </div>


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