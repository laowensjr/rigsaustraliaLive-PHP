<?php
ob_start();
session_start();
include('classes/productSummary.php');
//$_SESSION['fname'] = 'Lawrence';
//$_SESSION['lname'] = 'Owens';
//@$email = 'laowensjr@gmail.com';
//@$phone = '407-502-5555';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Rigs/Equipment Details</title>
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
.whiteMyDetails {
	color: #FFF;
}
-->
</style>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript">
function openRequestedPopup()
{
window.open('pictures.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
function openRequestedPopup2()
{
window.open('pictures2.php', 'My Picture',
'width=500,height=300,resizable=yes,scrollbars=yes,status=yes');
}
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
 </script>
</head>
<body onload="MM_preloadImages('../images/sellOVER.jpg','../images/buyOVER.jpg','../images/auctionOVER.jpg')">
<br/><br/>
<?php
//Connects to your Database 
//Make this more OO SEE Folder name FINAL_webPages
mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error()); 
 mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['logincookie'])) 
 { 
 	$username = $_COOKIE['logincookie']; 
 	$pass = $_COOKIE['passcookie']; 
 	 	$check = mysql_query("SELECT * FROM sellers WHERE username = '$username'")or die(mysql_error()); 
 	while($info = mysql_fetch_array( $check )) 	 
 		{ 
 extract($info);
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 	
			header("Location: mylogin.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
			?>
 <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="2000" align="left" valign="top" background="../images/background.jpg"  class="bg"><div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;"></div>
</div>
<br/>
<div style="azimuth:right" align="right"><a href="../buy.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image47','','../images/buyOVER.jpg',1)"><img src="../images/buy.jpg" name="Image47" width="38" height="31" border="0" id="Image47" /></a>&nbsp;&nbsp;&nbsp;<a href="../registration.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image46','','../images/sellOVER.jpg',1)"><img src="../images/sell.jpg" name="Image46" width="49" height="31" border="0" id="Image46" /></a>&nbsp;&nbsp;&nbsp;<a href="../auction/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image48','','../images/auctionOVER.jpg',1)"><img src="../images/auction.jpg" name="Image48" width="84" height="31" border="0" id="Image48" /></a></div>
<br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
<div>
<div style="background-color:#FFF">
        <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tr>
            <td colspan="2" align="left" valign="top"><img src="../images/backendHeaders/addRigsBACKENDimageHEADERS.jpg" width="1223" height="117" /></td>
          </tr>
  </table>
      
      </div>
</div>
<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 600px; float: left; color: #000;" id="myTitleNOUnderline" align="left"><h3> Rigs/Equipment: Details</h3></div>
    <div style="margin-left: 650px;" align="left" id="myTitle"><img src="sLOGO4MYPRODUCTSUMMARY.jpg" alt="My Product Summary" width="280" height="53" border="0" align="top" /></div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left; height: 1450px; width: 600px; border: 1px solid black; background-color: #FF9" align="left">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td width="4%" rowspan="2" align="center" valign="top">
    
  
   	 
	 </td>
      
   
    <td width="96%" align="left" valign="top" class="myNAMETitle">
    <form id="pInfo" name="pinfo" enctype="multipart/form-data" method="POST" action="addI.php">
   
      
	  <p>
	    <?php 
			}//End while
			
			}//End First if isset
	  
	  //else{
	 ?>
	  </p>
	  <table width="100%" border="0" cellspacing="1" cellpadding="1">
	    <tr>
	      <td colspan="2" bgcolor="#999999" class="whiteMyDetails">Please complete the Listing Form below.</td>
	      </tr>
	    <tr>
	      <td width="66%">Listing Title:<br />
	        <input name="ptitle" type="text" size="50" maxlength="100" /></td>
	      <td width="34%">&nbsp;</td>
	      </tr>
	    <tr>
	      <td>Category:<br /><select name="pcategory" size="1">
	        <option value="none" selected="selected">Select A Category</option>
	        <option value="surfaceDrills">Surface Drills</option>
	        <option value="blastholeDrills">BlastHole Drills</option>
	        <option value="undergroundDrills">Underground Drills</option>
	        <option value="other">Other</option>
	        </select>
	      Other: 
	      <input type="text" name="pothercategory" id="pothercategory" /></td>
	      </tr>
	    <tr>
	      <td class="myNAMEDetails"><br />Is the drill/equipment being sold unencumbured? or under any finance/caveat agreement?<br /><select name="underoutsideagreement" id="underoutsideagreement">
	        <option value="yes">YES</option>
	        <option value="no" selected="selected">NO</option>
	        </select></td>
	      </tr>
	    <tr>
	      <td>Beneficial Owner:<br /><input name="beneficialowner" type="text" id="beneficialowner" size="25" /></td>
	      </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      </tr>
	    <tr>
	      <td>Equipment/Identificaton Details</td>
	      <td>&nbsp;</td>
	      </tr>
	    <tr>
	      <td class="myNAMEDetails"><div align="right"><br />Manufacturer:<input type="text" name="pmfg" id="pmfg" /><br />Year:<input type="text" name="pyear" id="pyear" /><br />Serial/Vin Number:<input type="text" name="pvin" id="pvin" /><br />Is the Vehicle currently licensed:
	        
<select name="plicensed" id="plicensed">
  <option value="yes" selected="selected">YES</option>
  <option value="no">NO</option>
	          </select>
	        <br />
	        Registration Number:
	        <input type="text" name="pregnum" id="pregnum" /><hr />Engine number:<input type="text" name="penginenum" id="penginenum" /><br />Engine hours:<input type="text" name="penginehrs" id="penginehrs" /><br />Engine Model and Make:<input type="text" name="penginemakenmodel" id="penginemakenmodel" /><br /><br />Drifter/ Rotation  head hours:<input type="text" name="pdrifterheadhrs" id="pdrifterheadhrs" /><br />Drifter model:<input type="text" name="pdriftermodel" id="pdriftermodel" /><br />Rotation head model:<input type="text" name="protationheadmodel" id="protationheadmodel" /><br /><br />Compressor  manufacturer:<input type="text" name="pcompressormfg" id="pcompressormfg" /><br />Compressor hours:<input type="text" name="pcompressorhrs" id="pcompressorhrs" /><br /><br /> Are the high pressure vessels currently registered:<select name="phighpvreg" id="phighpvreg">
  <option value="yes" selected="selected">YES</option>
  <option value="no">NO</option>
	          </select>
              <br /><br />  Are  service histories available?<select name="pservicehistory" id="pservicehistory">
  <option value="yes" selected="selected">YES</option>
  <option value="no">NO</option>
	          </select><br /><br />Selling  Price $<input name="pprice" type="text" />+ GST<br />
              </div></td>
	      <td>&nbsp;</td>
	      </tr> 
	    <tr>
	      <td class="myNAMEDetails"><p><br/>Please give an  overview of the equipment you wish to sell. Please advise any upgrades or  faults that are relevant to this equipment. If the drill is being sold with  additional items please supply a list of equipment that is being sold with the  drill.<br /><br/>
	    <p class="myNAMETitle">Please Enter a Description below</p>
	    <textarea name="pldesc" id="pldesc" cols="60" rows="10"></textarea>
	    <br />
	       
            <p>
              <input type="checkbox" name="affirm" id="affirm" />
              By Clicking this BOX. You <b>AGREE</b>,
              Rig  Sales Australia is not liable or responsible for listings supplied to Rig Sales  Australia. . The vendor is liable for any actions that may occur from  misleading or false information contained in this document.  I declare that all information supplied in  this document is true and accurate.  </p>
            <p>&nbsp;</p></td>
	      <td>&nbsp;</td>
	      </tr>
	    </table>
	  <br />
	 
	    <input type="submit" name="pInfoSubmit" id="pInfoSubmit" value="NEXT" />
	    </p>
    </form><div id="myDetails" align="center"></div>
      </td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#0000FF" class="whiteMyDetails">Click Next, and then  ADD your Images. <br />
     
    
    </td>
  </tr>
    </table>
 
      
    </div>
    <div style="margin-left: 630px; height: 200px; width: 400px; border: 1px solid black;"  align="left" id="myDetails" ><?php
$p= new productSummary();
	if(isset($_POST['pInfoSubmit'])){
$pictureCount = $p->getPictureCount();
	}else{
		$pictureCount = $p->getPictureCount();
	if(isset($_POST['o1imgSubmit'])){
					$pictureCount = $p->getPictureCount();
					header("Location: addI.php");
					}
}
?> * You have " <b> <?php echo $p->getProductCount();?> </b>" Product(s) and " <b><?php echo $p->getPictureCount();?></b> " Image(s) Listed in Premium Listings.
    
</div>
</div>
    <div style="width: 100%; overflow: hidden;">
      <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;"></div>
      
      <div style="margin-left: 620px;">
       </div>
</div><br />
   
    <div style=" background-color: #FF9; margin-left:10px; width: 600px; float: left;">
      <div id= "myTitle" align = "left"></div>
    </div>
    </div>
      
      <div style="margin-left: 620px;">&nbsp;
      </div>
    </div>
    </td>
   </tr>
</table>
    <?php 
	  }//BEGIN
	  else 
 
 //if the cookie does not exist, they are taken to the login screen 
 {//BEGINNING	?>
 
 	<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">&nbsp;</div>
</div><br/><br/>
<?php
include('titleBar/titleBarF.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> In order to ADD PRODUCTS You must be logged in . <br /> <br /> <a href="mylogin.php">  Login Here</a> then click on <b>Add Products.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 
 
 <?php }//END 
 ?> 
</body>
</html>
<?php
ob_end_flush();
?>