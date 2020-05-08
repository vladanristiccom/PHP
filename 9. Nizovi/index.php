<?php

	// indeksirani nizovi

	$automibili = array("Volvo", "Mercedes", "Audi", 1, 2.5); 

	echo $automibili[0]. "<br>";

	foreach ($automibili as $auto) {
		echo "$auto<br>";
	}

	echo "<hr>";

	// asocijativni nizovi
	$osobe = array(
		"ime" => "Petar", 
		"prezime" => "Petrovic", 
		"godine" => 30,
		"firme" => array("EPS", "Guglu", "MUP")
	);

	echo $osobe["ime"]. "<br>";


	$pom = $osobe['firme'];

	foreach ($pom as $firma) {
		echo "$firma<br>";
	}

	echo "<hr>";

	$salon = array(
		array("Volvo", 23, 5),
		array("Audi", 13, 5),
		array("BMW", 3, 2),
	);

	echo $salon[0][0]. "<br>";

	echo $salon[1][1]. "<br><br>";

	for ($i=0; $i < count($salon); $i++) { 
		
		for ($j=0; $j < count($salon[$i]) ; $j++) { 
			echo $salon[$i][$j] . "<br>";
		}

	}

	echo "<br><br>";

	foreach ($salon as $marka) {
		
		foreach ($marka as $vrednost) {
			
			echo $vrednost . "<br>";

		}

	}

?>