<?php
class emailAllUsersC {
	public $subject, $message;
	
	function __construct($subject, $message) {
		$this->subject = $subject;
		$this->message = $message;
		
	}
		
		
function sendAllEmail(){
	
			if($_GET['cmd'] == 'sendAllEmail'){
				$query = ("SELECT email FROM sellers");
				$sql_getAllUsersEmail = mysql_query($query);
				while($allusersemail = mysql_fetch_array($sql_getAllUsersEmail)){
					$to = $allusersemail['email'];
					$subject = $this->subject;
					$message = $this->message;
					
					$headers   = array();
					$headers[] = "MIME-Version: 1.0";
					$headers[] = "Content-type: text/plain; charset=iso-8859-1";
					$headers[] = "From: Rig Sales Australia <rigsale1@bigpond.net.au>";
					$headers[] = "Bcc: Rig Sales Australia <rigsale1@bigpond.net.au>";
					$headers[] = "Reply-To: Rig Sales Australia <rigsale1@bigpond.net.au>";
					$headers[] = "Subject: {$subject}";
					$headers[] = "X-Mailer: PHP/".phpversion();
		
					if(mail($to, $subject, $message, implode("\r\n", $headers))){
						echo 'Email Message was successfully sent to '.$to.'<br />';
					}else{
						echo 'Email Message Failed was NOT sent to '.$to.'<br />Check to make sure the email address is correct';
					}
		
		
				}//end while
			}
		
		
		
		
		
		
	}
}

?>