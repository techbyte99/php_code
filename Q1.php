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
    <?php
     echo "Greatest of three numbers :<br>";
      $x = greatest_three(3,5,4);
      echo "Largest among the entered numbers is :".$x;
     function greatest_three($num1,$num2,$num3)
     {
         
        if($num1>$num2 && $num1>$num3)
        $result =$num1;
        elseif($num2>$num3)
        $result = $num2;
        else
        $result = $num3;

        return $result;
          
     }
    ?>
</body>
</html>