<?php
include('config1.php');
$target_dir = "uploads/";

$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    if($check !== false) {
    	session_start();
    	$username = $_SESSION['login_user'];
		//$image=basename( $_FILES["fileToUpload"]["name"],".jpg");
		  // $query= "INSERT INTO dbase(image) VALUES ('$image') WHERE name='{$username}'";
    	$query = "UPDATE dbase SET image = '$target_file' WHERE  email = '{$username}'";
		//var_dump($query);die();
    	if(mysqli_query($db,$query)){
    		header('location:welcome.php');
    	} else{
    		echo 'query failed';
    	}
        
    } else {
        echo "File is not an image.";
    }
}
?>