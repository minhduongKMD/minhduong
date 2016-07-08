<?php

$host="localhost";
$username="root";
$password="";
$db_name="QLNhanVien";
$tbl_name="USERS";
 
// connect to database
mysql_connect("$host", "$username", "$password")or die("khong the ket noi");
mysql_select_db("$db_name")or die("cannot select DB");
 
// username va  password
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
 
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Sai ten dang nhap hoac mat khau";
}
?>