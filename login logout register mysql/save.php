<?php
    // Database Connection code
            $host = 'localhost';
        $username = 'id11387127_projectpsit2019';
        $password = '*********';
    $databasename = 'id11387127_psit';
             $con = mysqli_connect($host,$username,$password,$databasename);
    if(isset($_POST['save'])) {
    
    // GET information from register.html
       $userid = $_POST['userid'];
         $Name = $_POST['Name'];
      $Surname = $_POST['Surname'];
        $email = $_POST['email'];
       $gender = $_POST['gender'];
    $userwname = $_POST['userwname'];
	$pass1 = $_POST['renterPass'];
    $pass2 = $_POST['rconfirmPass'];
    $subject = $_POST['subject'];
    $lineid = $_POST['lineid'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    	}
	if(!$con){
		die("Error : ".mysqli_connect_error());
    	}
    	// if password and comfirmpassword have the same word.
	if($pass1 == $pass2){
        // insert data from register.html into databases
	     $sql = "INSERT INTO `register`(`userid`, `Name`, `Surname`, `email`, `userwname`, `pass`, `gender`, `picture`, `subject`,`lineid`) VALUES('$userid', '$Name', '$Surname', '$email', '$userwname', '$pass1', '$gender', '$image', '$subject', '$lineid');";
		if(mysqli_query($con,$sql)){
		     echo "<script>
                     alert('Successful');
                     window.location.href='login.html';
                     </script>";
		}
		else{
		      echo "<script>
            	      alert('ERROR');
                      window.location.href='register.html';
                      </script>";
		}
	 }else {
             // if  comfirm password has not the same password with password
             echo "<script>
    	     alert('Wrong password');
    	     window.location.href='register.html';
    	     </script>";
	  }
	// close connection
	mysqli_close($con);
?>
