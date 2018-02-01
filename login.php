<?php
include('config1.php');
 session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = $_POST['email'];
      $mypassword = $_POST['pwd']; 
      $sql = "SELECT id FROM dbase WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      echo  $count;
      // If result matched $myusername and $mypassword, table row must be 1 row
		 if($count == 1){
      	 $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
     	 }
     	 else
     	{
         $error = "Your Login Name or Password is invalid";
         echo $error;
     	}
   	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
		  	#mainNav{
				padding-top: 25px;
		   		padding-bottom: 25px;
		    	background-color: #17394d;
		    	min-height: 50px;
				}
			#text{
				color: white;	
				font-size: 30px;
				font-weight: 200px;
				text-shadow: 1px 1px;
				}
			.pannel{
				margin-top: 150px;
				}
			.header{
				background-color: #34495e;
				width: 50%;
				margin-left: 300px;
				box-shadow: 2px 2px;
				border-radius: 10px;
				height: 400px;
				}
		</style>
	</head>
	<body id="page-top">
		<div class="wrapper">
			<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
			  	<div class="container">
			 		<div class="navbar-header page-scroll">
			        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                <span class="sr-only">Toggle navigation</span> 
			                <span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
			        		<span class="icon-bar"></span>
			                </button>
			  				<a class="navbar-brand" id="text" href="homepage.php">WELCOME</a>
			        </div>
			        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <ul class="nav navbar-nav navbar-right">
		                    <li class="hidden">
		                        <a href="#page-top"></a>
		                    </li>
		                    <li class="page-scroll" >
		                        <a href="homepage.php" id="text">Home</a>
		                    </li>
		                    <li class="page-scroll" id="text">
		                        <a href="#page-top" id="text">Login</a>
		                    </li>
		                    <li class="page-scroll" id="text">
		                        <a href="register.php" target="_self" id="text">Register</a>
		                    </li>
			            </ul>
			        </div>
			    </div>
			</nav>
		</div>
<!-- //////////////////////////////////login form data/////////////////////////////////////////////////////////////  -->
		<div class="pannel header">
			<div class="pannel-head">
				<h1 style="text-align: center;">Login Form</h1>
			</div>
				<hr style="width: 400px;">
			<div class="pannel-body">
			 	<form class="form-horizontal" action="" method="POST">
				    <div class="form-group">
				      	<label class="control-label col-sm-3" for="email">Email:</label>
				      	<div class="col-sm-6">
				        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    	</div>
				    </div>
				    <div class="form-group">
				      	<label class="control-label col-sm-3" for="pwd">Password:</label>
				     	<div class="col-sm-6">          
				        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				      	</div>
				    </div>
				    <div class="form-group">        
				      	<div class="col-sm-offset-3 col-sm-3">
				        <input type="submit" class="btn btn-default" value="login">
				      	</div>
				    </div>
				    <div class="form-group "><a href="register.php" class="col-sm-offset-3 col-sm-10" style="color: white;">SignUp</a>
				    </div>
				 </form>
			</div>
		</div>
	</body>
</html>
