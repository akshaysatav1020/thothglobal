<?php
if($_POST!=null){
    if(isset($_POST["enquire"])){
        send_mail($_POST);
    }
}

function send_mail($params){
    // Multiple recipients
$to = 'info@thothglobalnetworksolutions.com, rakshanda.shah@thothglobalnetworksolutions.com'; // note the comma

// Subject
$subject = 'Enquiry from Website';

// Message
$message = '
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <p>Enquiry from Website </p>
  <p>Enquiry made by: Mr./Ms.: '.$params["fname"].' '.$params["lname"].'  </p>
  <p>Contact Details </p>
  <p>Email: '.$params["email"].' </p>
  <p>Contact No.: '.$params["phone"].'</p>
  <p>Regarding Service: '.$params["service"].'</p>
  <p>Message: '.$params["message"].'</p>
  
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Thoth GLobal Network Solutions<info@thothglobalnetworksolutions.com>';
$headers[] = 'From: '.$params["fname"].' '.$params["lname"].' <'.$params["email"].'>';
$headers[] = 'Cc: rakshanda.shah@thothglobalnetworksolutions.com';
// $headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers))){
  echo "<script>alert('Thank you! We will get back to you soon!');window.location.href='./contact.html';</script>";
}
}
?>
