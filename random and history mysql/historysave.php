<?php session_start(); ?>
<?php
    // Database Connection code
            $host = 'localhost';
        $username = 'id11387127_projectpsit2019';
        $password = '********************';
    $databasename = 'id11387127_psit';
             $con = mysqli_connect($host,$username,$password,$databasename);
    // if press the view button from the history.php page
    if(isset($_POST['save'])) { 
       $userid = $_SESSION['userid'];
         $Name = $_POST['Name'];
      $Surname = $_POST['Surname'];
        $userid2 = $_POST['userid'];
    }
    if(!$con){
        die("Error : ".mysqli_connect_error());
    }
        $sql = "INSERT INTO `history`(`userid`, `Nameran`, `Surname`, `userran`) VALUES('$userid', '$Name', '$Surname', '$userid2');";
        if(mysqli_query($con,$sql)){
		     echo "<script>
                     alert('Successful');
                     window.location.href='allprofile.php';
                     </script>";
		}
		else{
		      echo "<script>
            	      alert('ERROR');
                      window.location.href='random.php';
                      </script>";
		}

	// close connection
	mysqli_close($con);
?>

