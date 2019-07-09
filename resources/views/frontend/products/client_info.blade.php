@extends('frontend.master')
@section('content')
<div id="content" role="main">
    <article id="post-106" class="post-106 page type-page status-publish hentry">
        <div class="entry-content">
            <div class="section vc_custom_1500983367121">
                <div class="section-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 verso-text-light">
                                <h1 class="text-left  vc_custom_1500983581490">
                                    Kiểm tra</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-content verso-default-page-padding section-commerce ">
                    <div class="container">
                        <div class="woocommerce">
                            <form name="checkout" method="post" class="checkout woocommerce-checkout" action=""
                                enctype="multipart/form-data" novalidate="novalidate">
                                <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi tiết thanh toán</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                    id="billing_first_name_field" data-priority="10"><label
                                                        for="billing_first_name" class="">Tên&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><input
                                                        type="text" class="input-text " name="billing_first_name"
                                                        id="billing_first_name" placeholder="" value=""
                                                        autocomplete="given-name"></p>
                                                <p class="form-row form-row-last validate-required"
                                                    id="billing_last_name_field" data-priority="20"><label
                                                        for="billing_last_name" class="">Họ&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><input type="text"
                                                        class="input-text " name="billing_last_name"
                                                        id="billing_last_name" placeholder="" value=""
                                                        autocomplete="family-name"></p>
                                                <p class="form-row form-row-wide" id="billing_company_field"
                                                    data-priority="30"><label for="billing_company" class="">Tên công
                                                        ty&nbsp;<span class="optional">(nếu có)</span></label><input
                                                        type="text" class="input-text " name="billing_company"
                                                        id="billing_company" placeholder="" value=""
                                                        autocomplete="organization"></p>
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated"
                                                    id="billing_country_field" data-priority="40"><label
                                                        for="billing_country" class="">Quốc gia&nbsp;<abbr

                                                            class="required" title="required">*</abbr></label>
                                                    <select name="billing_country" id="billing_country"
                                                        class="country_to_state country_select select2-hidden-accessible"
                                                        autocomplete="country" tabindex="-1" aria-hidden="true" style="width: 100%;">
                                                        <option value="">Select a country…</option>
                                                        <option value="VN" selected="selected">Vietnam</option>
                                                    </select>
                                                    <span
                                                        class="select2 select2-container select2-container--default select2-container--below"
                                                        dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                aria-labelledby="select2-billing_country-container"
                                                                role="combobox"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-billing_country-container"
                                                                    role="textbox" aria-readonly="true"
                                                                    title="Vietnam">Vietnam</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span><noscript><button
                                                            type="submit" name="woocommerce_checkout_update_totals"
                                                            value="Update country">Update country</button></noscript>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_address_1_field" data-priority="50"><label
                                                        for="billing_address_1" class="">Địa chỉ đường phố&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><input
                                                        type="text" class="input-text " name="billing_address_1"
                                                        id="billing_address_1"
                                                        placeholder="House number and street name" value=""
                                                        autocomplete="address-line1"></p>
                                                <p class="form-row form-row-wide address-field"
                                                    id="billing_address_2_field" data-priority="60"
                                                    style="display: none;"><input type="text" class="input-text "
                                                        name="billing_address_2" id="billing_address_2"
                                                        placeholder="Apartment, suite, unit etc. (optional)" value=""
                                                        autocomplete="address-line2"></p>
                                                <p class="form-row form-row-wide address-field validate-postcode"
                                                    id="billing_postcode_field" data-priority="65"
                                                    data-o_class="form-row form-row-wide address-field validate-postcode">
                                                    <label for="billing_postcode" class="">Mã bưu điện / ZIP&nbsp;<span
                                                            class="optional">(tùy chọn)</span></label><input type="text"
                                                        class="input-text " name="billing_postcode"
                                                        id="billing_postcode" placeholder="" value=""
                                                        autocomplete="postal-code"></p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_city_field" data-priority="70"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="billing_city" class="">Thị trấn / Thành phố &nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><input
                                                        type="text" class="input-text " name="billing_city"
                                                        id="billing_city" placeholder="" value=""
                                                        autocomplete="address-level2"></p>
                                                <p class="form-row form-row-wide address-field validate-state"
                                                    id="billing_state_field" style="display: none"
                                                    data-o_class="form-row form-row-wide address-field validate-state">
                                                    <label for="billing_state" class="">State / County&nbsp;<span
                                                            class="optional">(optional)</span></label><input
                                                        type="hidden" class="hidden" name="billing_state"
                                                        id="billing_state" value="" placeholder=""></p>
                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                    id="billing_phone_field" data-priority="100"><label
                                                        for="billing_phone" class="">Điện thoại&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><input
                                                        type="tel" class="input-text " name="billing_phone"
                                                        id="billing_phone" placeholder="" value="" autocomplete="tel">
                                                </p>
                                                <p class="form-row form-row-wide validate-required validate-email"
                                                    id="billing_email_field" data-priority="110"><label
                                                        for="billing_email" class="">Email address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><input
                                                        type="email" class="input-text " name="billing_email"
                                                        id="billing_email" placeholder="" value=""
                                                        autocomplete="email username"></p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>
                                        <div class="woocommerce-additional-fields">
                                            <h3>Thêm thông tin</h3>
                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p class="form-row notes" id="order_comments_field" data-priority="">
                                                    <label for="order_comments" class="">Ghi chú đặt hàng&nbsp;<span
                                                            class="optional">(tùy chọn)</span></label><textarea
                                                        name="order_comments" class="input-text " id="order_comments"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                                        rows="2" cols="5"></textarea></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Toàn bộ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Blue headphones&nbsp; <strong class="product-quantity">× 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">£</span>40.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">£</span>40.00</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Toàn bộ</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">£</span>40.00</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <div class="form-row place-order">
                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text"></div>
                                                <p class="form-row validate-required">
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input type="checkbox"
                                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                            name="terms" id="terms">
                                                        <span class="woocommerce-terms-and-conditions-checkbox-text">
                                                            Tôi đã đọc và đồng ý với các điều khoản và điều kiện của
                                                            trang web<a
                                                                href="#"
                                                                class="woocommerce-terms-and-conditions-link"
                                                                target="_blank"></a></span>&nbsp;<span
                                                            class="required">*</span>
                                                    </label>
                                                    <input type="hidden" name="terms-field" value="1">
                                                </p>
                                            </div>
                                            <button type="submit" class="button alt"
                                                name="woocommerce_checkout_place_order" id="place_order"
                                                value="Place order" data-value="Place order">Đặt hàng</button>
                                            <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                name="woocommerce-process-checkout-nonce" value="898b4e76f1"><input
                                                type="hidden" name="_wp_http_referer"
                                                value="/commerce-modern/?wc-ajax=update_order_review">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection