<?php 
class viewUser{
	
	//Properties
	public $bizname;
	
	//Constructor
	function viewUser(){
		
		$this->bizname = $_GET['bizname'];
	}
	
	//Methods
	function getUserInfo(){
		//returns array of Business Info
		if($_GET['cmd'] = 'getSUser'){
		$this->bizname = $_GET['bizname'];
		
		$biznameInfo = array();
		$query = ("SELECT * FROM sellers WHERE bizname = '$this->bizname'");
		$sql_biznameInfo = mysql_query($query);
		$biznameInfo = mysql_fetch_array($sql_biznameInfo) or die("Could not Select $bizname Info. Contact System Administrator");
		return $biznameInfo;	
		
		
		
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
		$allusers = mysql_fetch_array($sql_getAllUsers) or die("Could not Select All Users. Contact System Administrator.");
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
		
		foreach($allusers as $value){
			$value = stripslashes($value);
			echo '<tr>';
			echo '<td>';
			echo '<form id="viewuser" name="viewuser" method="post" action="viewUser.php?cmd=getSUser">';
			echo '<label>';
			
			echo '<input type="radio" name="bizname" value="';
				echo "$allusers[bizname] => $value";
				echo '" id="bizname" />';
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[username] => $value";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[fname] => $value";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[lname] => $value";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[email] => $value";
			echo '</td>';
			
			echo '<td>';
			echo "$allusers[phone] =>$value";
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