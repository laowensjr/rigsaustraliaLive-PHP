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
<link href="css/rigSaleAustraliaCSSL.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    
<?php 
//Connects to your Database 
 mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error()); 
 mysql_select_db("rigsalesaustralia") or die(mysql_error()); 
 //This code runs if the form has been submitted
 if (isset($_POST['submit'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
 		die('You did not complete all of the required fields');
 	}
 // checks if the username is in use
 	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT username FROM sellers WHERE username = '$usercheck'") 
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		die('Sorry, the username '.$_POST['username'].' is already in use.');
 				}
 // this makes sure both passwords entered match
 	if ($_POST['pass'] != $_POST['pass2']) {
 		die('Your passwords did not match. ');
 	}
 	// here we encrypt the password and add slashes if needed
//PHP needs to be upgraded to 5.5 in order to use password_hash()
//SEE DOC: http://php.net/manual/en/function.password-hash.php
 	$_POST['pass'] = md5($_POST['pass']);
 	if (!get_magic_quotes_gpc()) {
 		$_POST['pass'] = addslashes($_POST['pass']);
 		$_POST['username'] = addslashes($_POST['username']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO sellers (username, password)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
 	$add_member = mysql_query($insert);
 	?>
 <h1>Registered</h1>
 <p>Thank you, you have registered - you may now <a href="login.php">login</a>.</p>
 <?php 
 } 
 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <table border="0">
 <tr><td>Username:</td><td>
 <input type="text" name="username" maxlength="60">
 </td></tr>
 <tr><td>Password:</td><td>
 <input type="password" name="pass" maxlength="10">
 </td></tr>
 <tr><td>Confirm Password:</td><td>
 <input type="password" name="pass2" maxlength="10">
 </td></tr>
 <tr><th colspan=2><input type="submit" name="submit" 
value="Register"></th></tr> </table>
 </form>
 <?php
 }
 ?> 
    
    </td>
    
  </tr>
</table>
</body>
</html>
