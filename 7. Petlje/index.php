<?php 
	
	$a = 1;

	while ($a < 10) {
		echo "Broj je $a <br>";
		$a++;
	}

	echo "<hr>";

	do {
		echo "Broj je $a <br>";
		$a++;
	} while ($a < 20);

	echo "<hr>";

	for($i = 0; $i < 20; $i++) {
		echo "Broj je $i <br>";
	}

	echo "<hr>";

	$boje = array("crveno", "zeleno", "plavo");

	for ($i = 0; $i < count($boje); $i++) { 
		echo $boje[$i] . "<br>";
	}

	echo "<hr>";

	foreach ($boje as $boja) {
		echo "$boja<br>";
	}

?>