<?php
require 'connect.php';
$sql="select * from register";
$result=mysqli_query($connect, $sql);
if($result){
    while($count=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        
    }
} else{
}
