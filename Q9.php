<!DOCTYPE html>
<html>
<head>
	<title>Question 9</title>
</head>
<body>
 <h2><center>Finding sum of first n natural numbers </center></h2><hr>
   <?php
   $x =  15;
   sum_of_odd_numbers($x);

   function sum_of_odd_numbers($y)
   {
   	$sum =0;
   	echo "Enter number =".$y."</br>";
   	for ($i=1; $i<=$y ; $i+=2) 
   	{ 
   		$sum += $i;
   	}
     echo "Sum of odd numbers upto ".$y. " = ".$sum;
   }

   ?>

</body>
</html>