<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'Name Splitter',
	'pi_version' => '1.0',
	'pi_author' => 'JD Fiscus',
	'pi_author_url' => '',
	'pi_description' => 'Splits a name for you',
	'pi_usage' => Name_splitter::usage()
);

 class Name_splitter {
	var $return_data = "";
	
	function Name_splitter() {
		$this->EE =& get_instance();
		// Parameters
		$return = $this->EE->TMPL->fetch_param('return');
		
		$new_array = explode(',', $this->EE->TMPL->tagdata);
		
		$arr['first_name'] = trim($new_array[1]);
		$arr['last_name'] = trim($new_array[0]);
		$arr['full_name'] = $arr['first_name']." ".$arr['last_name'];
		
		// return = full, first, last 
		switch ($return) {
			case 'first':
				$this->return_data = $arr['first_name'];
				break;

			case 'last':
				$this->return_data = $arr['last_name'];
				break;

			case 'full':
				$this->return_data = $arr['full_name'];
				break;

			default:
				$this->return_data = $arr;
				break;
		}
	}
	
	public function usage() {
		
	}
	
}
