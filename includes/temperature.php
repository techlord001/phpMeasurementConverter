<?php
	require_once('units.php');
	require_once('floatToString.php');

	function convertToCelsius($value, $fromUnit)
	{
		switch ($fromUnit) {
			case 'celsius':
				return $value;
				break;
			case 'fahrenheit':
				return ($value - 32) / 1.8;
				break;
			case 'kelvin':
				return $value - 273.15;
				break;
			default:
				return "Unsupported unit";
		}
	}

	function convertFromCelsius($value, $toUnit)
	{
		switch ($toUnit) {
			case 'celsius':
				return $value;
				break;
			case 'fahrenheit':
				return ($value * 1.8) + 32;
				break;
			case 'kelvin':
				return $value + 273.15;
				break;
			default:
				return "Unsupported unit";
		}
	}

	function convertTemperature($value, $fromUnit, $toUnit)
	{
		$celsiusValue = convertToCelsius($value, $fromUnit);
		$newValue = convertFromCelsius($celsiusValue, $toUnit);

		return $newValue;
	}
?>