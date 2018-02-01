<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div id="image"></div>
 		<h1>Welcome <?php echo $login_session; ?></h1> 
      	<h2><a href = "logout.php">Sign Out</a></h2>
      	
</body>
</html>
