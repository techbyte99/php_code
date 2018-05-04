<!DOCTYPE html>
<html>
<head>
	<title>Email check</title>
</head>
<body>
     <?php
      if (empty($_GET["email"])) {
    $emailErr = "Email is required";
  } 
  else
   {
    $email = test_input($_GET["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
     ?>
</body>
</html>