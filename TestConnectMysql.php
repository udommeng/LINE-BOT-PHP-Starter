<?php


	//insertUserId("ทดสอบ","Test");
	function insert_data_line($userId1,$message1){
	$serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$userName = "b7d6df679dcdd2";
	$userPassword = "4f6be5a0";
	$dbName = "misschool";
	
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "insert into tbl_line(userId,message) values('.$userId1','.$message1')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully" .$sql;
	}else{
		echo $sql;
	}

	mysqli_close($conn);

}

	insert_data_line("test1","ทดสอบ1");
?>








