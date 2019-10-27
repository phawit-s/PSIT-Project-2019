<?php
require'/dbconnect.php';
$sql="select * from customer"

$result=mysqli_query($connect, $sql);

if($result){
    while($count= mysqli_fetch_array($resultm, MySQLI_ASSCOC)){
            echo "รหัสนักศึกษา".$record['cust_id']."<br>";
            echo "ชื่อ".$record['Name']."<br>";
            echo "นามสกุล".$record['Surname']."<br>";
            echo "e-mail".$record['email']."<br>";
            echo "<hr>";
    }
}   else{
    echo"Connection fail";

}