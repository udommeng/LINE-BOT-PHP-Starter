<?php

function insertUserId($userId,$message){
	
		$serverName = "ap-cdbr-azure-southeast-b.cloudapp.net";
		$userName = "b7d6df679dcdd2";
		$userPassword = "4f6be5a0";
		$dbName = "misschool";
		
		$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		
			if (mysqli_connect_errno())
			{
				$sql = "insert into misschool.tbl_line(userId,message) values('$userId','$message')";
				$result = mysqli_query($conn,$sql) or die("เอ็กซิคิวต์คำสั่ง SQL ไม่ได้");
			}
	
		
			mysqli_close($conn);
	
	}

	
	insertUserId("ทดสอบ","Test");
	echo "out put" .$result ;
	mysqli_close($conn);
?>






