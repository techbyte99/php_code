<!DOCTYPE html>
<html>
<head>
	<title>Question 6 </title>
</head>
<body>
   <h2><center>Check if the string is palindrome or not </center></h2><hr>
   <?php
    $str = "This is my string";
    palin_check($str);

   function palin_check($str)
    {
      if($str == strrev($str))
      echo "Entered string is palindrome";
      else
       echo "Entered string is not a  palindrome";
     	
    }
   ?>

</body>
</html>