<?php
/** 
 * @author Owens
 * 
 */
class viewFrontListings {
	
	/**
	 */
	function viewFrontListings() {
		
		$bizname = $_GET['bizname'];
		$this->bizname = $bizname;
		
	}
	
	function getAllFrontListings(){
		if($GET['cmd'] = 'getAllFPListings'){
			$query = ("SELECT * FROM productinfo WHERE page = 'front'");
			$sql4FPListings = mysql_query($query);
			$allFPListings = mysql_fetch_array($sql4FPListings);
			extract($allFPListings);
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
						
					foreach($allFPListings as $value){
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
			}//end if
		
		
		
	}//end function
	
	function getSFPListings(){
		if($_GET['cmd'] = 'getSFPListings'){
			$bizname = $_GET['bizname'];
			$query = ("SELECT * FROM productinfo WHERE bizname = '$bizname' and page = 'front'");
			$sql4FpSListings = mysql_query($query);
			$specificFPListings = mysql_fetch_array($sql4FpSListings);
			extract($specificFPListings);
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