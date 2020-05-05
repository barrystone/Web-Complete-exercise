<?php

    $link = mysqli_connect("localhost", "root","123456","users");
	

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

    $query = "SELECT * FROM usert";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        
		//print_r($row);
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }


?>