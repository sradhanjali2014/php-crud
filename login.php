<?php
include('db.php');
if(isset($_POST['submit']))
{
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$res=mysqli_query($con,"select * from admin_user where username='$username' and password='$password'");
	if(mysqli_num_rows($res)>0)
	{
		$_SESSION['IS_LOGIN']='yes';
		header('location:index.php');
		die();
	}
	else
	{
		echo "Please enter valid login Details";
	}
}
?>
<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="textbox" name="username"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"/></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit"/></td>

		</tr>
	</table>
</form>