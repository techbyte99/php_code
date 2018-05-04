<!DOCTYPE html>
<html>
<head>
	<title>Question 19</title>
</head>
<body>
	<h2><center>Program to display replace the first 'the' with 'that'</center></h2><hr>
		<?php
	$str = 'the quick brown fox jumps over the lazy dog.';
	echo preg_replace('/the/', 'That', $str, 1)."\n"; 
	?>
	
</body>
</html>