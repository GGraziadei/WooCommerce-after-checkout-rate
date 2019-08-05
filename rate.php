<?php 

add_filter('woocommerce_thankyou_order_received_text', 'woo_change_order_received_text', 10, 2 );
function woo_change_order_received_text( $str, $order ) {
    $new_str = $str . '<br>
    Lascia una recensione sul servizio offerto.
<div class="rating" data-rate-value=6></div>
<script type="text/javascript" src="/rater.js" />
<script>
$(".rating").rate();

//or for example
var options = {
    max_value: 6,
    step_size: 0.5,
}
$(".rating").rate(options);
</script>
    ';
    return $new_str;
}
