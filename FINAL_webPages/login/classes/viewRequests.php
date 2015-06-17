<?php
class viewRequests {
	
	//Set variables from post
	function viewRequests() {
		$this->bizname = $_GET['bizname'];
		
	}
	//Get all Requests
	function getAllPRequests(){
		if($_GET['cmd'] = 'getAllRequests'){
			$query = ("SELECT * FROM productinfo where status = 'needsreview'");
			$sql4Requests = mysql_query($query);
			$allRequests = mysql_fetch_array($sql4Requests) or die("Could not Select All Requests. Contact System Administrator.");
			extract($allRequests);
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
			
		
		foreach($allRequests as $value){
			echo '<tr>';
			echo '<td>';
			echo "$bizname";
			echo '</td>';
			
			echo '<td>';
			echo "$username";
			echo '</td>';
			
			echo '<td>';
			echo "$fname";
			echo '</td>';
			
			echo '<td>';
			echo "$lname";
			echo '</td>';
			
			echo '<td>';
			echo "$email";
			echo '</td>';
			
			echo '<td>';
			echo "$phone";
			echo '</td>';
			
			echo '</tr>';
			
			
		}
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
			$SRequests = mysql_fetch_array($sql4Requests) or die("Could not Select User Request. Contact System Administrator.");
			extract($SRequests);
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
				
				echo '<tr>';
						echo '<td>';
						echo "$bizname";
						echo '</td>';
					
						echo '<td>';
     					echo "$username";
						echo '</td>';
							
						echo '<td>';
						echo "$fname";
						echo '</td>';
										
						echo '<td>';
						echo "$lname";
						echo '</td>';
										
						echo '<td>';
						echo "$email";
						echo '</td>';
							
						echo '<td>';
						echo "$phone";
						echo '</td>';
							
				echo '</tr>';
				echo '</table>';
				echo '</div>';
				
			
			
		}
		
		
	}
}
?>