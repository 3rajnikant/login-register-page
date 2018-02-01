<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.head{
				text-align: center;
				font-size: 40px;
				font-family: Roboto;
				text-shadow: 1px 1px;
				font-weight: bold;
				}
			.main{
				margin-top: 100px;
				background-color: gray;
				width: 80%;
				margin-left: 130px;
				box-shadow: 5px 5px;
				border-radius: 10px;
				}
			#mainNav{
				padding-top: 25px;
			    padding-bottom: 25px;
			    background-color: #17394d;
			    min-height: 50px;
				}
			#text1{
				color: white;	
				font-size: 30px;
				font-weight: 200px;
				text-shadow: 1px 1px;
				}
		</style>
	</head>
	<body   id="page-top">
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
				 		<a class="navbar-brand" id="text1" href="homepage.php">WELCOME</a>
				    </div>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				        <ul class="nav navbar-nav navbar-right">
				            <li class="hidden">
				                <a href="#page-top"></a>
				            </li>
				            <li class="page-scroll" >
				                <a href="homepage.php" target="_POST" id="text1">Home</a>
				            </li>
				            <li class="page-scroll" id="text1">
				                <a href="login.php" id="text1">Login</a>
				            </li>
				            <li class="page-scroll" id="text1">
				                <a href="#page-top" id="text1">Register</a>
				            </li>
				            <li></li>
				        </ul>
				    </div>
			    </div>
			</nav>
		</div>
		           
		<div style="background-color: white;">
			<div class="main">
				<div class="container">
					<div class="pannel pannel-default">
						<div class="pannel-heading head">
							Registration Form
						</div>
							<hr style="color: red; ">
						<div class="pannel-body">
							<form  class="form-horizontal" action="database.php" method="post" novalidate>
								<div class="form-group row">
									<label for="name" class="control-label col-sm-3 text">NAME:</label>
									<div class="col-md-4"><input type="text" class="form-control d-inline " name="name"></div> 
									<span class="error"><?//=$msg?></span>
								</div>
									<br>
								<div class=" form-group row">
									<lable  class="control-label col-sm-3 text" for="gender">GENDER:</lable>
									<div class="col-md-4 ">
										<div class="input-group">
											<select name="gender" id="gender" class="form-control">
												<option value>--select--</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
								</div>
									<br><br>
								<div class="form-group row">
									<lable  class="control-label col-sm-3 text" for="email">EMAIL:</lable>
									<div class="col-md-4"><input type="email" class="form-control" name="email">
									</div>
									<span class="error"></span>
								</div>
									<br><br>
								<div class="form-group row">
									<lable class="control-label col-sm-3 text">MOBILE:</lable>
									<div class="col-md-4"><input type="number" class="form-control" name="mobile"></div>
									<span class="error"><?//=$msg3?></span>
								</div>
								<br><br>
								<div class="form-group row">
									<lable for="password" class="control-label col-sm-3 text" >PASSWORD:</lable>
									<div class="col-md-4"><input type="Password" class="form-control" name="password"></div>
									<span class="error"><?//=$msg4?></span>
								</div>
								<br><br>
								<div class="form-group row">
									<lable for="cpassword" class="control-label col-sm-3 text" >CONFIRM PASSWORD:</lable>
									<div class="col-md-4"><input type="password"  class="form-control" name="cpassword"></div>
									<span class="error"><?//=$msg5?></span>
								</div>
								
								<br><br>
								<div class="form-group">        
							      	<div class="col-sm-offset-3 col-sm-10">
										<input type="submit" name="submit" class="btn btn-default text" value="Submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<?php

?>