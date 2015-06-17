<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #70ADE6;
}
-->
</style>
<link href="css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    <?php 
//Connects to your Database 
 mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error()); 
 mysql_select_db("rigsalesaustralia") or die(mysql_error()); 
 //Checks if there is a login cookie
 if(isset($_COOKIE['logincookie']))
 //if there is, it logs you in and directes you to the overview page
 { 
 	
   
   //Set Cookies
	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie'];
 	 	$check = mysql_query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error());
 	while($info = mysql_fetch_array( $check )) 	
 		{
 		if ($pass != $info['password']) 
 			{
 			 			}
 		else
 			{
 			header("Location: overview.php");
 			}
 		}
 }
 //if the login form is submitted 
 if (isset($_POST['submitL'])) { // if form has been submitted
 // makes sure they filled it in
 	if(!$_POST['username'] | !$_POST['pass']) {
 		echo 'Required Field Missing<a href=login.php>Click Here to try again.</a><br />';
 	}
 	// checks it against the database
 	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 	$check = mysql_query("SELECT * FROM sellers WHERE username = '".$_POST['username']."'")or die(mysql_error());
 //Gives error if user dosen't exist
 $check2 = mysql_num_rows($check);
 if ($check2 == 0) {
 		echo 'That user does not exist in our database. <a href=register.php>Click Here to Register</a><br />';
 				}
 while($info = mysql_fetch_array( $check )) 	
 {
 $_POST['pass'] = stripslashes($_POST['pass']);
 	$info['password'] = stripslashes($info['password']);
 	$_POST['pass'] = md5($_POST['pass']);
 //gives error if the password is wrong
 	if ($_POST['pass'] != $info['password']) {
 		echo 'Incorrect password <a href=login.php>Try again.</a><br />';
 	}
 else 
 { 
 
 // if login is ok then we add a cookie 
$_POST['username'] = stripslashes($_POST['username']); 
$hour = time() + 3600; 
setcookie(logincookie, $_POST['username'], $hour); 
setcookie(passcookie, $_POST['pass'], $hour);	 
 // Set session variables 
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['pass'] = $_POST['pass'];
   //$_SESSION['lname'] = $_POST['lname'];
   //$_SESSION['email'] = $_POST['email'];
   //$_SESSION['phone'] = $_POST['phone'];
//then redirect them to the overview area 
header("Location: overview.php"); 
 } 
} 
} 
else 
{	 
 
 // if they are not logged in 
 ?> 
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
 <table border="0"> 
 <tr><td colspan=2><h1>Login</h1></td></tr> 
 <tr><td>Username:</td><td> 
 <input type="text" name="username" maxlength="40"> 
 </td></tr> 
 <tr><td>Password:</td><td> 
 <input type="password" name="pass" maxlength="50"> 
 </td></tr> 
 <tr><td colspan="2" align="right"> 
 <input type="submit" name="submitL" value="Login" id="submitL"> 
 </td></tr> 
 </table> 
 </form> 
 <?php 
 } 
 
 ?> 
    
    </td>
    
  </tr>
</table>
</body>
</html>
