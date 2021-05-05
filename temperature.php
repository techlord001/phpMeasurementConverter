<?php

  require_once('includes/temperature.php');

  // Default empty variables
  $fromValue = '';
  $fromUnit = '';
  $toUnit = '';
  $toValue = '';

  /* Check conversion request on submit */
  if ($_POST['submit']) {
    $fromValue = $_POST['fromValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];

    $toValue = convertTemperature($fromValue, $fromUnit, $toUnit);
  }

	$tempUnits = array(
		"Celsius",
		"Fahrenheit",
		"Kelvin"
	);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Temperature</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <div id="main-content">

    <h1>Convert Temperature</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php { echo $fromValue;} ?>" />&nbsp;
        <select name="fromUnit">
					<?php
						foreach ($tempUnits as $unit) {
							echo "<option value=\"" . strtolower($unit) . "\"";
							if ($fromUnit == strtolower($unit)) {
								{
									echo " selected";
								}
							}
							echo ">" . $unit . "</option>";
						}
					?>
        </select>
      </div>

      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php { echo $toValue;} ?>" />&nbsp;
        <select name="toUnit">
					<?php
						foreach ($tempUnits as $unit) {
							echo "<option value=\"" . strtolower($unit) . "\"";
							if ($toUnit == strtolower($unit)) {
								{
									echo " selected";
								}
							}
							echo ">" . $unit . "</option>";
						}
					?>
        </select>

      </div>

      <input type="submit" name="submit" value="Submit" />
    </form>

    <br/>
    <a href="index.php">Return to menu</a>

  </div>
</body>
</html>
