<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$settings = array('enabled'=>null,'splitit_enable_installment_price'=>null);
/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// check for plugin using plugin name
if ( is_plugin_active( 'splitit-installment-payments-enabler/splitit.php' ) ) {
  //plugin is activated
$splitit = new SplitIt();
$settings = $splitit->settings;
}
//if($settings['enabled']!='yes'){
$settings['splitit_enable_installment_price']=null;
//}
?>
<div class="<?php echo ($settings['splitit_enable_installment_price']=='yes')?'cart_total_pricing':''; ?> cart_totals <?php echo ($settings['splitit_enable_installment_price']=='yes')?'clearfix':''; ?> <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

<?php if($settings['splitit_enable_installment_price']=='yes'){ ?>	
<div class="float_left cart-total-inner">
<?php } ?>
	<h2><?php _e( 'Cart totals', 'woocommerce' ); ?></h2>
	<table cellspacing="0" class="shop_table shop_table_responsive">

		<tr class="cart-subtotal">
			<th><?php _e( 'Subtotal', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

		<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

			<tr class="shipping">
				<th><?php _e( 'Shipping', 'woocommerce' ); ?></th>
				<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
			</tr>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) :
			$taxable_address = WC()->customer->get_taxable_address();
			$estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
					? sprintf( ' <small>' . __( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
					: '';

			if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
						<th><?php echo esc_html( $tax->label ) . $estimated_text; ?></th>
						<td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></th>
					<td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

		<tr class="order-total">
			<th><?php _e( 'Total', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>

		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

	</table>
	<?php if($settings['splitit_enable_installment_price']=='yes'){ ?>
	</div>
<?php } else { ?>
<div class="wc-proceed-to-checkout">
			<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
	</div>
<?php } ?>

	

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

<!-- </div> -->
<?php if($settings['splitit_enable_installment_price']=='yes'){ ?>
<div class="cart-monthly-plans">
	<div class="accordian-wrap">
	    <div class="aw-header">
	      <a class="aw-link clearfix">
	        <p class="aw-header-text float_left">0% FINANCING OPTIONS</p>
	        <span class="aw-image float_right"><img src=""></span>
	      </a>
	    </div>
	    <?php	    	
	    	$total_amount_in_cart = WC()->cart->total;
            $depend_upon_cart_total = $settings['splitit_doct'];
            $flag=0;
            $splitit_discount_type = $settings['splitit_discount_type'];
            $instOptions = array(2,3,4,5,6,7,8,9,10,11,12);
            if($splitit_discount_type=="fixed"){
                $instOptions = $settings['splitit_discount_type_fixed'];
            } else {
                if(!empty($depend_upon_cart_total['ct_from'])){
                    foreach ($depend_upon_cart_total['ct_from'] as $k => $v) {
                        if($flag != 1){
                            if($total_amount_in_cart==$v || $total_amount_in_cart==$depend_upon_cart_total['ct_to'][$k] || $total_amount_in_cart<=$v || $total_amount_in_cart <=$depend_upon_cart_total['ct_to'][$k]  ){
                                $flag = 1;
                                $instOptions = $depend_upon_cart_total['ct_instllment'][$k];                                
                            }
                         }

                    }
                }

            }
	    ?>
	    <div class="aw-content">
	    	<?php 
	    	foreach($instOptions as $installment){ 
	    		$split_price = round($total_amount_in_cart / $installment, 3);
	    		?>
		      <div class="aw-item">
		        <div class="aw-effect">
		        	<span class="aw-in-block"><?php echo $installment; ?> Monthly Payments</span>
		        	<span class="aw-in-block"><?php echo wc_price($split_price, array('decimals'=>2)); ?> each</span>
		        </div>
		      </div>
		    <?php } ?>
	    </div>
	</div>
	<div class="aw-checkout-button wc-proceed-to-checkout">
			<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
	</div>
</div>
<?php } ?>
</div>