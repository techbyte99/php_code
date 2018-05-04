<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
     <?php
      if(($_REQUEST["username"]=="manoj") && ($_REQUEST["password"]=="1363")) {
      	 echo "Welcome ! ".$_REQUEST["username"]."</br>";
      	 echo "You are securely logged  in";
      }
      else
      {
      	echo "Access denied !!!"."</br>";
      echo "Please check your <b>username</b> and <b>password</b>"."</br>";
      	}
     ?>
</body>
</html>