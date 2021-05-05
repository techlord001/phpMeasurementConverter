<?php
/* 
*
* Function to convert scientic notation of a very large or
* very small number into a readable float */
	function floatToString($float, $precision = 10)
		{
			$float = (float) $float; // Confirm variable is float
			$string = number_format($float, $precision, '.', ''); // Format number
			$string = rtrim(rtrim($string, '0'), '.'); // Remove any trailing zeros or decimal

			return $string;
		}
?>