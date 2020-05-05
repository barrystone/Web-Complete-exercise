<?php

    mysqli_connect("localhost", "root","123456");

    if (mysqli_connect_error()) {
        
        echo "There was an error connecting to the database";
        
    } else {
        
        echo "Database connection successful!";
        
    }


?>