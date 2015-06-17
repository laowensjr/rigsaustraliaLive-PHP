<?php
/** 
 * @author Owens
 * 
 */
class viewListings {
	public $bizname;
	
	/**
	 */
	function viewListings() {
	$bizname = $_GET['bizname'];	
	$this->bizname = $bizname;	
		
	}
	//Gets ALL listings
	function getAllListings(){
		if($_GET['cmd'] = 'getAllListings'){
			$query = ("SELECT * FROM productinfo");	
			$sql4pListings = mysql_query($query);
			$allListings = mysql_fetch_array($sql4pListings);
			extract($allListings);
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
			
			foreach($allListings as $value){
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
						
		}//foreach
		echo '</table>';
		echo '</div>';
		}//if
	}//end function
	
	/*
	 * Gets a Specific Listing
	 */
	function getSListing(){
		if($_GET['cmd'] = 'getSListings'){
			$bizname = $_GET['bizname'];
			$query = ("SELECT * FROM productinfo WHERE bizname = '$bizname'");
			$sql4pSListings = mysql_query($query);
			$specificListings = mysql_fetch_array($sql4pSListings);
			extract($specificListings);
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
	
}//end class
?>