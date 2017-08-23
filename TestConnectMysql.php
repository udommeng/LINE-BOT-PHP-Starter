<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

    $serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
    $userName = "b7d6df679dcdd2";
    $userPassword = "4f6be5a0";
    $dbName = "misschool";

   //$serverName = "mysql-5.5.chaiyohosting.com";
   //$userName = "misschoo_line";
   //$userPassword = "U_e2qx15";
   //$dbName = "misschoo_line";
  
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		echo "Database Connected. misschoo_line";
	}

	mysqli_close($conn);
?>






