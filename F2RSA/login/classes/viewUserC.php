<?php 
class viewUserC{
	
	//Properties
	public $bizname;
	
	//Constructor
	function viewUserC(){
		
		$this->bizname = $_GET['bizname'];
	}
	
	//Methods
	function getUserInfo(){
		if($_GET['cmd'] == 'getSUsers'){
			//No need to see if bizname empty again. The redirect checks before it redirects
			$bizname = $_GET['bizname'];
		$space = '&nbsp;&nbsp;&nbsp;&nbsp;';
		$susers = array();
		$query = ("SELECT * FROM sellers WHERE bizname = '$bizname'");
		$sql_getSUsers = mysql_query($query);
		//$allusers = mysql_fetch_array($sql_getAllUsers) or die("Could not Select All Users. Contact System Administrator.");
		echo '<div id="myDetails">';
		echo '<table>';
		echo '<tr>';
		echo '<th>';
		echo 'Select';
		echo '</th>';
		
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
		while($susers = mysql_fetch_array($sql_getSUsers)){
		//foreach($allusers as $value){
			//$value = stripslashes($value);
			echo '<tr>';
			echo '<td>';
			echo '<form id="edituser" name="edituser" method="GET" action="adminTaskBar.php">';
			echo '<label>';
			
			echo '<a href=edituser.php?cmd=modify&bizid='.$susers[id].'>Edit</a>';
			
			echo '</td>';
			
						
			echo '<td>';
			echo "$susers[bizname]";
			echo '</td>';
			
			echo '<td>';
			echo "$susers[username]";
			echo '</td>';
			
			echo '<td>';
			echo "$susers[fname]";
			echo '</td>';
			
			echo '<td>';
			echo "$susers[lname]";
			echo '</td>';
			
			echo '<td>';
			echo "$susers[email]";
			echo '</td>';
			
			echo '<td>';
			echo "$susers[phone]";
			echo '</td>';
			
			echo '<td>';
			
			echo '<input name="bizid" type="hidden" value="'.$susers[id].'" />';
			echo '<input name="tasks" type="hidden" value="edituser" />';
			//echo '&nbsp;<input name="goButton" type="image" id="goButton" src="../adminBarUI/images/goButton4Page.jpg" align="middle" />';
			echo '</form>';
			echo '</td>';
			echo '</label>';
			echo '</tr>';
			
			
		
		}
		echo '</table>';
			
		echo '</div>';
			
	}
		
	}
	
	function editUser($bizname, $field2change, $value){
		// where bizname = bizname, Update $field2change to $value
		//TODO: Make a jQuery with a edit button. When the edit button is pressed make the text disappear and an input appear with an Update button. The update button is a submit button that updates the db with the change.
		$this->bizname = $bizname;
		$query = ("UPDATE sellers SET $field2change = '$value' WHERE bizname = '$this->bizname'");
		$sql_updateUserInfo = mysql_query($query);
		if($sql_updateUserInfo){
			echo 'Updated';
		}else{
			echo 'Failed to Update';
		}
		
	}//End editUser Function
	
		function getAllUsers(){
		if($_GET['cmd'] = 'getAUsers'){
			//No need to see if bizname empty again. The redirect checks before it redirects
		$space = '&nbsp;&nbsp;&nbsp;&nbsp;';
		$allusers = array();
		$query = ("SELECT * FROM sellers");
		$sql_getAllUsers = mysql_query($query);
		//$allusers = mysql_fetch_array($sql_getAllUsers) or die("Could not Select All Users. Contact System Administrator.");
		echo '<div id="myDetails">';
		echo '<table>';
		echo '<tr>';
		echo '<th>';
		echo 'Select';
		echo '</th>';
		
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
		while($allusers = mysql_fetch_array($sql_getAllUsers)){
		//foreach($allusers as $value){
			//$value = stripslashes($value);
			echo '<tr>';
			echo '<td>';
			echo '<form id="viewuser" name="viewuser" method="GET" action="adminTaskBar.php">';
			echo '<label>';
			
			echo '<input type="radio" name="bizname" value="';
				echo "$allusers[bizname]";
				echo '" id="bizname" />';
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[bizname]";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[username]";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[fname]";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[lname]";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[email]";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[phone]";
			echo '</td>';
			
			echo '<td>';
			
			echo '<input name="tasks" type="hidden" value="viewuser" />';
			echo '&nbsp;<input name="goButton" type="image" id="goButton" src="../adminBarUI/images/goButton4Page.jpg" align="middle" /></form>';
			echo '</td>';
			echo '</label>';
			echo '</tr>';
			
			
		
		}
		echo '</table>';
			
		echo '</div>';
			
	}
	
	
	}
}//End Class



?>