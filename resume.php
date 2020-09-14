<?php

/**
 * Resume Builder
 * Render JOSN template.
 * PHP version 7.3.8
 * 
 * @author Melvin D. Lerch <mdl713@hotmail.com>
 * @link   https://github.com/mdl713/resume-page-builder
 */

namespace resume;

use function resume\display_fields;

$resume = json_decode(file_get_contents('data/resume.json'), true);

$header = $resume['header'];
$body = $resume['body'];
$name = $header[0]['value'];

echo '<title>Resume for ' . $name . '</title>';

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
