<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <h1>test</h1>

<?

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "mysql-5.5.chaiyohosting.com";
   $userName = "misschoo_line";
   $userPassword = "U_e2qx15";
   $dbName = "misschoo_line";
  
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

</body>
</html>






