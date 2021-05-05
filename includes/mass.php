<?php
	require_once('units.php');
	require_once('floatToString.php');

	function convertToKilograms($value, $fromUnit)
	{
		if (array_key_exists($fromUnit, MASS_UNITS)) {
			return $value * MASS_UNITS[$fromUnit];
		} else {
			return "Unsupported unit";
		}
	}

	function convertFromKilograms($value, $toUnit)
	{
		if (array_key_exists($toUnit, MASS_UNITS)) {
			return $value / MASS_UNITS[$toUnit];			
		} else {
			return "Unsupported unit";
		}
	}

	function convertMass($value, $fromUnit, $toUnit)
	{
		$meterValue = convertToKilograms($value, $fromUnit);
		$newValue = floatToString(convertFromKilograms($meterValue, $toUnit));

		return $newValue;
	}
?>