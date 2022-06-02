<?php
	
    function customer_id() {
		if(is_user_logged_in()) {
			$cID = get_current_user_id();
			return "Customer ID: " . $cID;
		}else {
			return;
		}
	}

add_shortcode('getCustomerID', 'customer_id');

?>