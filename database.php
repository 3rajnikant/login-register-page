<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(isset($_POST['submit']))
				{
					$mob = $firstDigit =  $res = "";
					include('config1.php');
					$Name = $_POST['name'];
					$Gender = $_POST['gender'];
					$Email = $_POST['email'];
					$Mobile = $_POST['mobile'];
					$Password = $_POST['password'];
					$Cpassword = $_POST['cpassword'];
					$sql = "INSERT INTO dbase (name,gender,email,mobile,password,cpassword) VALUES('$Name','$Gender','$Email','$Mobile','$Password','$Cpassword')";
					if(mysqli_query($db,$sql))
						{
							echo 'new record created successfully';
						}
					else
						{
						echo 'new  record  not inserted' ;
						}
					header("location:login.php");
				}
		?>
	</body>
</html>


