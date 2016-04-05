<!DOCTYPE html>
<html>
<body style="text-align:center;">
<?php
    $regel = 10;
	$ster = "*";
	
	for($i = 0; $i < $regel; $i++){
		for($j = 0; $j < $i; $j++){
			echo $ster;
		}
		echo"<br>";
	}
?>
</body>
</html>