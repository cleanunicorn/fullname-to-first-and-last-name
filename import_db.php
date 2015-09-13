<?php

include "init.php";

$applicants_file = fopen('/tmp/applicants.txt', 'r');

while( !feof($applicants_file) )
{
	$applicant = fgetcsv($applicants_file, 0, '|');

	$last_name = "";
	$first_name = "";

	$name_parts = explode(" ", $applicant[1]);

	$last_name = $name_parts[0];
	$first_name = implode(" ", array_slice($name_parts, 1));

	echo "first_name = $first_name \n";
	echo "last_name = $last_name \n";
	echo "\n";

	$db->query("UPDATE `applicants` SET `first_name`='{$first_name}', `last_name`='{$last_name}' WHERE `id`='{$applicant[0]}'");

}

$copayers_file = fopen('/tmp/copayers.txt', 'r');

while( !feof($copayers_file) )
{
	$copayer = fgetcsv($copayers_file, 0, '|');

	$last_name = "";
	$first_name = "";

	$name_parts = explode(" ", $copayer[1]);

	$last_name = $name_parts[0];
	$first_name = implode(" ", array_slice($name_parts, 1));

	echo "first_name = $first_name \n";
	echo "last_name = $last_name \n";
	echo "\n";

	$db->query("UPDATE `copayers` SET `first_name`='{$first_name}', `last_name`='{$last_name}' WHERE `id`='{$copayer[0]}'");

}
