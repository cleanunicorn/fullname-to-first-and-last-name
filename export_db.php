<?php

include "init.php";

$applicants = $db->query("SELECT * FROM `applicants`");

$file = '/tmp/applicants.txt';
$file_content = '';

foreach($applicants as $applicant)
{
	$file_content .= $applicant['id'] . "|" . $applicant['name'] ."\n";
}

file_put_contents($file, $file_content);

$copayers = $db->query("SELECT * FROM `copayers`");

$file = '/tmp/copayers.txt';
$file_content = '';

foreach($copayers as $copayer)
{
	$file_content .= $copayer['id'] . "|" . $copayer['name'] ."\n";
}

file_put_contents($file, $file_content);
