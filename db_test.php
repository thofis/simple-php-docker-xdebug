<?php
// Create connection
$con=mysqli_connect("db","devuser","123456","test_db");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
