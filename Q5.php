<!DOCTYPE html>
<html>
<head>
	<title>Question 5</title>
</head>
<body>
   <h3><center>Check if the string is in lower case</center></h3><hr>
   <?php
    $st = "this is my string";
     $flag = TRUE;
     strCheck($st);
    

    function strCheck($st)
    {
    	if( $st == strtolower($st))
    	echo "Entered sting is in lower case ";
    	else
    	echo "String is not in lower case"; 
    }
   
   
   ?>
</body>
</html>