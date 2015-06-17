<?php
session_start();
include('classes/summaryCounter.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Login</title>
<style type="text/css">
<!--
body {
	background-color: #39F;
}.textLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.textLinks2Lines {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #00F;
}
.subTextLinks {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	color: #000;
}
a:link {
	text-decoration: none;
	color: #999;
}
a:visited {
	text-decoration: none;
	color: #06F;
}
a:hover {
	text-decoration: none;
	color: #000;
}
a:active {
	text-decoration: none;
	color: #00F;
}
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <br/><br/>
 <table width="1224" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" align="left" valign="top" background="../images/background.jpg"  class="bg">
   
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">Administrative Toolbar Box</div>
</div><br/><br/>
<?php
?>
<br/>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; " id="myTitleNOUnderline" align="left">Welcome: Getting Started with Registration</div>
    <div style="margin-left: 650px;" align="left" id="myTitle"><img src="sLOGO4QuickLogin.jpg" width="280" height="53" alt="Login" /></div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 350px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      
    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="34%" align="center" valign="top">In order to sell on our site you must Create an Account with us. Its easy and fast. <br />
      <br />
      <br /><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    
<?php 
//Connects to your Database 
 include('classes/errorChecking/sConfigs.php');
 //$runConnection = new sConfigs();
 //This code runs if the form has been submitted
 if (isset($_POST['submitR'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] | !$_POST['bizname'] | !$_POST['fname'] | !$_POST['lname'] | !$_POST['email'] | !$_POST['phone']  ){
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
 		die('Sorry, the username '.$_POST['username'].' is already in use. <a href="mylogin.php">TRY AGAIN</a>');
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
		
		$_POST['bizname'] = addslashes($_POST['bizname']);
		$_POST['fname'] = addslashes($_POST['fname']);
		
		$_POST['lname'] = addslashes($_POST['lname']);
		
		$_POST['email'] = addslashes($_POST['email']);
		
		$_POST['phone'] = addslashes($_POST['phone']);
 			}
 // now we insert it into the database
 	$insert = "INSERT INTO sellers (username, password, bizname, fname, lname, email, phone)
 			VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['bizname']."', '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['phone']."')";
 	$add_member = mysql_query($insert);
 	?>
 <h1>Registered</h1>
 <p>Thank you, you have registered - you may now <a href="mylogin.php">login</a>.</p>
 <?php 
 } 
 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <table border="0">
<tr>
  <td>Company Name</td>
  <td>
    <input type="text" name="bizname" maxlength="60" />
  <tr>
  <td>First Name:</td>
  <td>
    <input type="text" name="fname" maxlength="60" />
  <tr>
   <td>Last Name</td>
   <td>
 <input type="text" name="lname" maxlength="60">
 <tr>
   <td>Email:</td>
   <td><input type="text" name="email" maxlength="60" />    
 <tr>
   <td>Phone:</td>
   <td>
     <input type="text" name="phone" maxlength="60" />
   <tr>
   <td colspan="2"><b>Choose Your desired Username</b></td>
   </tr>
 <tr><td>Username:</td><td>
 <input type="text" name="username" maxlength="60">
 </td></tr>
 <tr><td>Password:</td><td>
 <input type="password" name="pass" maxlength="10">
 </td></tr>
 <tr><td>Confirm Password:</td><td><input type="password" name="pass2" maxlength="10" /></td></tr>
 
 <tr><th colspan=2>&nbsp;</th></tr>
 <tr>
   <th colspan=2><input type="submit" name="submitR" 
value="Register" /></th>
 </tr>
 </table>
 </form>
 <?php
 }
 ?> 
    
    </td>
    
  </tr>
</table><br /></td>
    </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    <?php 
//Connects to your Database 
// include('classes/errorChecking/sConfigs.php');
include('classes/errorChecking/serverCredentials.php');
	  //mysqli($host,$usr,$pw,$db);
	 $mysqli = new mysqli($servername,$username,$password,$database);
 //Checks if there is a login cookie
 if(isset($_COOKIE['logincookie']))
 //if there is, it logs you in and directes you to the overview page
 { 
 	
   
   //Set Cookies
	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie'];
 	 	$check = $mysqli->query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error());
 	while($info = $check->fetch_array(MYSQLI_ASSOC)) 	
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
 		die('You did not fill in a required field. <a href=mylogin.php>Click Here to try again.</a>');
 	}
 	// checks it against the database
 	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 	$check = $mysqli->query("SELECT * FROM sellers WHERE username = '".$_POST['username']."'")or die(mysql_error());
 //Gives error if user dosen't exist
 $check2 = $check->fetch_array(MYSQLI_NUM);
 if ($check2 == 0) {
 		die('That user does not exist in our database. <a href=mylogin.php>Click Here to Register</a>');
 				}
 while($info = $check->fetch_array(MYSQLI_ASSOC)) 	
 {
 $_POST['pass'] = stripslashes($_POST['pass']);
 	$info['password'] = stripslashes($info['password']);
 	$_POST['pass'] = md5($_POST['pass']);
 //gives error if the password is wrong
 	if ($_POST['pass'] != $info['password']) {
 		die('Incorrect password, please try again. <a href=mylogin.php>Click Here to try again.</a>');
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
    </div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left;"> Optional UseBox</div>
    
    <div style="margin-left: 620px;"> A message Box</div>
</div>
<br/><br/>
    </td>
    
  </tr>
</table>
 
</body>
</html>