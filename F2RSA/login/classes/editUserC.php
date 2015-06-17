<?php 
class editUserC{
	
	//Properties
	public $bizid;
	
	//Constructor
	function editUserC(){
		
		$this->bizid = $_GET['bizid'];
	}
	
	//Methods
	function getUserInfo(){
		if($_GET['cmd'] == 'modify'){
			//See adminTaskBar for how it gets the redirect instructions
			$bizid = $_GET['bizid'];
		$space = '&nbsp;&nbsp;&nbsp;&nbsp;';
		$susers = array();
		$query = ("SELECT * FROM sellers WHERE id = '$bizid'");
		$sql_getSUsers = mysql_query($query);
		//$allusers = mysql_fetch_array($sql_getAllUsers) or die("Could not Select All Users. Contact System Administrator.");
		while($susers = mysql_fetch_array($sql_getSUsers)){
		echo '<div id="myDetails">';
		echo '<table>';
		echo '<tr>';
		echo '<th>';
		echo 'Currently Set';
		echo '</th>';
		
		echo '<th>';
		echo 'Company Name: <br />'.@$susers[bizname];
		echo '</th>';
		
		echo '<th>';
		echo 'Username: <br />'.@$susers[username];
		echo '</th>';
		
		echo '<th>';
		echo 'First Name: <br />'.@$susers[fname];
		echo '</th>';
		
		echo '<th>';
		echo 'Last Name: <br />'.@$susers[lname];
		echo '</th>';
		
		echo '<th>';
		echo 'Email: <br />'.@$susers[email];
		echo '</th>';
		
		echo '<th>';
		echo 'Phone: <br />'.@$susers[phone];
		echo '</th>';
		
		echo '</tr>';
		//while($susers = mysql_fetch_array($sql_getSUsers)){
		//foreach($allusers as $value){
			//$value = stripslashes($value);
			echo '<tr>';
			echo '<td>';
			echo '<form id="edituserSave" name="edituserSave" method="GET" action="modifyAndSAVE.php">';
			echo '<label>';
			
			echo 'Set New';
			echo '</td>';
			
						
			echo '<td>';
			echo '<input name="bizname" type="text" value="';
			echo "$susers[bizname]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			echo '<input name="username" type="text" value="';
			echo "$susers[username]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			echo '<input name="fname" type="text" value="';
			echo "$susers[fname]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			echo '<input name="lname" type="text" value="';
			echo "$susers[lname]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			echo '<input name="email" type="text" value="';
			echo "$susers[email]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			echo '<input name="phone" type="text" value="';
			echo "$susers[phone]";
			echo '" size="15" />';
			echo '</td>';
			
			echo '<td>';
			
			echo '<input name="tasks" type="hidden" value="saveuser" />';
			
			echo '&nbsp;<input name="saveuser" type="button" value="Save">';
			echo '</form>';
			echo '</td>';
			echo '</label>';
			echo '</tr>';
			
			
		
		}
		echo '</table>';
			
		echo '</div>';
			
	}
		
	}
	
	function editUser($bizid, $field2change, $value){
		if(isset($_POST['editUserSaveButton']))
		// where bizname = bizname, Update $field2change to $value
		//TODO: Make a jQuery with a edit button. When the edit button is pressed make the text disappear and an input appear with an Update button. The update button is a submit button that updates the db with the change.
		$this->bizid = $bizid;
		$query = ("UPDATE sellers SET $field2change = '".$value."' WHERE id = '".$this->bizid."'");
		$sql_updateUserInfo = mysql_query($query);
		if($sql_updateUserInfo){
			echo 'Updated';
		}else{
			echo 'Failed to Update';
		}
		
	}//End editUser Function
	
			
}//End Class



?>