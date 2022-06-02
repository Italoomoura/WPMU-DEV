<?php
	
    function customer_id() {
		if(is_user_logged_in()) {
			$userID = get_current_user_id();
			return "Customer ID: " . $userID;
		}else {
			return;
		}
	}

add_shortcode('getCustomerID', 'customer_id');

?>