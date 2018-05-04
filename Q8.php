<!DOCTYPE html>
<html>
<head>
	<title>Question 8</title>
</head>
<body>
   <h2><center>Program to remove white space from string.</center></h2><hr>
   <?php
    $s = "this is my sample string ";

    StripExtraSpace($s);
    
     /*
    function space_rem($str)
    {
    	for ($i=$str[0]; $i <sizeof($str); $i++) 
    	{ 	
    	  if ($str[i]=="\0") {
    	  	continue;
    	  }
    	  else
    	  {
    	  	for ($j=$str[0]; $j <sizeof($str); $j++)
    	  		$str[j]=$str[i];
    	  }

    	}
    }
     */
    
    function StripExtraSpace($s)
    {
       $newstr= "";
       for($i = 0; $i < strlen($s); $i++)
          {
          $newstr = $newstr . substr($s, $i, 1);
          if(substr($s, $i, 1) == ' ')
             while(substr($s, $i + 1, 1) == ' ')
                $i++;
          }
       echo "New string = ".$newstr;
    }




   ?>
</body>
</html>