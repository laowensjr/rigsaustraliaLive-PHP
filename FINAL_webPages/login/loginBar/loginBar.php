
<!-- Panel -->
<style type="text/css">
<!--
@import url("css/slide.css");
@import url("css/style.css");
-->
</style>
<!-- jQuery - the core -->
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
<link href="css/slide.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to Rig Sales Australia</h1>
				<h2>Create an Account with Us!</h2>		
				<p class="grey">In order to list your Rig/Equipment with us you must create an account.</p>
				<h2>Need Help?</h2>
				<p class="grey">Call Us: <br/>Email us: </p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>Quick Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
                
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
                
			</div>
		</div>
</div> <!-- /login -->	
	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
