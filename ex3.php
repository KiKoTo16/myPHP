<!DOCTYPE html>
<html>
<head>
	<title> Excercise 3 </title>
</head>
<body>
	<?php
	$x = 8;

	echo "Value is now " . ($x) . "<br>";
	$x += 2;
	echo "Add 2. Value is now " . ($x) . "<br>";
	$x -= 4;
	echo "Subtract 4. Value is now " . ($x) . "<br>";
	$x *= 5;
	echo "Multiply by 5. Value is now " . ($x) . "<br>";
	$x /= 3;
	echo "Divide by 3. Value is now " . ($x) . "<br>";
	$x = ++$x;
	echo "Increment value by one. Value is now " . ($x) . "<br>";
	$x = --$x;
	echo "Decrement value by one. Value is now" . ($x) . "<br>";
	?>
</body>
</html>