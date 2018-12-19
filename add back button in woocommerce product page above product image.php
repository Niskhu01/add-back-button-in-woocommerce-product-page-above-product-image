<?php
add_action( 'woocommerce_before_single_product', 'woocommerce_single_product_summary_button', 11);

function woocommerce_single_product_summary_button() {
	echo '<i class="fas fa-chevron-left"></i><a class="back_button" href="#" onclick="window.history.back()">&nbsp; Back</a>';	
}