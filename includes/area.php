<?php
	require_once('units.php');

	function convertToSqMeters($value, $fromUnit)
	{
		if (array_key_exists($fromUnit, UNITS)) {
			return $value * pow(UNITS[$fromUnit], 2);
		} else {
			return "Unsupported unit";
		}
	}
	
	function convertFromSqMeters($value, $toUnit)
	{
		if (array_key_exists($toUnit, UNITS)) {
			return $value / pow(UNITS[$toUnit], 2);			
		} else {
			return "Unsupported unit";
		}
	}
	
	function convertArea($value, $fromUnit, $toUnit)
	{
		$fromUnit = strtolower(str_replace('sq', '', $fromUnit));
		$toUnit = strtolower(str_replace('sq', '', $toUnit));
		$meterValue = convertToSqMeters($value, $fromUnit);
		$newValue = convertFromSqMeters($meterValue, $toUnit);

		return $newValue;
	}
?>