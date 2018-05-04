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
    <h2><center>Factorial calculation</center></h2>
     <?php
       
       $x = fact(5);
       echo "Factorial of the given number is :".$x;

       function fact($n)
       {
       if(($n==0) || ($n==1))
       return 1;
       else 
       return $n*fact($n-1);
       }
       ?>

</body>
</html>