<?php session_start();?>
<?php
    //connect to database
    include_once('connect.php');

    if(isset($_POST['submit'])){
        //get text from login.html
        $username = $_POST['username'];
        $password = $conn->real_escape_string($_POST['password']);
        // select data from table(mysql) that username and password have the same
        $sql = "SELECT * FROM `register` WHERE `userwname` = '".$username."' AND `pass` = '".$password."'";
        $result = $conn->query($sql);

        if($result->num_rows >0){
            // start session for other pages
            $row = $result->fetch_assoc();
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['Surname'] = $row['Surname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userwname'] = $row['userwname'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['picture'] = $row['picture'];
            $_SESSION['subject'] = $row['subject'];
            header('location:index.php');
        }
        //if username and password are not matching from database
        else{
            echo "<script>
            alert('Wrong username or password');
            window.location.href='login.html';
            </script>";
        }

    }
?>
