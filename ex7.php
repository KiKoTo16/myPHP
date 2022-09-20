<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercise 7</title>
</head>
<body>
<h1>Exercise 7</h1>
<?php
//table
echo "<table border=\"1\">";
 
//table with numbers 1-7 multiplied by each other, 
//rows. 
for ($row=1; $row<=7; $row++){
  echo "<tr>";
  //columns.
  for ($col=1; $col<=7; $col++){
    //math.
    $x=$col * $row;  
    echo "<td>$x</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>