<?php

$serverName = "mysql-5.5.chaiyohosting.com";
$userName = "misschoo_line";
$userPassword = "U_e2qx15";
$dbName = "misschoo_line";

$link = mysqli_connect($serverName,$userName, $userPassword, $dbName);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>








