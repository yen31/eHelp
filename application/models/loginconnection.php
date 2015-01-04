<?php

class login extends CI_Model {
	public function userlogininfo()
	{
	if(isset($_POST['login']))
{
 $email=$_POST['Email'];
$password=$POST['Password'];
}
$check_user="select * from users where pass='$password' AND email='$email'";
$run=mysql_query($check_user);
if(mysql_num_rows($run)>0)
{
$_SESSION['Email']=$email;
echo "<script>window.open('login.php','_self') </script>";
}
else{
echo "<script>alert('Email or Password is incorrect!!') </script>";
}
	}
}