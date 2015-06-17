<?php
//TODO Set variables in Title Bar. So that specific sublinks can be pulled up based on the parent link
?>
<style type="text/css">
<!--
#Table_01 tr td b {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
}
-->
</style>

<table id="Table_01" width="1224" height="90" border="0" cellpadding="0" cellspacing="0" background="../images/titleBarBlankI.jpg">
	<tr>
		<td colspan="9"><img src="../images/TitleBar_01.jpg" width="1224" height="11"></td>
	</tr>
	<tr>
		<td><img src="../images/NexToOverView.jpg" width="44" height="25"></td>
<td width="123" height="25"><div align="center" class="textLinks" ><a href="overview.php">Overview</a></div></td>
		<td>
			<img src="../images/titleBarr_04.jpg" width="41" height="25" alt=""></td>
	  <td width="126" height="25"><div align="center" class="textLinks2Lines"><a href="myproducts.php">Rigs & Equipment</a></div></td>
		<td>
			<img src="../images/titleBarr_06.jpg" width="39" height="25" alt=""></td>
	  <td width="123" height="25"><div align="center" class="textLinks2Lines"><a href="docctr.php">Document Center</a></div></td>
		<td colspan="2" background="../images/titleBarr_08.jpg" align="right">Our Phone: 041 3907649&nbsp;&nbsp;&nbsp;<b>Welcome <?php if(empty($_SESSION[username])){echo 'YOU\'RE LOGGED OUT, <a href="../index.php">Login</a>';}else{ echo ", ".@$_SESSION[username]." !";} ?></b></td>
		<td>
			<img src="../images/titleBarr_09.jpg" width="11" height="25" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="../images/titleBarr_10.jpg" width="44" height="17" alt=""></td>
		<td>
			<img src="../images/UpdateInfo.jpg" width="123" height="17" alt=""></td>
		<td>
			<img src="../images/titleBarr_12.jpg" width="41" height="17" alt=""></td>
		<td>
			<img src="../images/AddProducts.jpg" width="126" height="17" alt=""></td>
		<td>
		  <img src="../images/titleBarr_14.jpg" alt="" width="39" height="17" border="0"></td>
		<td>
		  <img src="../images/ReviewDocs.jpg" alt="" width="123" height="17" border="0"></td>
		<td>
		  <img src="../images/titleBarr_16.jpg" alt="" width="614" height="17" border="0"></td>
		<td>
		  <img src="../images/titleBarr_17.jpg" alt="" width="103" height="17" border="0"></td>
		<td>
			<img src="../images/titleBarr_18.jpg" width="11" height="17" alt=""></td>
	</tr>
	<tr>
		<td><img src="../images/NexToUpdate.jpg" width="44" height="23"></td>
		<td width="123" height="23"><div align="center" class="subTextLinks"><a href="updateProfile.php">Update Profile</a></div></td>
		<td>
			<img src="../images/titleBarr_21.jpg" width="41" height="23" alt=""></td>
		<td width="126" height="23"><div align="center" class="subTextLinks"><a href="addP.php">Add Rig/Equipment</a></div></td>
		<td>
			<img src="../images/titleBarr_23.jpg" width="39" height="23" alt=""></td>
		<td width="123" height="23"><div align="center" class="subTextLinks"><a href="reviewDocs.php">Review Docs</a></div></td>
		<td>
			<img src="../images/titleBarr_25.jpg" width="614" height="23" alt=""></td>
		<td width="103" height="23"><div align="right" class="subTextLinks"><a href="logout.php">Logout</a></div></td>
		<td>
			<img src="../images/titleBarr_27.jpg" width="11" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="../images/titleBarr_28.jpg" width="1224" height="14" alt=""></td>
	</tr>
   
</table>
