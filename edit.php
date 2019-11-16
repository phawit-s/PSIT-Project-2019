<?php session_start();?>
<?php $sql = "SELECT * FROM register WHERE userwname = '".$_SESSION['userwname']."'"; ?>
<?php $q = mysql_query($sql); ?>
<?php $row = mysql_fetch_array($q); ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="edituser.php?userid=<?=$row['userid']?>" method="post"> 
<table align="center" width="1020" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF" border="1">
<tr align="center">
<td colspan="2">แก้ไขข้อมูลส่วนตัว</td>	
</tr>
<tr>
<td>	
<table align="center" cellpadding="8" cellspacing="0" width="500" border="1">
<tr>
<td>ไอดี</td>
<td><input type="text" name="userid" size="30" placeholder="userid" maxlength="30"<? echo $row['userid']; ?></td>
</tr>
<tr>
<td>ชื่อผู้ใช้</td>
<td><input type="text" name="userwame" size="30" placeholder="user" maxlength="30"<? echo $row['userwname']; ?></td>
</tr>
<tr>
<td>รหัสผ่าน</td>
<td><input type="password" name="pass" size="30" placeholder="••••••••" 
value="<? echo $row['pass']; ?>" />
</td>
</tr>
<tr>
<tr>
<td>ชื่อ</td>
<td><input type="text" name="Name" size="30" placeholder="ชื่อ-นามสกุล" maxlength="30"
value="<? echo $row['Name']; ?>" />
</td>
</tr>
<td>Surname</td>
<td><input type="text" name="Surname" size="30" maxlength="10" placeholder="0812345678" 
value="<? echo $row['Surname']; ?>" />
</td>
</tr>
<tr>
<td>Email</td>
<td><textarea name="email" cols="40" rows="5" placeholder="กรุณากรอกที่อยู่">
<? echo $row['email']; ?></textarea>
</td>
</tr>
<tr>
<td><input type="submit" name="edituser" value="ตกลง" /></td>
<td></td>
</tr> 
</table>
</td> 
</tr>
</table>
</form>
</body>
</html>