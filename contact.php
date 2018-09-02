<?php



$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phn'];
$field_country = $_POST['country'];
$field_arrive = $_POST['arrive'];
$field_depature = $_POST['depature'];
$field_msg = $_POST['msg'];
echo $field_country;
$mail_to = 'akash.jayaweera@gmail.com';


$subject = 'Message from a site visitor(Shan Tours..) ' . $field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Tell: '.$field_phone."\n";
$body_message .= 'Country of the Visitor: '.$field_country."\n";
$body_message .= 'Arrive Date: '.$field_arrive."\n";
$body_message .= 'Depature Date: '.$field_depature."\n";
$body_message .= 'Message from the site visitor: '.$field_msg;

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
