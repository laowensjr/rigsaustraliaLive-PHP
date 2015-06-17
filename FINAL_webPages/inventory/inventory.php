<?php include('inventoryProduct.php'); 
$page = @$_GET['page'];
?>
<html>
<head>
<title>Rig Sales Australia Surface and Blasthole Drills, Surplus</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
		background-color: #39F;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('../images/buyOVER.jpg','../images/sellOVER.jpg','../images/auctionOVER.jpg')">
<!-- Save for Web Slices (RIGSAUSTRALIA_INVENTORY.psd) -->
<div>
<br />
<table id="Table_01" width="1224" height="694" border="0" cellpadding="0" cellspacing="0" align="center" >
	<tr>
		<td colspan="3" rowspan="3" bgcolor="#FFFFFF"><br />
			&nbsp;&nbsp;<a href="../index.php">
				<img src="images/SELL_bigLogoHome.jpg" width="612" height="107" border="0" alt="Rig Sales Australia"></a></td>
		<td colspan="3" rowspan="3" bgcolor="#FFFFFF">
			<img src="images/blankTop.jpg" width="339" height="107" alt=""></td>
		<td width="273" height="53" colspan="7" bgcolor="#FFFFFF"><br />
        <div style="font-size:12px">
        <?php 
//Connect to your Database 
//Configs
include('../login/classes/errorChecking/sConfigs.php');
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
 			//header("Location: login/overview.php");
			
echo 'Welcome '.$info['bizname'].'! <a href="login/overview.php">Your Dashboard</a> '; 
 			}
 		}
 }
 //if the login form is submitted 
 if (isset($_POST['submitL'])) { // if form has been submitted
 // makes sure they filled it in
 	if(!$_POST['username'] | !$_POST['pass']) {
 		echo 'Required Field Missing<a href='.$_SERVER['PHP_SELF'].'>Try again.</a><br />';
 	}
 	// checks it against the database
 	if (!get_magic_quotes_gpc()) {
 		$_POST['username'] = addslashes($_POST['username']);
 	}
 	$check = mysql_query("SELECT * FROM sellers WHERE username = '".$_POST['username']."'")or die(mysql_error());
 //Gives error if user dosen't exist
 $check2 = mysql_num_rows($check);
 if ($check2 == 0) {
 		echo 'That user does not exist in our database. <a href=registration.php>Register</a><br />';
 				}
 while($info = mysql_fetch_array( $check )) 	
 {
 $_POST['pass'] = stripslashes($_POST['pass']);
 	$info['password'] = stripslashes($info['password']);
 	$_POST['pass'] = md5($_POST['pass']);
 //gives error if the password is wrong
 	if ($_POST['pass'] != $info['password']) {
 		echo 'Incorrect password <a href='.$_SERVER['PHP_SELF'].'>Try again.</a><br />';
 	}
 else 
 { 
 
 // if login is ok then we add a cookie 
$_POST['username'] = stripslashes($_POST['username']); 
$hour = time() + 3600; 
setcookie('logincookie', $_POST['username'], $hour); 
setcookie('passcookie', $_POST['pass'], $hour);	 
 // Set session variables 
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['pass'] = $_POST['pass'];
   //$_SESSION['lname'] = $_POST['lname'];
   //$_SESSION['email'] = $_POST['email'];
   //$_SESSION['phone'] = $_POST['phone'];
//then redirect them to the overview area 
//header("Location: login/overview.php"); 
echo 'Welcome '.$info['bizname'].'!';
 } 
} 
} 
else 
{	 
 
 // if they are not logged in 
 ?> 
 </div><br />
        <div  align="right"  id="myDetails" style="background-color:#FFF;">
        
         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      &nbsp;
      <input name="username" type="text" size="10" />
      &nbsp;&nbsp;
      <input name="pass" type="password" size="10" />
      <input type="submit" name="submitL" id="Go" value="Login" />&nbsp;
      <div style="font-size:12px">
New Seller? <a href="registration.php">Click here to Register</a>&nbsp;<br />
<a href="login/overview.php">My Rigs/Equipment Dashboard</a></div>
</form>
<?php 
 } 
 
 ?> 
    </div></td>
	</tr>
	<tr>
		<td colspan="7" bgcolor="#FFFFFF">
			<img src="images/SELLSlice04.jpg" width="273" height="23" alt=""></td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">
			<img src="images/SELLSlice05.jpg" width="8" height="31" alt=""></td>
		<td bgcolor="#FFFFFF"><a href="../buy.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image32','','../images/buyOVER.jpg',1)"><img src="../images/buy.jpg" name="Image32" width="38" height="31" border="0"></a></td>
		<td bgcolor="#FFFFFF">
			<img src="images/SELLSlice07.jpg" width="19" height="31" alt=""></td>
		<td bgcolor="#FFFFFF"><a href="../registration.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image33','','../images/sellOVER.jpg',1)"><img src="../images/sell.jpg" name="Image33" width="49" height="31" border="0"></a></td>
		<td bgcolor="#FFFFFF">
			<img src="images/SELLSlice09.jpg" width="20" height="31" alt=""></td>
		<td bgcolor="#FFFFFF"><a href="../auction/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image34','','../images/auctionOVER.jpg',1)"><img src="../images/auction.jpg" name="Image34" width="84" height="31" border="0"></a></td>
		<td bgcolor="#FFFFFF">
			<img src="images/SELLSlice11.jpg" width="55" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="13">
			<img src="images/SELLSlice12.jpg" width="1224" height="21" alt=""></td>
	</tr>
	<tr>
		<td align="center" valign="top" bgcolor="#FFFFFF"><h2>Browse Our Listings</h2><a style="color:#00F" href="<?php echo $_SERVER['PHP_SELF']; ?>?page=surfacedrills">Surface Drills</a><br/><a  style="color:#00F" href="<?php echo $_SERVER['PHP_SELF']; ?>?page=blastholedrills">Blasthole Drills</a><br /><a style="color:#00F" href="<?php echo $_SERVER['PHP_SELF']; ?>?page=surplus">Surplus</a><br /><br /><a style="color:#00F" href="<?php echo $_SERVER['PHP_SELF']; ?>?page=newprodsnservices">New! Products/Services</a><br /><br /></td>
		<td colspan="4" align="center" valign="top"><?php /*include('../login/classes/uncaughtErrs.php'); */?><?php if($page != 'blastholedrills' && $page != 'surplus' && $page != 'newprodsnservices'){ 
		echo '<img src="images/SELLSlice14.jpg" width="695" height="130" alt="">';
		}elseif($page != 'surfacedrills' && $page !='surplus' && $page != 'newprodsnservices'){
			echo '<img src="images/InventorySlice14.jpg" width="695" height="130" alt="">';
			}elseif($page != 'blastholedrills' && $page !='surfacedrills' && $page != 'newprodsnservices'){
				echo '<img src="images/InventorySurplusSlice14.jpg" width="695" height="130" alt="">';
				}elseif($page != 'blastholedrills' && $page !='surfacedrills' && $page != 'surplus' ){
					echo '<img src="images/InventoryNewProdsSlice14.jpg" width="695" height="130" alt="">';
					}elseif($page != 'blastholedrills' && $page !='surfacedrills' && $page != 'surplus' && $page != 'newprodsnservices'){
						include('../login/classes/errorChecking/uncaughtErrs.php');
					}else{
					echo "Nothing";
					}?></td>
		<td colspan="8" align="center" valign="bottom" bgcolor="#FFFFFF"><h2>&nbsp;</h2></td>
	</tr>
	<tr>
		<td align="center" valign="top" bgcolor="#FFFFFF"><table width="98%" height="451"align="center" cellpadding="0"  cellspacing="0"  bgcolor="#FFFFFF" style="border:#00F; border:thick">
	      
	    <tr>
	      <td align="center" valign="top" bgcolor="#FFFF00" style="border:solid"><form name="search" method="get" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
	        <p>      
	        <h3>Enter A Keyword(optional)</h3>
	        <br />
	        <input name="keyword" type="text" id="textfield" size="20">
	        <br />
	        <br />
	        <b>Search By Sections</b><br />
	        <select name="page" id="select">
	          <option value="all" selected>Search ALL</option>
	          <option value="surfacedrills">Surface Drills</option>
	          <option value="blastholedrills">Blasthole Drills</option>
	          <option value="surplus">Surplus</option>
	          </select>
	        <br />
	        <br />
	        <input name="Find It" type="submit" value="search">
	        </p>
	        </form>
	        <br />
	        <img src="../images/sLogo.jpg" width="226" height="64" alt="Rig Sales Australia"><br /><b>Phone: 041 3907649</b></td>
	      </tr>
	    </table></td>
		<td width="695" height="218" colspan="4" align="center" valign="top" style="background-image:url(images/images/RIGSAUSTRALIA_INVENTORY_BACK.jpg)"><br />
<div style="width:250px; azimuth:far-left;"></div>
<?php 
$runPageInventory = new inventoryProduct();
echo $runPageInventory->getPageInventory($page);
?></td>
	  <td colspan="8" align="center" valign="top" bgcolor="#FFFFFF"><a href="advertise.php?sidead=1"><img src="../images/sideADspace.jpg" width="208" height="485" border="0"></a>
      
      
      </td>
	</tr>
	<tr>
		<td>
			<a href="advertise.php?footerad=1">
				<img src="images/footerAD1.jpg" width="253" height="135" border="0" alt=""></a></td>
		<td>
			<a href="advertise.php?footerad=2">
				<img src="images/footerAD2.jpg" width="235" height="135" border="0" alt=""></a></td>
		<td colspan="2">
			<a href="advertise.php?footerad=3">
				<img src="images/footerAD3.jpg" width="233" height="135" border="0" alt=""></a></td>
		<td>
			<a href="advertise.php?footerad=4">
				<img src="images/footerAD4.jpg" width="227" height="135" border="0" alt=""></a></td>
		<td colspan="8">
			<img src="images/SELLSlice23.jpg" width="276" height="135" alt=""></td>
	</tr>
	<tr>
		<td colspan="13">
			<img src="images/SELLSlice24.jpg" width="1224" height="82" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="253" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="235" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="124" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="109" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="227" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="38" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="19" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="49" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="84" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="55" height="1" alt=""></td>
	</tr>
</table>
</div>
<!-- End Save for Web Slices -->
</body>
</html>