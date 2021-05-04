<?php
	require_once('units.php');

	function convertToMeters($value, $fromUnit)
	{
		if (array_key_exists($fromUnit, LENGTHS)) {
			return $value * LENGTHS[$fromUnit];
		} else {
			return "Unsupported unit";
		}
	}

	function convertFromMeters($value, $toUnit)
	{
		if (array_key_exists($toUnit, LENGTHS)) {
			return $value / LENGTHS[$toUnit];			
		} else {
			return "Unsupported unit";
		}
	}

	function convertLength($value, $fromUnit, $toUnit)
	{
		$meterValue = convertToMeters($value, $fromUnit);
		$newValue = convertFromMeters($meterValue, $toUnit);

		return $newValue;
	}
?>