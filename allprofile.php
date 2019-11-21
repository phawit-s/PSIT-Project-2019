<?php
require 'connect.php';
$sql="select * from register";
$result=mysqli_query($connect, $sql);
if($result){
    while($count=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo "Student id:".$count["userid"]."<br>";
        echo "Name:".$count["Name"]."<br>";
        echo "Surname:".$count["Surname"]."<br>";
        echo "E-mail:".$count["email"]."<br>";
    }
} else{
}
