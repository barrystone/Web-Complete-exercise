<?php

    $link = mysqli_connect("localhost", "root","890208","users");
	

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 
	//$query="INSERT INTO `usert` (`email`,`password`) VALUES ('stone@gmail.com','stone')";
	
	$query="UPDATE `usert` SET email='barry@gmail.com' WHERE email='stone@gmail.com' LIMIT 1";
	mysqli_query($link, $query);
	
    $query = "SELECT * FROM usert";
    if ($result = mysqli_query($link, $query)) {
        
        while($row = mysqli_fetch_array($result)){
			//$row = mysqli_fetch_array($result);
        
			print_r($row);
			echo "<br>";
			//echo "Your email is ".$row[1]." and your password is ".$row[2]."<br>";
		}
		
        
    }


?>
