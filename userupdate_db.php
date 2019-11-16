<meta charset="UTF-8">
<?php

include('connect.php');
if($_POST["member_id"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'showmember.php'; "; 
echo "</script>";
}

	$userid = $_POST["userid"];
	$Name = $_POST["Name"];
	$Surname = $_POST["Surname"];
	$userwname = $_POST["userwname"];
	$pass = $_POST["pass"];	
	$email = $_POST["email"];

	
	$sql = "UPDATE register SET
            userid='$userid';
			'Name'='$name' ,
			Surname='$Surname' , 
			username='$username' ,
			pass='$pass' ,
			email='$email'  
			WHERE member_id='$member_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); 
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'profile.php'; ";
	echo "</script>";
}
?>