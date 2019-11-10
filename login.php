<?php
    include_once('connect.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $conn->real_escape_string($_POST['password']);
        
        $sql = "SELECT * FROM `register` WHERE `username` = '".$username."' AND `pass` = '".$password."'";
        $result = $conn->query($sql);

        if($result->num_rows >0){
            echo "<script>
            alert('Successful');
            window.location.href='index.html';
            </script>";
        }
        else{
            echo "<script>
            alert('Wrong username or password');
            window.location.href='login.html';
            </script>";
        }

    }
?>