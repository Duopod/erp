<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 9/9/15
 * Time: 6:48 PM
 */


// Create connection to siec
$con = mysqli_connect("localhost", "root", "", "suitecrm");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

