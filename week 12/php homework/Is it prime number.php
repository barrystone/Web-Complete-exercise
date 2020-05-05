<!DOCTYPE html>
<html>
<body>
<head><title>Is it prime number?</title></head>
<p>Please enter a whole number</p>
<form>
	<input name="number" type="text">
	<input name="name" type="submit" value="Go!">
</form>
<?php
	//$n=0;
		$n=$_GET['number'];
		if($n==''){echo "no value";}
		else{
			$count=0;
			for($i=2;$i<=($n-1);$i++){
				if($n%$i==0){
					$count++;
				}
			}
			if($count!=0||$n==1){
				echo $n." is not a prime number";
			}else if($count==0){
				echo $n." is a prime number";
			}
		}
			//echo $count;
?>

</body>
</html>