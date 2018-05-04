<!DOCTYPE html>
<html>
<head>
	<title>Question 13</title>
</head>
<body>
	<h2><center>Program to show traingle pattern</center></h2><hr>
	<?php
		for($x=1;$x<=5;$x++)
	{
	   for ($y=1;$y<=$x;$y++)
	    {
		 echo "*";
		    if($y< $x)
			 {
			   echo " ";
			 }
	     }
	 echo "</br>";
	}	
	?>
</body>
</html>