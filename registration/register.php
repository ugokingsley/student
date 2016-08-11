<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$matric = $_POST['matric'];
		$user_email = $_POST['user_email'];
		$dept = $_POST['dept'];
		$user_password = $_POST['password'];
		//$user_image=$_POST['user_image'];
		$joining_date =date('Y-m-d H:i:s');
		
		$password = md5($user_password);
		
		/*$imgFile = $_FILES['user_image']['name'];
		//$tmp_dir = $_FILES['user_image']['tmp_name'];
		//$imgSize = $_FILES['user_image']['size'];
		
		$upload_dir = 'user_images/'; // upload directory
		$imgFile=$upload_dir.basename($_FILES['user_image']['name']);
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
			
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["user_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["user_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["user_image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
			
			
			
			
			
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO tbl_users(first_name,last_name,user_name,matric,user_email,dept,user_password,joining_date) VALUES(:fname, :lname, :uname, :mat, :email, :dept, :pass, :jdate)");
			$stmt->bindParam(":fname",$first_name);
			$stmt->bindParam(":lname",$last_name);
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":mat",$matric);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":dept",$dept);
			$stmt->bindParam(":pass",$password);
			//$stmt->bindParam(":pic",$userPic);
			$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>