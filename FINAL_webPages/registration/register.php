<div style="width:500px;">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails" bgcolor="#FFFFFF">
  <tr>
    <td width="34%" align="center" valign="top"><h1>Registration Form</h1>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    
    <td align="center" valign="top">
    
<?php 
//Configs
include('../login/classes/errorChecking/serverCredentials.php');
//Connect to your Database 
$mysqli = connect($username,$password,$database,$servername);
//include('login/classes/errorChecking/uncaughtErrs.php'); 
 //This code runs if the form has been submitted
 if (isset($_POST['submitR'])) { 
 //This makes sure they did not leave any fields blank
 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] | !$_POST['bizname'] | !$_POST['fname'] | !$_POST['lname'] | !$_POST['email'] | !$_POST['phone']  ){
 		
		echo 'You did not complete all of the required fields<br /><a href="registration.php">Try AGAIN</a><br />';
		
		//END
 	}
 // checks if the username is in use
 	elseif (!get_magic_quotes_gpc() && !empty($_POST['username'])) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 $usercheck = $_POST['username'];
 $check = $mysqli->query("SELECT username FROM sellers WHERE username = '$usercheck'") 
if(!$check){
	 printf("Errormessage: %s\n", $mysqli->error);	
	}
//or die(mysql_error());
 $check2 = $check->fetch_array(MYSQLI_NUM);
 //if the name exists it gives an error
 if ($check2 != 0) {
 		echo 'Sorry, the username '.$_POST['username'].' is already in use. <br /><a href="registration.php">Try AGAIN</a><br />';
 				}
 // this makes sure both passwords entered match
 	elseif ($_POST['pass'] != $_POST['pass2'] && !empty($_POST['pass'])) {
 		echo 'Your passwords did not match. <br /><a href="registration.php">Try AGAIN</a><br />';
 	}
 	// here we encrypt the password and add slashes if needed
//PHP needs to be upgraded to 5.5 in order to use password_hash()
//SEE DOC: http://php.net/manual/en/function.password-hash.php
 	$_POST['pass'] = md5($_POST['pass']);
 	if (!get_magic_quotes_gpc() && !empty($_POST['username']) && !empty($_POST['pass'])) {
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
if(!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['bizname']) && !empty($_POST['phone']) ){
	//if ($check2 != 0){
 	$add_member = $mysqli->query($insert);
	//}
 	?>
    <img src="images/sLogo.jpg" width="296" height="64" alt="Rig Sales Australia">
<h1>Registered</h1>
 <p>Thank you, you have registered - you may now login.</p>
 <?php 
}
} 
 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <table border="0" bgcolor="#FFFF00">
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
    