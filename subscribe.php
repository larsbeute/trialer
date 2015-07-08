<?php 
  
	if($_POST) {
  
	    // Enter the email where you want to receive notification
		
		$emailTo = 'larsbeute@hotmail.com';
    
          // DON'T EDIT BELOW CODE

    	$subscriber_email = ($_POST['email']);
      
		    // Send email code
			$subject = 'New Subscriber to Trialer.co.uk';
			$message = "New Subscriber to trialer.co.uk: \n\nEmail: " . $subscriber_email;
			$headers = "From: ".$subscriber_email." <" . $subscriber_email . ">" . "\r\n" . "Reply E-mail: " . $subscriber_email;
			
			mail($emailTo, $subject, $message, $headers);
			echo "Thanks for subscribing!";
     
		}
?>