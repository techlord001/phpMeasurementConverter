<?php

  require_once('includes/area.php');

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

    $toValue = convertSqLength($fromValue, $fromUnit, $toUnit);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

  <div id="main-content">

    <h1>Convert Length</h1>

    <form action="" method="post">

      <div class="entry">
        <label>From:</label>&nbsp;
        <input type="text" name="fromValue" value="<?php { echo $fromValue;} ?>" />&nbsp;
        <select name="fromUnit">
          <option value="sqInches"<?php
            if ($fromUnit == 'sqInches') {
              {
                echo " selected";
              }
            }
          ?>>inches&#178;</option>
          <option value="sqFeet"<?php
            if ($fromUnit == 'sqFeet') {
              {
                echo " selected";
              }
            }
          ?>>feet&#178;</option>
          <option value="sqYards"<?php
            if ($fromUnit == 'sqYards') {
              {
                echo " selected";
              }
            }
          ?>>yards&#178;</option>
          <option value="sqMiles"<?php
            if ($fromUnit == 'sqMiles') {
              {
                echo " selected";
              }
            }
          ?>>miles&#178;</option>
          <option value="sqMillimeters"<?php
            if ($fromUnit == 'sqMillimeters') {
              {
                echo " selected";
              }
            }
          ?>>millimeters&#178;</option>
          <option value="sqCentimeters"<?php
            if ($fromUnit == 'sqCentimeters') {
              {
                echo " selected";
              }
            }
          ?>>centimeters&#178;</option>
          <option value="sqMeters"<?php
            if ($fromUnit == 'sqMeters') {
              {
                echo " selected";
              }
            }
          ?>>meters&#178;</option>
          <option value="sqKilometers"<?php
            if ($fromUnit == 'sqKilometers') {
              {
                echo " selected";
              }
            }
          ?>>kilometers&#178;</option>
          <option value="acres"<?php
            if ($fromUnit == 'acres') {
              {
                echo " selected";
              }
            }
          ?>>acres</option>
          <option value="hectares"<?php
            if ($fromUnit == 'hectares') {
              {
                echo " selected";
              }
            }
          ?>>hectares</option>
        </select>
      </div>

      <div class="entry">
        <label>To:</label>&nbsp;
        <input type="text" name="toValue" value="<?php { echo $toValue;} ?>" />&nbsp;
        <select name="toUnit">
          <option value="sqInches"<?php
            if ($toUnit == 'sqInches') {
              {
                echo " selected";
              }
            }
          ?>>inches&#178;</option>
          <option value="sqFeet"<?php
            if ($toUnit == 'sqFeet') {
              {
                echo " selected";
              }
            }
          ?>>feet&#178;</option>
          <option value="sqYards"<?php
            if ($toUnit == 'sqYards') {
              {
                echo " selected";
              }
            }
          ?>>yards&#178;</option>
          <option value="sqMiles"<?php
            if ($toUnit == 'sqMiles') {
              {
                echo " selected";
              }
            }
          ?>>miles&#178;</option>
          <option value="sqMillimeters"<?php
            if ($toUnit == 'sqMillimeters') {
              {
                echo " selected";
              }
            }
          ?>>millimeters&#178;</option>
          <option value="sqCentimeters"<?php
            if ($toUnit == 'sqCentimeters') {
              {
                echo " selected";
              }
            }
          ?>>centimeters&#178;</option>
          <option value="sqMeters"<?php
            if ($toUnit == 'sqMeters') {
              {
                echo " selected";
              }
            }
          ?>>meters&#178;</option>
          <option value="sqKilometers"<?php
            if ($toUnit == 'sqKilometers') {
              {
                echo " selected";
              }
            }
          ?>>kilometers&#178;</option>
          <option value="acres"<?php
            if ($toUnit == 'acres') {
              {
                echo " selected";
              }
            }
          ?>>acres</option>
          <option value="hectares"<?php
            if ($toUnit == 'hectares') {
              {
                echo " selected";
              }
            }
          ?>>hectares</option>
        </select>

      </div>

      <input type="submit" name="submit" value="Submit" />
    </form>

    <br/>
    <a href="index.php">Return to menu</a>

  </div>
</body>
</html>
