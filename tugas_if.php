<?php

	echo "<h1>TUGAS IF</h1><br>";

	$a = 50;
	$b = 7;

	if ($a % 2 == 0) { 
    	echo "$a Merupakan Bilangan Genap";
	} else {
  	  echo "$a Merupakan Bilangan Ganjil";
	}
	if ($b % 2 === 0) :
 	   echo "<br> $b Merupakan Bilangan Genap";
	else :
 	   echo "<br> $b Merupakan Bilangan Ganjil";
endif;

?>
