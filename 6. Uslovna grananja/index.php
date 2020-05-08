<?php

	$pom1 = 0;
	$pom2 = 6;

	if($pom2 > $pom1 AND $pom2 > 6) {
		echo "Tacno je";
	} else {
		echo "Nije tacno";
	}


	echo "<br>";

	if($pom1 > 2) {
		echo "Prvi uslov ispunjen";
	} else if($pom1 % 2 == 0) {
		echo "Alternativni uslov ispunjen";
	} else {
		echo "Nijedan uslov nije ispunjen";
	}

	echo "<hr>";

	$boja = "zelena";

	if($boja == "plava") {
		echo "Boja je plava";
	} else if ($boja == "crvena") {
		echo "Boja je crvena";
	} else {
		echo "Boja nije ni crvena ni plava";
	}

	echo "<br>";

	switch ($boja) {
		case 'plava':
			echo "Boja je plava";
			break;
		case 'crvena':
			echo "Boja je crvena";
			break;
		default:
			echo "Boja nije ni crvena ni plava";
			break;
	}

?>