<?php
	
		$first = 0;
		$second = 0;
		$operation = "";
		if (isset($_GET['num1'])) {
			$first = $_GET['num1'];
			
		}
		if (isset($_GET['num2'])) {
			$second = $_GET['num2'];
		}
		if (isset($_GET['op'])) {
			$operation = $_GET['op'];
		}
		
		
		$result = 0;
		
		#functions for the math ops
	    function add($x, $y) {
			$result=  $x + $y;
			print("Result is: ");
			print($result);
		}
		
		function sub($x, $y) {
			$result =  $x - $y;
			print("Result is: ");
			print($result);
		}
		
		function mult($x, $y) {
			if ($x == 0 or $y == 0) {
				$result =  0;
				
			}
			else {
				$result =  $x * $y;
				
			}
			print("Result is: ");
				print($result);
		}
		
		function div($x, $y) {
			if ($y == 0 ) {
				print("Invalid input. ");
				$result =  $x ;
			}
			else {
				$result =  $x / $y;
			}
			print("Result is: ");
				print($result);
		}
		$addin = "add";
		$subin = "sub";
		$multin = "mult";
		
		#determine what op is to be performed.
		if (strcmp($operation, $addin) == 0 ) {
			
			add($first, $second);
		}
		elseif (strcmp($operation, $subin) ==0 ) {
			sub($first, $second);
		}
		elseif (strcmp($operation, $multin) == 0 ) {
			mult($first, $second);
		}
		else {
			div($first, $second);
		}
		
?>
