<!DOCTYPE html>
<html>
<head>
	<title>Question 18</title>
</head>
<body>
	<h2><center>Program to display fibonacci series</center></h2><hr>
	    <?php  
    
    $num = 12;  
    echo "<h3>Fibonacci series using recursive function:</h3>";  
    echo "\n";  
     
    function series($num){  
        if($num == 0){  
        return 0;  
        }else if( $num == 1){  
    return 1;  
    }  else {  
    return (series($num-1) + series($num-2));  
    }   
    }  
    /* Call Function. */  
    for ($i = 0; $i < $num; $i++){  
    echo series($i);  
    echo "\n";  
    }  
    ?>
</body>
</html>