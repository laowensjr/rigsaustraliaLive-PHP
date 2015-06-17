<?php 
class pendingRequestsO{
	
	
	function __construct() {
//$username = $_SESSION['username'];
			//Connects to your Database
			//Make this more OO SEE Folder name FINAL_webPages
			mysql_connect("localhost", "owenspcc_laowens", "lo19315761") or die(mysql_error());
			mysql_select_db("owenspcc_rigsalesaustralia") or die(mysql_error());
			$sql4selectingProducts = mysql_query("SELECT * FROM productinfo WHERE status = 'needsreview'")or die(mysql_error());
				$num_rows = mysql_num_rows($sql4selectingProducts);	
				if($num_rows == 0){
					echo 'There are "0" Requests Awaiting Approval';
				}else{
				echo 'There are "'.$num_rows.'" Requests Awaiting Approval <a href="viewrequests.php">Click Here to View</a>';	
				} 
	}
	}
					//$t = new pendingRequestsO();
					
					?>