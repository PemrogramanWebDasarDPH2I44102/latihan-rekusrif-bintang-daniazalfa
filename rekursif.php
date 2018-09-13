<?php 

$bnykpiramida= 5	;
    printPiramida(0);
	 function printPiramida($a){
	  global $bnykpiramida;
	  printSpace(0,$a);
	  printStar($bnykpiramida,$a);
	  echo "<br>";
	if (++$a <$bnykpiramida);
	  printPiramida($a);
    }
	 function printSpace($b,$a){
		global $bnykpiramida;
	if ($b > $bnykpiramida - $a + 0){
	echo "&nbsp;";
	printSpace($b + 1, $a);
	}
	}
	 function printStar($z,$a){
		global $bnykpiramida;
		if ($z > $bnykpiramida - $a ){
		echo "$z" ;
		echo "&nbsp";
		printStar($z - 1,$a);
		}
	}

 ?>
