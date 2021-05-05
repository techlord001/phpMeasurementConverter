<?php

  require_once('includes/mass.php');
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

    $toValue = convertMass($fromValue, $fromUnit, $toUnit);
  }

	$massUnits = array(
		"ounces",
		"pounds",
		"stones",
		"long tons",
		"short tons",
		"milligrams",
		"grams",
		"kilograms",
		"metric tonnes"
	);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Mass</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <div id="main-content">

    <h1>Convert Mass</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php { echo $fromValue;} ?>" />&nbsp;
        <select name="fromUnit">
					<?php
						foreach ($massUnits as $unit) {
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
						foreach ($massUnits as $unit) {
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
