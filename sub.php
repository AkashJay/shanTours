<?php




$field_email = $_POST['mail'];

$mail_to = 'akash.jayaweera@gmail.com';


$subject = 'Message from a site visitor(Shan Tours..) ';


$body_message = 'E-mail: '.$field_email."\n";

$body_message .= 'Message from the site visitor: ';

$headers = "From: $field_email\r\n";
$headers .= "Reply-To: $field_email\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        
        alert('Thank you for the message. We will contact you shortly.');
    
                      window.location='contact.html';

    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
    
        alert('Message failed. Please try again ');

         
 
    </script>
<?php
}


?>
