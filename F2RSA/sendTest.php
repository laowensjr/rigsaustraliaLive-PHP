<?php
// the message
//$msg = "First line of text\nSecond line of text";
$_POST['email'] = 'taracalhoun2012@gmail.com';

$msg =  "Name: ".$_POST['fullname']."\nCompany:".$_POST['bizname']."\nPhone:".$_POST['phone']."\nEmail: ".$_POST['email']."\nIs this request for a New Rig or Equipment? ".$_POST['newRig']."\nEquipment Request:".$_POST['equipmentrequest']."\n";
					
					$headers   = array();
					$headers[] = "MIME-Version: 1.0";
					$headers[] = "Content-type: text/plain; charset=iso-8859-1";
					$headers[] = "From: $fullname <".$_POST['email'].">";
					$headers[] = "Reply-To: $fullname <".$_POST['email'].">";
					$headers[] = "Subject: {$subject}";
					$headers[] = "X-Mailer: PHP/".phpversion();
						

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(
mail("laowensjr@gmail.com","New Equipment Request",$msg,implode("\r\n", $headers))){
echo 'Your Rigs/Equipment Request was sent successful. We will contact you shortly. Additionally, please feel free to call us.';	
}else{
echo 'Your Rigs/Equipment was NOT sent successful. Please feel free to call us.';
}
?>