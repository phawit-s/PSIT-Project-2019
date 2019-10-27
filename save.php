<?php


$host = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'information';
if(isset($_POST['save'])) {
    $ID = $_POST['cust_id'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $email = $_POST['email'];
    $conn = mysqli_connect($host,$username,$password,$databasename) or die(mysql_error());
    $sql = "Insert into list (cust_id, Name, Surname, email) VALUES ('$ID', '$Name', '$Surname', '$email')";
    mysqli_query($conn);
}