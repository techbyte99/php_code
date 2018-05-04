<!DOCTYPE html>
<html>
<head>
	<title>Question 12</title>
</head>
<body>
	<h2><center>Program to show countdown of Date of birth</center></h2><hr>
    <?php
	$target_days = mktime(0,0,0,07,10,1996);
	$today = time();
	$diff_days = ( $today -$target_days );
	$days = (int)($diff_days/86400);
	print "Days till next birthday: $days days!"."\n";
	echo "</br>Entered date :".$target_days;
    echo "</br>Time now :".$today;
    echo "</br>Difference in second :".$diff_days;
    ?>
</body>
</html>