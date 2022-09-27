<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise</title>
</head>
<body>
	<h1>Array Exercise 1</h1>

	<?php
		$weather=array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

		echo "<p>We've seen all kinds of weather this month.<br>
		At the beginning of the month, we had $weather[5] and $weather[6].<br>
		Then came $weather[1] with a few $weather[2] and some $weather[0].<br>
		At least we didn't get any $weather[3] or $weather[4].</p>"

	?>
	<h1>Array Exercise 2</h1>
	 <h4>Value of the Array</h4>

	<?php
	 $cities=array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
	print_r($cities);
	 ?>

	 <h4>Print with commas</h4>

	 <?php
	 foreach ($cities as $c){
	 	echo "$c, ";
	 }

	?>

	<?php
	echo "<h4>Sorted Array and Print in an unordered list</h4>";
	sort($cities);
	echo "<ul>";
	foreach($cities as $c){
		echo "<li>$c</li><br>";
	}
	echo "</ul>"
	?>
	<?php
	echo "<h4> Adding Cities</h4>";
	array_push($cities, "Lost Angeles", "Calcutta", "Osaka", "Beijing");
	foreach ($cities as $c) {
		echo "$c, ";
	}
	?>
	<?php
	echo"<h4>New Value of the Array</h4>";
	print_r($cities);
	?>
	<?php
	echo "<h4>Sorted Array with added cities in an unordered list</h4>";
	sort($cities);
	echo "<ul>";
	foreach($cities as $c){
		echo "<li>$c</li><br>";
	}
	echo "</ul>"

	?>

</body>
</html>