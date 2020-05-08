<?php 

	$pom = "Neki string";

	$pom = 'Neki string';

	$duzina = strlen($pom);

	echo $duzina;

	echo "<br>";

	echo str_word_count($pom);

	echo "<br>";

	echo strrev($pom);

	echo "<hr>";

	$broj = 4;

	$broj2 = 4.25;

	$broj3 = 4.2325;

	echo (int)$broj3;

	echo "<br>";

	echo floor($broj2);

	echo "<br>";

	$broj4 = 4.9;

	echo round($broj4);

	echo "<hr>";

	define("PI", 3.14);

	echo PI;

?>