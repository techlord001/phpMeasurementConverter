<?php
	require_once('units.php');

	function convertToSqMeters($value, $fromUnit)
	{
		$fromUnit = strtolower(str_replace('sq', '', $fromUnit));
		if (array_key_exists($fromUnit, LENGTHS)) {
			return $value * pow(LENGTHS[$fromUnit], 2);
		} else {
			return "Unsupported unit";
		}
	}

	function convertFromSqMeters($value, $toUnit)
	{
		$toUnit = strtolower(str_replace('sq', '', $toUnit));
		if (array_key_exists($toUnit, LENGTHS)) {
			return $value / pow(LENGTHS[$toUnit], 2);			
		} else {
			return "Unsupported unit";
		}
	}

	function convertSqLength($value, $fromUnit, $toUnit)
	{
		$meterValue = convertToSqMeters($value, $fromUnit);
		$newValue = convertFromSqMeters($meterValue, $toUnit);

		return $newValue;
	}
?>