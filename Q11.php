<!DOCTYPE html>
<html>
<head>
	<title>Question 11</title>
</head>
<body>
   <h2><center>Program to check if a specific string is present or not </center></h2><hr>
   	<?php
	$str1 = 'The quick brown fox jumps over the lazy dog.';
	if (strpos($str1,'jumps') !== false) 
	 {
	    echo 'The searched word is present.';
	 }
	else
	 {
	    echo 'The searched  word is not present.';
	 }
	?>

</body>
</html>