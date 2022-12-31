<?php

while(True){
	$num1 = readline("Enter num1: ");
	$num2 = readline("Enter num2: ");
	if($num1 == 0 || $num2 == 0) break;
	if($num1 > 100 || $num2 > 100){
		echo "Both numbers must be less then or equal to 100!\n";
		continue;
	}
	$product = $num1 * $num2;
	echo "Product of num1 and num2: $product\n";
}
