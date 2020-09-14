<?php

/**
 * Resume Builder Functions
 * File for creating functions for use in Resume Builder.
 * PHP version 7.3.8
 * 
 * @author Melvin D. Lerch <mdl713@hotmail.com>
 * @link   https://github.com/mdl713/resume-page-builder
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