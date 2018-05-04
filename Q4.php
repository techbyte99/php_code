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
    <h3><center>Reverse the string<center></h3><hr>

   <?php
     $n = "Aryabhatta college";
    rev_str($n);


    function rev_str($n)
    { 
    $len 	= strlen($n);
        for ( $i = $len - 1; $i >=0;$i-- )
        {
        echo $n[$i];
        }
    }
   ?>

</body>
</html>