<?php

function insertUserId($userId,$message){
	
		$serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
		$userName = "b7d6df679dcdd2";
		$userPassword = "4f6be5a0";
		$dbName = "misschool";
		
		$conn = mysql_connect($serverName,$userName,$userPassword) or die("Error Connect to Database");

		$objDB = mysql_select_db("misschool");
		$sql = "insert into tbl_line(userId,message) values('.$userId','.$message')";

		$result = mysql_query($sql);

		mysqli_close($conn);
		return $result;
	
	}

	
	//insertUserId("ทดสอบ","Test");

	$serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$userName = "b7d6df679dcdd2";
	$userPassword = "4f6be5a0";
	$dbName = "misschool";
	
	$userId1 = "test";
	$message1 = "ทดสอบ";
	
	$conn = mysql_connect($serverName,$userName,$userPassword) or die("Error Connect to Database");

	$objDB = mysql_select_db("misschool");
	$sql = "insert into tbl_line(userId,message) values('.$userId1','.$message1')";

	$result = mysql_query($sql);

	mysqli_close($conn);

	echo "out put";
	mysqli_close($conn);
?>






