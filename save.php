<?PHP
	// Database Connection code
	$host = 'localhost';
	$username = 'id11387127_projectpsit2019';
	$password = 'Imnayeon1995';
	$databasename = 'id11387127_psit';
    $con = mysqli_connect($host,$username,$password,$databasename);
    if(isset($_GET['save'])) {
    
    // GET information from register.html
    $userid = $_GET['userid'];
    $Name = $_GET['Name'];
    $Surname = $_GET['Surname'];
	$email = $_GET['email'];
    $gender = $_GET['gender'];
    $userwname = $_GET['userwname'];
	$pass1 = $_GET['renterPass'];
    $pass2 = $_GET['rconfirmPass'];
    }
    // if connection fail or not
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
    }
    // if password and comfirmpassword have the same word.
	if($pass1 == $pass2)
	{
        // insert data from register.html into databases
		$sql = "INSERT INTO `register`(`userid`, `Name`, `Surname`, `email`, `userwname`, `pass`, `gender`) VALUES('$userid', '$Name', '$Surname', '$email', '$userwname', '$pass1', '$gender');";
		if(mysqli_query($con,$sql))
		{
			echo "<script>
            alert('Successful');
            window.location.href='login.html';
            </script>";
		}
		else
		{
			echo "<script>
            alert('ERROR');
            window.location.href='index.html';
            </script>";
		}
	}else
	{
        // if  comfirm password has not the same password with password
        echo "<script>
    alert('Wrong password');
    window.location.href='index.html';
    </script>";
	}
	// close connection
	mysqli_close($con);
?>
