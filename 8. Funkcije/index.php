<?php 

	echo saberi(1,2) . "<br>";

	function saberi($broj_1 = 0, $broj_2 = 0)
	{
		return $broj_2 + $broj_1;
	}

	$zbir = saberi(2, 5);

	echo $zbir;

?>