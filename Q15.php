<!DOCTYPE html>
<html>
<head>
	<title>Question 15</title>
</head>
<body>
	<h2><center>Program to print first n even numbers</center></h2><hr>
	<?php
	$x = 15;
	echo "Even numbers upto ".$x." is :"."</br>";
	even_num($x);

	function even_num($y)
	{
		for ($i=0; $i <= $y ; $i+=2) { 
			echo " ".$i."</br>";
		}
	}

	?>
</body>
</html>