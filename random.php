<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<?php

$servername = "localhost";
$username = "id11387127_projectpsit2019";
$password = "Imnayeon1995";
$db = "id11387127_psit";
$conn = new mysqli($servername, $username, $password,$db);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "SELECT * FROM register";
 
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
        $random[] = $row["Name"];
        $data[$row["Name"]] =  array(
                'Name' => $row['Name'],
                'Surname' => $row['Surname'],
        );    
    }
} else {
    
    echo "0 results";
}
var_dump($random);
$pick = array_rand($random);
echo $random[$pick];
?>
</body>
</html>
