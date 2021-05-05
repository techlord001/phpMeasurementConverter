<?php
	require_once('length.php');
	require_once('units.php');
	require_once('floatToString.php');

	function convertSpeed($value, $fromUnit, $toUnit)
	{
		if ($fromUnit == 'knots') {
			$fromUnit = 'nauticalMilesPerHour';
		}

		if ($toUnit == 'knots') {
			$toUnit = 'nauticalMilesPerHour';
		}

		list($fromDist, $fromTime) = explode('Per', $fromUnit);
		list($toDist, $toTime) = explode('Per', $toUnit);

		if ($fromTime == 'Hour') {
			$value /= 3600;
		}

		$value = convertLength($value, $fromDist, $toDist);

		if ($toTime == 'Hour') {
			$value *= 3600;
		}

		return floatToString($value);
	}
?>