<?php
declare(strict_types=1);
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Europe/Amsterdam");

    $servername = "localhost";
    $username = "lpwebdesig_post";
    $password = "h66H2ZiPnI";
    $database = "lpwebdesig_post";

    $con = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }