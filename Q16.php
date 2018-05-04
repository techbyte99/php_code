<!DOCTYPE html>
<html>
<head>
	<title>Question 16</title>
</head>
<body>
    <h2><center>Program to display elements of array</center></h2><hr>
    <?php
    $color = array('white','green','red');
    foreach ($color as $value) {
    	echo "$value"." , ";
    }
   
    foreach ($color as $value) {
    	echo "<ul>";
    	echo "<li>".$value."</li>";
    	echo "</ul>";
    }

    ?>

</body>
</html>