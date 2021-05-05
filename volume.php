<?php

  require_once('includes/volume.php');
	require_once('includes/camelCase.php');

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

    $toValue = convertVolume($fromValue, $fromUnit, $toUnit);
  }

	$volumeUnits= array(
		'cubic inches',
		'cubic feet',
		'UK gallons',
		'UK quarts',
		'UK pints',
		'UK cups',
		'UK ounces',
		'UK tablespoons',
		'UK teaspoons',
		'US gallons',
		'US quarts',
		'US pints',
		'US cups',
		'US ounces',
		'US tablespoons',
		'US teaspoons',
		'cubic centimeters',
		'cubic meters',
		'liters',
		'milliliters'
	);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Volume</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <div id="main-content">

    <h1>Convert Volume</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php { echo $fromValue;} ?>" />&nbsp;
        <select name="fromUnit">
					<?php
						foreach ($volumeUnits as $unit) {
							echo "<option value=\"" . camelCase($unit) . "\"";
							if ($fromUnit == $unit) {
								{
									echo " selected";
								}
							}
							echo ">" . ucwords($unit) . "</option>";
						}
					?>
        </select>
      </div>

      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php { echo $toValue;} ?>" />&nbsp;
        <select name="toUnit">
					<?php
						foreach ($volumeUnits as $unit) {
							echo "<option value=\"" . camelCase($unit) . "\"";
							if ($toUnit == $unit) {
								{
									echo " selected";
								}
							}
							echo ">" . ucwords($unit) . "</option>";
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
