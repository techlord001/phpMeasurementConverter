<?php
	require_once('units.php');

	function convertToLiters($value, $fromUnit)
	{
		if (array_key_exists($fromUnit, VOLUME_UNITS)) {
			return $value * VOLUME_UNITS[$fromUnit];
		} else {
			return "Unsupported unit";
		}
	}
	
	function convertFromLiters($value, $toUnit)
	{
		if (array_key_exists($toUnit, VOLUME_UNITS)) {
			return $value / VOLUME_UNITS[$toUnit];			
		} else {
			return "Unsupported unit";
		}
	}
	
	function convertVolume($value, $fromUnit, $toUnit)
	{
		$literValue = convertToLiters($value, $fromUnit);
		$newValue = convertFromLiters($literValue, $toUnit);

		return $newValue;
	}
?>