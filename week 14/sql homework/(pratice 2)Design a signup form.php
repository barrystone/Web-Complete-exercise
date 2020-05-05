<?php
	if(array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)){
		$link = mysqli_connect("localhost", "root","890208","users");
		if (mysqli_connect_error()) {			
			die ("There was an error connecting to the database");			
		} 
		if(!$_POST["email"]){
			echo "<p>Email is required!</p>";
		}
		else if(!$_POST["password"]){
			echo "<p>Password is required!</p>";
		}
		else{
			$query="SELECT `id` FROM `usert` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
			$result=mysqli_query($link, $query);
			if(mysqli_num_rows($result)>0){
				echo "This email adress has already been signed up";
			}else{
				$query = "INSERT INTO `usert` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
				if (mysqli_query($link, $query)) {
					echo "<p>You have been signed up!";                                    
				}else {
					echo "<p>There was a problem signing you up - please try again later.</p>";    
				}
			}
		}		
	}
?>
<doctype html>
<head>
</head>
<body>
	<form method="post">
		<input type="email"  name="email" placeholder="Email adress">
		<input type="password"  name="password" placeholder="password">
		<input type="submit" value="sign up">
	</form>
</body>
</html>