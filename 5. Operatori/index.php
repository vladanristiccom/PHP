<?php 

	$a = 5;

	$b = 2;


	echo $a ** $b;

	echo "<hr>";

	$a = $a + $b;

	$a += $b;

	$a == $b;

	echo 2 === "2";

	echo "<br>";

	echo $a !== $b;

	echo "<br>";

	$pom1 = 7;

	$pom2 = 9;

	echo $pom1 <=> $pom2;

	echo "<br>";

	echo ++$pom1;

	echo "<br>";

	if($pom1 > 5 AND $pom2 < 11) {
		echo "Test1";
	}

	echo "<hr>";

	$ime = "Pera";
	$prezime = "Peric";

	$ime .= $prezime;

	echo $ime . $prezime;

	echo "<hr>";

	

?>