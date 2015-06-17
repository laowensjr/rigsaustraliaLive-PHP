<?php
session_start();
include('summaryCounter.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Promoted Rig Details</title>
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

#id01_ {
	margin-left:600px;
	position: absolute;
	left:0px;
	top:0px;
	width:21px;
	height:49px;
}

#id02_ {
	position:absolute;
	left:21px;
	top:0px;
	
	width:223px;
	height:49px;
}

#id03_ {
	position:absolute;
	left:244px;
	top:0px;

	width:126px;
	height:49px;
}

#id04_ {
position:absolute;
	left:370px;
	top:0px;
	
	width:49px;
	height:49px;
}
inputText{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:lighter;
}

-->
</style>
<link href="../../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.whiteMyDetails {	color: #FFF;
}
-->
</style>
</head>

<body>
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

 			{ 			header("Location: mylogin.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 
			?>

 <table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" align="left" valign="top" background="../../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 600px; width: 600px; height:49px; background-image:url(../adminBarUI/images/whole.jpg); background-repeat:no-repeat; padding-top:6px;">
       <form action="adminTaskBar.php" method="GET" enctype="multipart/form-data" name="adminTaskBar">
        &nbsp;&nbsp;<b>Business Name</b> (optional)&nbsp;&nbsp;
        <input name="bizname" type="text" size="10" maxlength="20"  style=""/>
&nbsp;&nbsp;And/Or&nbsp;&nbsp;          
<select name="tasks" id="tasks" size="1" style="width:120px">
      <option value="default" selected="selected" class="inputText">Select A Task</option>
      <option value="viewuser">View Users</option>
      <option value="approvalrequests">View Approval Requests</option>
      <option value="viewlistings">View Listings</option>
      <option value="viewfront">View FrontPageAds</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input name="goButton" type="image" id="goButton" src="../adminBarUI/images/goButton.jpg" align="middle" />
      </form>
    
 
   
    
    </div>
</div><br/><br/>
<?php
include('../titleBar/titleBarAdmin.php');
?>
<br/>



<div style="width: 100%; overflow: hidden;">
  <div style="margin-left:10px; width: 800px; float: left; " id="myTitleNOUnderline" align="left"><form action="<?php echo $_SERVER['PHP_SELF'].'?cmd=search'; ?>" method="get" enctype="application/x-www-form-urlencoded" name="search">
  Update Promoted Rig Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="searchThis" type="text" style="height:24px; vertical-align:top;"/>
    <input name="search2" type="image" id="search" src="../searchBar/search.jpg" align="bottom" />
  </form><br /></div>
    <div style="margin-left: 650px;" align="left" id="myTitle"></div>
</div>

    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; float: left; width: 820px; border: 1px solid black; background-color: #FF9" align="left">
      
    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="myNAMEDetails">
  <tr>
    <td align="left" valign="top">
    
    
    <form id="promotedrigInfo" name="promotedrigInfo" enctype="multipart/form-data" method="POST" action="promotedrigsIadd.php">
   
    <table width="100%" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td colspan="2" bgcolor="#999999" class="whiteMyDetails">Please complete a Listing for the Promoted Front Page Rig using the Form below.</td>
      </tr>
      <tr>
        <td width="66%">Listing Title:<br />
          <input name="ptitle" type="text" size="50" maxlength="100" /></td>
        <td width="34%">&nbsp;</td>
      </tr>
      <tr>
        <td>Category:<br />
          <select name="pcategory" size="1">
            <option value="none" selected="selected">Promoted Rig</option>
           </select>
          </td>
      </tr>
      <tr>
        <td class="myNAMEDetails"><br />
          Is the drill/equipment being sold unencumbured? or under any finance/caveat agreement?<br />
          <select name="underoutsideagreement" id="underoutsideagreement">
            <option value="yes">YES</option>
            <option value="no" selected="selected">NO</option>
          </select></td>
      </tr>
      <tr>
        <td>Beneficial Owner:<br />
          <input name="beneficialowner" type="text" id="beneficialowner" size="25" /></td>
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
        <td class="myNAMEDetails"><div align="right"><br />
          Manufacturer:
          <input type="text" name="pmfg" id="pmfg" />
          <br />
          Year:
          <input type="text" name="pyear" id="pyear" />
          <br />
          Serial/Vin Number:
          <input type="text" name="pvin" id="pvin" />
          <br />
          Is the Vehicle currently licensed:
          <select name="plicensed" id="plicensed">
            <option value="yes" selected="selected">YES</option>
            <option value="no">NO</option>
          </select>
          <br />
          Registration Number:
          <input type="text" name="pregnum" id="pregnum" />
          <hr />
          Engine number:
          <input type="text" name="penginenum" id="penginenum" />
          <br />
          Engine hours:
          <input type="text" name="penginehrs" id="penginehrs" />
          <br />
          Engine Model and Make:
          <input type="text" name="penginemakenmodel" id="penginemakenmodel" />
          <br />
          <br />
          Drifter/ Rotation  head hours:
          <input type="text" name="pdrifterheadhrs" id="pdrifterheadhrs" />
          <br />
          Drifter model:
          <input type="text" name="pdriftermodel" id="pdriftermodel" />
          <br />
          Rotation head model:
          <input type="text" name="protationheadmodel" id="protationheadmodel" />
          <br />
          <br />
          Compressor  manufacturer:
          <input type="text" name="pcompressormfg" id="pcompressormfg" />
          <br />
          Compressor hours:
          <input type="text" name="pcompressorhrs" id="pcompressorhrs" />
          <br />
          <br />
          Are the high pressure vessels currently registered:
          <select name="phighpvreg" id="phighpvreg">
            <option value="yes" selected="selected">YES</option>
            <option value="no">NO</option>
          </select>
          <br />
          <br />
          Are  service histories available?
          <select name="pservicehistory" id="pservicehistory">
            <option value="yes" selected="selected">YES</option>
            <option value="no">NO</option>
          </select>
          <br />
          <br />
          Selling  Price $
          <input name="pprice" type="text" />
          + GST<br />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="myNAMEDetails"><p><br/>
          Please give an  overview of the equipment you wish to make the Promoted Front Page Rig. Please advise any upgrades or  faults that are relevant to this equipment. If the drill is being sold with  additional items please supply a list of equipment that is being sold with the  drill.<br />
          <br/>
        </p>
          <p class="myNAMETitle">Please Enter a Description below</p>
          <textarea name="pldesc" id="pldesc" cols="60" rows="10"></textarea>
          <br />
          <p>  </p>
          <p>&nbsp;</p></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <br />
    <br />
    <input type="submit" name="promotedrigD" id="promotedrigD" value="NEXT" />
    </p>
    </form>
    
    
   </td>
  </tr>
  </table>
 
      
    </div>
    <div style="margin-left: 840px; height: 200px; width: 200px; border: 1px solid black;"  align="left" id="myDetails" ><b>Instructions:</b> Promoted Rig<br />
      <p>Use this form to Update the Details &amp; Pictures of the Promoted Front Page Rig</p>
    </div>
</div>
    <div style="width: 100%; overflow: hidden;">
    <div style="margin-left:10px; width: 600px; float: left;"> &nbsp;</div>
    
    <div style="margin-left: 620px;">&nbsp;</div>
</div>
<br/><br/>

    </td>
    
  </tr>
</table>
<?php


 			} 

 		} 

 		} 

 else 

 //if the cookie does not exist, they are taken to the login screen 

 {//BEGINNING	?>
 
 	<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    
    <td width="1224" height="1600" align="left" valign="top" background="../../images/background.jpg"  class="bg">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../sLOGO4c.jpg" alt="Rig Sales Australia" width="297" height="75" border="0" align="texttop" /></div>
    <div style="margin-left: 620px;">&nbsp;</div>
</div><br/><br/>
<?php
include('../titleBar/titleBarAdmin.php');
?>
<br/>
      <div style="margin-left:20px;   id="myTitleWARNWHITE"> <br /> 
      In order to View Your Overview You must be logged in . <br /> <br /> 
      <a href="../mylogin.php">Login Here</a> then click on <b>Overview.</b> </br></div>
      
     
  </td>
    </tr>
</table>	 

 
 <?php }//END 

 ?> 


</body>
</html>