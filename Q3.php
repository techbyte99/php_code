<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
     <h3><center>Program to check whether given number is prime or not </center></h3><hr>
       <?php
         prime(1988);


        function prime($n)
        {
         for($i=2;$i<=$n/2;$i++)
         {
             if(($n % $i)==0)
             {
             echo "Entered number is not prime<br>";
             break;
             }
             elseif(($n % $i)!==0)
             {
             echo "Entered number is prime<br>";
             break;
             }
             
             
         }
        
        



        }
       ?>
</body>
</html>