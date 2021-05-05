<?php

  require_once('includes/speed.php');
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

    $toValue = convertSpeed($fromValue, $fromUnit, $toUnit);
  }

	$speedUnits = array(
		"feet per second",
		"miles per hour",
		"meters per second",
		"kilometers per hour",
		"knots"
	);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Speed</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <div id="main-content">

    <h1>Convert Speed</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php { echo $fromValue;} ?>" />&nbsp;
        <select name="fromUnit">
					<?php
						foreach ($speedUnits as $unit) {
							echo "<option value=\"" . camelCase($unit) . "\"";
							if ($fromUnit == camelCase($unit)) {
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
						foreach ($speedUnits as $unit) {
							echo "<option value=\"" . camelCase($unit) . "\"";
							if ($toUnit == camelCase($unit)) {
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
