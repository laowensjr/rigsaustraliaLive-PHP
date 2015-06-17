<?php 
class emailUserC{
	
	//Properties
	public $bizname;
	
	//Constructor
	function emailUserC(){
		
		$this->bizname = $_GET['bizname'];
	}
	
	//Methods
	function getUserInfo(){
		if($_GET['cmd'] == 'getUserInfo'){
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
			//echo '<form id="emailuser" name="emailuser" method="GET" action="adminTaskBar.php">';
			echo '<label>';
			
			echo '<a href=emailusers.php?performAction=email&bizid='.$susers[id].'>Email</a>';
			
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
			
			//echo '<input name="bizid" type="hidden" value="'.$susers[id].'" />';
			//echo '<input name="tasks" type="hidden" value="emailuser" />';
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
		
		
		function getAllUsers(){
		if($_GET['cmd'] = 'getALLUsers'){
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
			echo '<form id="emailuser" name="emailuser" method="GET" action="adminTaskBar.php">';
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
			
			echo '<input name="tasks" type="hidden" value="emailuser" />';
			echo '&nbsp;<input name="goButton" type="image" id="goButton" src="../adminBarUI/images/goButton4Page.jpg" align="middle" /></form>';
			echo '</td>';
			echo '</label>';
			echo '</tr>';
			
			
		
		}
		echo '</table>';
			
		echo '</div>';
			
	}
	
	
	}
	
	function sendSingleEmail(){
		$bizid = $_GET['bizid'];
		$query = ("SELECT * FROM sellers where id ='".$bizid."'");
		$sql_emailUsers = mysql_query($query);
		while($sEmailuser = mysql_fetch_array($sql_emailUsers)){
		$to = $sEmailuser[email];
		//extract($sql_emailUsers);
		?>
		<form action="sendnow.php" method="post" enctype="application/x-www-form-urlencoded" name="sendnow">
				<p>To<br />
		  <input name="email" type="text" value="<?php echo @$to; ?>" size="35" />
		  <br />
				<p>Subject<br />
		    <input name="subject" type="text" value="" size="60" />
		    <br />
		    	<br />Message<br />
		    <textarea name="message" cols="90" rows="10"></textarea>
		  </p>
		  <input name="send" type="button" value="Send" />
		</form>
		<?php 
		
		}
		
	}
	
	function sendAllEmail($subject, $message){
		if($_GET['cmd'] == 'sendAllEmail'){
		$query = ("SELECT email FROM sellers");
		$sql_getAllUsersEmail = mysql_query($query);
		while($allusersemail = mysql_fetch_array($sql_getAllUsersEmail)){
		$to = $allusersemail['email'];
		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: Rig Sales Australia <rigsale1@bigpond.net.au>";
		$headers[] = "Bcc: Rig Sales Australia <rigsale1@bigpond.net.au>";
		$headers[] = "Reply-To: Rig Sales Australia <rigsale1@bigpond.net.au>";
		$headers[] = "Subject: {$subject}";
		$headers[] = "X-Mailer: PHP/".phpversion();
		
		if(mail($to, $subject, $email, implode("\r\n", $headers))){
			echo 'Email Message was successfully sent to '.$to.'<br />';
		}else{
			echo 'Email Message Failed was NOT sent to '.$to.'<br />Check to make sure the email address is correct';
			}


		}//end while
		} 

}
	
}//End Class



?>