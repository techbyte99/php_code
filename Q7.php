<!DOCTYPE html>
<html>
<head>
	<title>Question 7</title>
</head>
<body>
   <h2><center>Program to sort an array</center></h2>
    <?php
 	  $arr = array(2,43,45,3,2,23);
      $count = count($arr);
       print_r($arr);
        
        sort_arr($arr);

      function sort_arr($arr)
      {
      	$x = sizeof($arr);
      for ($i=0; $i <$x; $i++)
      { 
       for ($j = $i + 1; $j < $x; $j++)
        {
        if ($arr[$i] > $arr[$j])
         {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
       }
       
      }
      echo "<br>Sorted Array: = " ;
       print_r($arr);
     }
    ?>


</body>
</html>