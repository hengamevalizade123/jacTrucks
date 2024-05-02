<section class="o-section c-section--price-determination">
    <div class="o-section__wrapper">
        <div class="c-price-determination">
            <div class="c-price-determination__text">
                <h2>
                    نحوه تعیین قیمت روز کامیونت جک
                </h2>
                <p>
                    در خصوص نحوه تعیین قیمت روز کامیونت جک، می‌توان به موارد زیادی اشاره کرد. شرایط جامعه، نوع محصول و
                    ظرفیت‌ آن می‌تواند بسیار تاثیر‌گذار باشد، به علاوه شرایط بازار نیز می‌تواند منجر به تغییر قیمت این
                    خودرو
                    نیمه سنگین شده و این قیمت از زمان تولید تا رسیدن به دست مصرف کننده‌ متفاوت است.
                    <br>
                    اعلام زمان تحویل (فوری، در‌آینده) نیز می‌تواند در تعیین قیمت اعلامی از سوی شرکت موثر باشد، بر همین
                    اساس
                    شرکت‌های تولید‌کننده خودرو، به دلیل شرایط بازار و هزینه‌های تولید سعی می‌‌کنند تا حد امکان ضمن ثبات
                    قیمت‌ها، محصول را با کمترین هزینه به دست مصرف کننده برسانند.
                </p>
            </div>
            <div class="c-price-determination__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price-de.webp" alt="">
            </div>
<div class="c-price-determination__list">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/table-price.png" alt=""></div>
        </div>
    </div>
</section>


<?php

add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

function woodmart_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}

//Rounded up price
add_filter( 'woocommerce_get_price_excluding_tax', 'round_price_product', 10, 1 );
add_filter( 'woocommerce_get_price_including_tax', 'round_price_product', 10, 1 );
add_filter( 'woocommerce_tax_round', 'round_price_product', 10, 1);
add_filter( 'woocommerce_get_price', 'round_price_product', 10, 1);

function round_price_product( $price ){
    // Return rounded price
    return ceil( $price/100 )*100;
}

add_action( 'woocommerce_thankyou', 'themefars_register_guests_by_phone', 9999 );

function themefars_register_guests_by_phone( $order_id )
{
$country_code = "98"; // default country code
// Get order info and get customer email for registering
$order = wc_get_order( $order_id );
$email = $order->get_billing_email();
// phone
$phone_no = substr( $order->get_billing_phone(), 1 );
$phone = $country_code . $phone_no;
if ( ! username_exists( $phone ) )
{
$customer_id = wp_insert_user([
'user_login' => $phone,
'first_name' => $order->get_billing_first_name(),
'last_name' => $order->get_billing_last_name(),
'user_email' => ( !empty( $email ) ) ? $email : ''
]);
if ( is_wp_error( $customer_id ) )
{
throw new Exception( $customer_id->get_error_message() );
}

// update digits user meta
update_user_meta($customer_id, 'digits_phone_no', $phone_no );
update_user_meta($customer_id, 'digits_phone', $phone );
update_user_meta($customer_id, 'digt_countrycode', $country_code );

// Auto set cookie for new user
wc_update_new_customer_past_orders( $customer_id );
wc_set_customer_auth_cookie( $customer_id );
}
else
{
// Auto set cookie for existing user
$user = get_user_by('login', $phone );
wc_update_new_customer_past_orders( $user->ID );
}
}
