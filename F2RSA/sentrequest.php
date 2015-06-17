<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Make An Equipment Request</title>
<style type="text/css">
<!--
body {
	background-image: url(inventory/images/images/RIGSAUSTRALIA_INVENTORY_BACK.jpg);
	background-repeat: repeat;
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

<body onload="MM_preloadImages('images/sdOver.jpg','images/blastholeOVER.jpg','images/surplusOVER.jpg','images/newProductOVER.jpg','images/buyOVER.jpg','images/sellOVER.jpg','images/auctionOVER.jpg')">
<br />
<div align="center" style="background-color:#FFF"><a href="buy.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/buyOVER.jpg',1)"><img src="images/buy.jpg" name="Image9" width="38" height="31" border="0" id="Image9" /></a><a href="registration.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/sellOVER.jpg',1)"><img src="images/sell.jpg" name="Image10" width="49" height="31" border="0" id="Image10" /></a><a href="auction/index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','images/auctionOVER.jpg',1)"><img src="images/auction.jpg" name="Image11" width="84" height="31" border="0" id="Image11" /></a></div>
<div>
<table width="47%" border="0" cellspacing="0" cellpadding="0" align="center" style="border:solid">
  <tr bgcolor="#FFFFCC" style="font-size:14px; padding:0px; padding:">
    <td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="70%" align="center" valign="top" bgcolor="#FFFFFF"><a href="index.php"><img src="images/bigLogoHome.jpg" width="612" height="107" alt="Rig Sales Australia" /></a></td>
    <td width="1%" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="28%" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF99">
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td align="center" bgcolor="#FFFFCC">Our Phone: 041 3907649 Call or Email Us!</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr> 
  <br /><br />
  <tr bgcolor="#FFFF99">
    <td align="center" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:36px">&nbsp;</td>
    <td align="center" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:36px"><p>Your Rig/Equipment Request</p></td>
    <td align="center" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:36px">&nbsp;</td>
    <td align="center" valign="top" style="font-family:Verdana, Geneva, sans-serif; font-size:36px">&nbsp;</td>
    </tr> 
  <br />
  <br />
 
      <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td rowspan="9" align="center" valign="top"><br /><br /><?php
// the message
//$msg = "First line of text\nSecond line of text";

$msg =  "Name: ".$_POST['fullname']."\nCompany:".$_POST['bizname']."\nPhone:".$_POST['phone']."\nEmail: ".$_POST['email']."\nIs this request for a New Rig or Equipment? ".$_POST['newRig']."\nEquipment Request:".$_POST['equipmentrequest']."\n";
					
					$headers   = array();
					$headers[] = "MIME-Version: 1.0";
					$headers[] = "Content-type: text/plain; charset=iso-8859-1";
					$headers[] = "From: $fullname <".$_POST['email'].">";
					$headers[] = "Reply-To: $fullname <".$_POST['email'].">";
					$headers[] = "Subject: {$subject}";
					$headers[] = "X-Mailer: PHP/".phpversion();
						

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email, tested with my email address
if(
mail("rigsale1@bigpond.net.au","New Equipment Request",$msg,implode("\r\n", $headers))){
echo 'Your Rigs/Equipment Request was sent successful. We will contact you shortly. Additionally, please feel free to call us. Thank You.';	
}else{
echo 'Your Rigs/Equipment was NOT sent successful. Please feel free to call us. Thank You.';
}
?><br /><br />
      </p>
        <p>&nbsp;</p></td>
      <td></td>
      <td></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td align="right" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td height="85">&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
 
  <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2"></td>
  </tr>
 

  
 
</table>
</div>
<br /><br />
<div align="center"><a href="inventory/inventory.php?page=surfacedrills" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/sdOver.jpg',1)"><img src="images/sd.jpg" name="Image5" width="275" height="116" border="0" id="Image5" /></a><a href="inventory/inventory.php?page=blastholedrills" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/blastholeOVER.jpg',1)"><img src="images/blasthole.jpg" name="Image6" width="250" height="117" border="0" id="Image6" /></a><a href="inventory/inventory.php?page=surplus" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/surplusOVER.jpg',1)"><img src="images/surplus.jpg" name="Image7" width="268" height="116" border="0" id="Image7" /></a><a href="inventory/inventory.php?page=newprodsnservices" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/newProductOVER.jpg',1)"><img src="images/newProduct.jpg" name="Image8" width="200" height="117" border="0" id="Image8" /></a></div>
</body>
</html>