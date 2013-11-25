<?php
 //sending mail
 if(isset($_POST['action']))
 {
 	switch ($_POST['action'] ) {
 		case 'contactpage':
				$sendto = 'email';
				$uname=$_POST['name']; 
				$mailid=$_POST['email'];
				$phone=$_POST['phone'];
				$message = $name ."\n";
				$message .= $mailid . "\n";
				$message .= $phone . "\n\n";
				$message .= "Name: " . $_POST['name'] . "\n";
				$message .= "Phone: " . $_POST['phone'] . "\n";
				$message .= "Email Address: " . $_POST['email'] . "\n\n";
				$message .= "Address: " . $_POST['address'] . "\n";
				$message .= "City: " . $_POST['city'] . "\n";
				$message .= "State: " . $_POST['state'] . "\n";
				$message .= "Zip: " . $_POST['state'] . "\n\n";
				$message .= "Description: " . $_POST['desc'] . "\n";
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				// Additional headers
				$headers .= 'To: info <email>' . "\r\n";
				$headers .= 'From: '.$uname.' <'.$mailid.'>' . "\r\n";
				if(mail($sendto,$uname,$message, $headers))
				{ 
					header("Location: url");
					die();
				} else { 
					header("Location: url");
					die();
				}	
 		break;
 		case 'quickcontact':	
				$sendto = 'email';
				$uname=$_POST['name']; 
				$mailid=$_POST['email'];
				$phone=$_POST['phone'];
				$message = $name ."\n";
				$message .= $mailid . "\n";
				$message .= $phone . "\n\n";
				$message .= "Name: " . $_POST['name'] . "\n";
				$message .= "Phone: " . $_POST['phone'] . "\n";
				$message .= "Email Address: " . $_POST['email'] . "\n";
				$message .= "Description: " . $_POST['desc'] . "\n\n";
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				// Additional headers
				$headers .= 'To: info <email>' . "\r\n";
				$headers .= 'From: '.$uname.' <'.$mailid.'>' . "\r\n";
				if(mail($sendto,$uname,$message, $headers))
				{ 
					header("Location: url");
					die();
				} else { 
					header("Location: url");
					die();
				}
 		break;
 		default:
 			echo 'ERROR: Sending form action not correct';
  		break;
 	}
 }
 ?>
