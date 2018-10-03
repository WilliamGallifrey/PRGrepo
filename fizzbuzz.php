<!DOCTYPE html>
<html>
<head>
	<title>Fizzbuzz</title>
</head>
<body>

<?php


	for($count = 1 ; $count <= 100; $count++)
	{
		
		if ($count%3 == 0 || $count%5 == 0){
				if($count%3 == 0) echo "fizz <br>";
				if($count%5 == 0) echo "buzz <br>";
				if($count%3 == 0 && $count%5 == 0) echo "fizbuzz<br>";}
		else {echo"$count<br>";}
	}



?>
</body>
</html>