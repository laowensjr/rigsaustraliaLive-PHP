<?php
class inventory {
	//The idea is to have the ability to add a product listing manually. Maybe necesssary if the user is unable to add the product listing. So it can add to DB and has functions to pull data out DB.
	//public $page;
	
	function inventory(){
	//$this->page =  $_GET['page'];
	//set page to test
	//$this->page = 'surfacedrills';
	// Connects to your Database
	mysql_connect("localhost", "laowensjr", "lo19315761") or die(mysql_error());
	mysql_select_db("rigsalesaustralia") or die(mysql_error());
	
	}
	
	function getPageInventory($page){	
	//$page = $this->page;
	
	 
	$sql4pages = "SELECT * FROM productinfo WHERE page = '$page' AND status = 'approved'";
	$approvedProductsSQL = mysql_query($sql4pages);
	while($approvedProducts = mysql_fetch_array($approvedProductsSQL)){
		extract($approvedProducts);
		//Extract variables then Output table for Product Listing		
		?>
<link href="../css/rigSaleAustraliaCSS.css" rel="stylesheet" type="text/css">
   <style type="text/css">
<!--
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style><div style="border:solid; width:608px; height:193px;">     
<table style="width:608px; height:193px;" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01"  >
	<tr>
		<td colspan="5" align="left" valign="middle" bordercolor="#FFFF00" bgcolor="#1401F9" class="myTitleWARNWHITE">&nbsp;<a href="moredetails.php?id=<?php echo $id; ?>&ptitle=<?php echo $ptitle; ?>"><?php echo @$ptitle; ?></a></td>
	</tr>
	<tr>
		<td width="122" height="96" align="center" valign="middle" bgcolor="#ECECEC"><a href="moredetails.php?id=<?php echo $id; ?>&ptitle=<?php echo $ptitle; ?>"><img src='<?php echo "$o1img"; ?>' width="100" height="89" alt="Original Image 1" border="1px" ></a></td>
		
		<?php $logo = '../images/sCrown.jpg'; ?>
        
		<td width="122" height="96" align="center" valign="middle" bgcolor="#ECECEC"><?php if(empty($o2img)){echo '';}else {?><a href="moredetails.php?id=<?php echo $id; ?>&ptitle=<?php echo $ptitle; ?>"><?php echo '<img src="';echo $o2img; echo '" width="100" height="89" alt="Original Image 2" border="1px"></a>';} ?></td>
        
		<td width="122" height="96" align="center" valign="middle" bgcolor="#ECECEC"><?php if(empty($o3img)){echo '';}else {echo '<img src="';echo $o3img; echo '" width="100" height="89" alt="Original Image 2" border="1px">';} ?></td>
        
		<td width="122" height="91" align="center" valign="middle" bgcolor="#ECECEC"></td>
		<td width="122" height="91" align="right" valign="top" bgcolor="#ECECEC"><div class="textLinks"><?php echo "$"."$pprice"." + GST"; ?></div><div class="redAlertText"><?php echo "$palert"; ?></div>
		  <div><?php echo @$pspecialnote; ?></div>
		  <div>Call: 041 3907649</div></td>
	</tr>
	<tr>
    <?php
	//echo substr('abcdef', 0, 4);
	$customShortDescr = substr($pldesc, 0, 200);
	
	?>
		<td height="66" colspan="4" align="left" valign="top" bgcolor="#ECECEC" class="myNAMEDetails"><?php /*
		<?php // echo @$customShortDescr; ?><a style="color:#000" href="moredetails.php?id=<?php //echo $id; ?>&ptitle=<?php //echo $ptitle; ?>">
         */ ?><a href="../pDetails1MockupLightB.php">...More Details</a></td>
		<td width="122" height="66" align="center" valign="middle" bgcolor="#ECECEC">
		<form name="itempagelist" method="post" action="pdetails.php">
        <input name="productID" type="hidden" value="<?php echo "$id"; ?>">
        <input name="productTitle" type="hidden" value="<?php echo "@$ptitle"; ?>">
	      <input type="submit" name="submit" id="submit" value="Enquire">
        </form>
		
		
		
		</td>
	</tr>
	<tr>
		<td height="8" colspan="5" align="left" valign="top" bgcolor="#FFFFFF"><?php echo @$pitemfooter; ?><a href="test.php"></td>
        
	</tr>
</table>
</div>
		<?php 
		//echo two breaks for space
		echo '<br />';
		}//end while
		}//end function
			
					
}//end class
?>
<?php
$runPageInventory = new inventory();
echo $runPageInventory->getPageInventory('surfacedrills');
?>