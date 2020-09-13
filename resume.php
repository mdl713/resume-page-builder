<?php

/**
 * Render JSON Resume
 * 
 * Melvin D. Lerch
 * 2020
 */

namespace resume;

use function resume\display_fields;

$resume = json_decode(file_get_contents('data/resume.json'), true);

$header = $resume['header'];
$body = $resume['body'];

display_fields($header);

echo '</br>';

for ($i = 0; $i < sizeof($body); $i++) {
	$title = $body[$i]['section'];
	$details = $body[$i]['values'];

	echo '<strong>' . $title . '</strong>' . '</br></br>';

	for ($k = 0; $k < sizeof($details); $k++) {
		$inner = $details[$k];

		display_fields($inner);

		echo '</br>';
	}	
}

// echo '</br></br>'; print_r($resume);
