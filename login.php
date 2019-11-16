<?php session_start();?>
<?php
    include_once('connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $conn->real_escape_string($_POST['password']);
        
        $sql = "SELECT * FROM `register` WHERE `userwname` = '".$username."' AND `pass` = '".$password."'";
        $result = $conn->query($sql);

        if($result->num_rows >0){
            $row = $result->fetch_assoc();
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['Surname'] = $row['Surname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userwname'] = $row['userwname'];
            $_SESSION['gender'] = $row['gender'];
            header('location:index.php');
        }
        else{
            echo "<script>
            alert('Wrong username or password');
            window.location.href='login.html';
            </script>";
        }

    }
?>
