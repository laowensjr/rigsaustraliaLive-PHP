<?php 
class sendrequest{
function __construct(){
	
	
					$fullname = $_GET['fullname'];
					$bizname = $_GET['bizname'];
					$phone = $_GET['phone'];
					$fromEmail = $_GET['email'];
					$newrig = $_GET['newrig'];
					
					$to = 'laowensjr@gmail.com';
					$subject = 'NEW Equipment REQUEST';
					
					/*
					$message =  'Name: '.$fullname.'<br />'; 
					$message .= 'Company: '.$bizname.'<br />'; 
					$message .= 'Phone: '.$phone.'<br />'; 
					$message .= 'New Rig/Equipment: '.$newrig.'<br />';
					$message .= 'Equipment Request:'.$_GET['equipmentrequest'].'<br />'; 
					
					$headers   = array();
					$headers[] = "MIME-Version: 1.0";
					$headers[] = "Content-type: text/plain; charset=iso-8859-1";
					$headers[] = "From: $fullname <$fromEmail>";
					$headers[] = "Reply-To: $fullname <$fromEmail>";
					$headers[] = "Subject: {$subject}";
					$headers[] = "X-Mailer: PHP/".phpversion();
	
					if(mail($to, $subject, $message, implode("\r\n", $headers))){
						echo 'Your Equipment Request was successfully sent to us. We will respond shortly <br />';
					}else{
						echo 'Email Message Failed was NOT sent';
					}
					*/
					$message = Hi;
					mail($to, $subject, $message);

					
		
				}//end func
			

}

			?>