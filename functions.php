<?php

/**
 * Resume functions
 * 
 * Melvin D. Lerch
 * 2020
 */

namespace resume;

function display_fields($array) {
	$array_length = sizeof($array);

	for ($i = 0; $i < $array_length; $i++) {
		$field = $array[$i]['field'];
		$value = $array[$i]['value'];
	
		echo $field . ': ' . $value . '</br>';
	}
} 