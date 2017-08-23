<?php


	//insertUserId("ทดสอบ","Test");

	$serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$userName = "b7d6df679dcdd2";
	$userPassword = "4f6be5a0";
	$dbName = "misschool";
	
	$userId1 = "test";
	$message1 = "ทดสอบ";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "insert into tbl_line(userId,message) values('.$userId1','.$message1')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully";
	}else{
		echo $sql;
	}

	mysqli_close($conn);
?>








