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
$name = $header['name'];
$purpose = $header['purpose'];

echo '<title>Resume for ' . $name . '</title>';

echo '<h1>Resume for ' . $name . '</h1>';
echo '<p>' . $purpose . '</p>';

for ($i = 0; $i < sizeof($body); $i++) {
	$title = $body[$i]['section'];
	$details = $body[$i]['values'];

	echo '<h2>' . $title . '</h2>';

	for ($k = 0; $k < sizeof($details); $k++) {
		$inner = $details[$k];

		display_fields($inner);	
	}	
}
