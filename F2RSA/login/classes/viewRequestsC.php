<?php
class viewRequestsC {
	
	//Set variables from post
	function viewRequestsC() {
		$this->bizname = @$_GET['bizname'];
		
	}
	//Get all Requests
	function getAllPRequests(){
		if($_GET['cmd'] = 'getAllRequests'){
			$space = '&nbsp;&nbsp;&nbsp;&nbsp;';
			$query = ("SELECT * FROM productinfo where status = 'needsreview'");
			$sql4Requests = mysql_query($query);
			//$allRequests = mysql_fetch_array($sql4Requests);// or die("Could not Select All Requests. Contact System Administrator.");
			//extract($allRequests);
			echo '<div id="myDetails">';
		echo '<table  cellspacing="0" cellpadding="0">';
		echo '<tr>';
		
		echo '<th>';
		echo 'Select'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'Company Name'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'Username'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'First Name'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'Last Name'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'Email'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'Phone'.$space;
		echo '</th>';
		
		echo '<th>';
		echo 'More Details';
		echo '</th>';
		
		echo '</tr>';
			
		//foreach($allRequests as $value){
			$i=0;
			while($allRequests = mysql_fetch_array($sql4Requests)){
				if(!empty($allRequests)){
					if ($i % 2 == 0){//for alternating row colors
echo '<tr bgcolor="#FFFFCC" style="font-size:14px; padding:0px;">';
}
else{
echo '<tr bgcolor="#FFFF99" style="font-size:14px; padding:0px;">';
}
			//echo '<tr>';
			echo '<td>';
			echo '<form id="approvalrequests" name="approvalrequests" method="GET" action="adminTaskBar.php">';
			echo '<label>';
			
			echo '<input type="radio" name="bizname" value="';
				echo "$allRequests[bizname]";
				echo '" id="bizname" />';
			echo '</td>';
			
			echo '<td>';
			echo $allRequests['bizname'];
			echo '</td>';
			
			echo '<td>';
			echo "$allRequests[username]";
			echo '</td>';
			
			echo '<td>';
			echo "$allRequests[fname]";
			echo '</td>';
			
			echo '<td>';
			echo "$allRequests[lname]";
			echo '</td>';
			
			echo '<td>';
			echo "$allRequests[email]";
			echo '</td>';
			
			echo '<td>';
			echo "$allRequests[phone]";
			echo '</td>';
			
			echo '<td>';
			
			echo '<input name="tasks" type="hidden" value="approvalrequests" />';
			echo '&nbsp;<input name="goButton" type="image" id="goButton" src="../adminBarUI/images/goButton4Page.jpg" align="middle" /></form>';
			echo '</td>';
			echo '</label>';
			echo '</tr>';
			$i++;
				}//end if empty
				else{
					echo '<tr>';
					echo '<td>';
					echo 'There are no Requests, if you know you\'ve just received a requests please refresh your page for it to show. <a href="viewrequests.php?cmd=getAllRequests"> Click Here to Reload Page</a>';
					echo '</td>';
					echo '</tr>';
				}//end else		
					
								}// end while
			echo '</table>';
			echo '</div>';
			
		}//end if cmd getALLPResquests
		
	}
	
	
	//Gets Specific Request based on Business Name
	function getSRequests(){
		if($_GET['cmd'] = 'getSRequests'){
			$bizname = $_GET['bizname'];
			$query = ("SELECT * FROM productinfo where status = 'needsreview' and bizname = '$bizname'");
			$sql4SRequests = mysql_query($query);
			//$SRequests = mysql_fetch_array($sql4Requests) or die("Could not Select User Request. Contact System Administrator.");
			//extract($SRequests);
			echo '<div id="myTitleNOUnderline">';
			echo '<table>';
			echo '<tr>';
			echo '<th>';
			echo 'Company Name';
			echo '</th>';
			
			echo '<th>';
			echo 'Username';
			echo '</th>';
			
			echo '<th>';
			echo 'First Name';
			echo '</th>';
			
			echo '<th>';
			echo 'Last Name';
			echo '</th>';
			
			echo '<th>';
			echo 'Email';
			echo '</th>';
			
			echo '<th>';
			echo 'Phone';
			echo '</th>';
			
			echo '</tr>';
				while($SRequests = mysql_fetch_array($sql4Requests)){
				if(!empty($SRequests)){
				echo '<tr>';
						echo '<td>';
						echo "$SRequests[bizname]";
						echo '</td>';
					
						echo '<td>';
     					echo "$SRequests[username]";
						echo '</td>';
							
						echo '<td>';
						echo "$SRequests[fname]";
						echo '</td>';
										
						echo '<td>';
						echo "$SRequests[lname]";
						echo '</td>';
										
						echo '<td>';
						echo "$SRequests[email]";
						echo '</td>';
							
						echo '<td>';
						echo "$SRequests[phone]";
						echo '</td>';
							
				echo '</tr>';
				
								}//end if empty
				else{
					echo '<tr>';
					echo '<td>';
					echo 'There are no Requests, if you know you\'ve just received a requests please refresh your page for it to show. <a href="viewrequests.php?cmd=getAllRequests"> Click Here to Reload Page</a>';
					echo '</td>';
					echo '</tr>';
				}//end else		
					
								}// end while
								
								
				echo '</table>';
				echo '</div>';
				
					}
		
		
	}
}
?>