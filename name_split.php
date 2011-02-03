<?php
	

	function name_split($string, $return = "", $order = "ln_fn", $char = ","){
		$new_array = explode($char,$string);
		$arr['first_name'] = trim($new_array[1]);
		$arr['last_name'] = trim($new_array[0]);
		$arr['full_name'] = $arr['first_name']." ".$arr['last_name'];
		// return = full, first, last 
		switch ($return) {
			case 'first':
				return $arr['first_name'];
				break;
				
			case 'last':
				return $arr['last_name'];
				break;
				
			case 'full':
				return $arr['full_name'];
				break;
				
			default:
				return $arr;
				break;
		}
	}
	
	var_dump(name_split("Fiscus, JD", "first"));
	
?>