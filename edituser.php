<?php
include('connect.php');


$userid = $_GET['userid'];
$userwname = $_POST['userwname'];
$pass = $_POST['pass'];
$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$email = $_POST['email'];

$sql = "UPDATE member SET pass='$pass',
Name='$Name', Surname='$Surname'
, email='$email' where userid='$userid'";

$row = mysql_query($sql);
if($row)
{
echo "<script language='JavaScript'>
alert('แก้ไขข้อมูลสำเร็จแล้ว');
window.location.href = 'profile.php';
</script>";
}
else
{
echo "ไม่สามารถแก้ไขสมาชิกได้ [".$sql."]";
}

?>