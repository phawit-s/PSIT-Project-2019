<meta charset="UTF-8">
<?php
include('connect.php');
if($_GET["member_id"]==''){ 
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'profile.php'; "; 
echo "</script>"; 
}

$member_id = mysqli_real_escape_string($con,$_GET['member_id']);


$sql = "SELECT * FROM register WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<form action="userupdate_db.php" method="post" name="updateuser" id="updateuser">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลสมาชิก</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">USERID : </td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="member_id" value="<?php echo $member_id; ?>" disabled='disabled' />
        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
      
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Name" type="text" id="Name" value="<?=$Name;?>" size="30"   required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">สกุล
        <label> :</label></td>
      <td bgcolor="#EBEBEB"><input name="Surname" type="text" id="Surname" value="<?=$Surname;?>" size="30"   required="required" "/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">Username :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="userwname" id="userwname" value="<?=$username;?>"  placeholder="ตัวเลขหรือภาษาอังกฤษเท่านั้น"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">Password :
        <label> </label></td>
      <td bgcolor="#EBEBEB"><input type="password" name="pass" id="pass" value="<?=$password;?>" placeholder="ตัวเลขหรือภาษาอังกฤษเท่านั้น" required/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">email : </td>
      <td bgcolor="#EBEBEB"><input name="email" type="email" id="email" value="<?=$email;?>" size="30" placeholder="ตัวอย่าง pisit.bow@gmail.com"  required="required"/></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='profile.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>