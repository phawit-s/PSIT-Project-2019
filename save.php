<?PHP
	// Database Connection code
	$host = 'localhost';
	$username = 'id11387127_projectpsit2019';
	$password = 'Imnayeon1995';
	$databasename = 'id11387127_psit';
    $con = mysqli_connect($host,$username,$password,$databasename);
    if(isset($_GET['save'])) {

    $userid = $_GET['userid'];
    $Name = $_GET['Name'];
    $Surname = $_GET['Surname'];
	$email = $_GET['email'];
    $gender = $_GET['gender'];
    $userwname = $_GET['userwname'];
	$pass1 = $_GET['renterPass'];
    $pass2 = $_GET['rconfirmPass'];
    }

	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	if($pass1 == $pass2)
	{
		$sql = "INSERT INTO `register`(`userid`, `Name`, `Surname`, `email`, `userwname`, `pass`, `gender`) VALUES('$userid', '$Name', '$Surname', '$email', '$userwname', '$pass1', '$gender');";
		if(mysqli_query($con,$sql))
		{
			echo "สมัครเสร็จสิ้น";
		}
		else
		{
			echo "เกิดข้อผิดพลาด";
		}
	}else
	{
		echo "<script>
    		alert('Wrong password');
    		window.location.href='https://projectpsit2019.000webhostapp.com/';
    		</script>";
	}
	
	mysqli_close($con);
?>
