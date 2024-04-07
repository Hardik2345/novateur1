<?php



$action = $_POST['action'];

if ($action == 'contactUs') {



    $name = trim($_POST['txtName']);

     $from = trim($_POST['txtEmail']);

    $text_subject = trim($_POST['txtSubject']);

    $text_message = trim($_POST['txtMessage']);



    $subject = 'Contact us';

    $to = 'info@novateur.com';

    $message = "";

    $message .= "Hello Admin, You Have New Message From www.novateur.co.in<br/><br/>";

    $message .= "<b>Name</b> : " . $name;

	$message .= "<b><br/>Email</b> : " . $from;

    $message .= "<b><br/>Subject</b> : " . $text_subject;

    $message .= "<b><br/>Message</b> : " . $text_message;



    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

   $headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";

    //$headers .= 'From:  <vivekkumar@globedetective.com>' . "\r\n";

    //$headers .= 'Reply-To: vivekkumar@globedetective.com' . "\r\n";

	

	/*$headers = 'From: sarvesh9766@gmail.com' . "\r\n" .

    'Reply-To: sarvesh9766@gmail.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();*/



    if (mail($to, $subject, $message, $headers)) {

        echo "send";

    } else {

        echo "error";

    }

}



if ($action == 'contactPostionEmail') {



    $position = trim($_POST['position']);

	$phoneNo = trim($_POST['phoneNo']);

	$educational = trim($_POST['txtEducational']);

	$name = trim($_POST['txtName']);

     $from = trim($_POST['txtEmail']);

    $text_message = trim($_POST['txtMessage']);
    
    $text_location = trim($_POST['txtLocation']);
    
    $text_opening = trim($_POST['txtOpening']);



    $subject = 'Contact us';

    $to = 'info@novateur.com';

    $message = "";

    $message .= "Hello Admin, You Have New Message From www.novateur.co.in<br/><br/>";

    $message .= "<b>Name</b> : " . $name;

	$message .= "<b><br/>Email</b> : " . $from;

	$message .= "<b><br/>position</b> : " . $position;

	$message .= "<b><br/>phoneNo</b> : " . $phoneNo;

	$message .= "<b><br/>Educational</b> : " . $educational;

    $message .= "<b><br/>Message</b> : " . $text_message;
    
    $message .= "<b><br/>Location</b> : " . $text_location;
    $message .= "<b><br/>Applied For</b> : " . $text_opening;



    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

    $headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";

    //$headers .= 'From:  <vivekkumar@globedetective.com>' . "\r\n";

    //$headers .= 'Reply-To: vivekkumar@globedetective.com' . "\r\n";

	

	/*$headers = 'From: sarvesh9766@gmail.com' . "\r\n" .

    'Reply-To: sarvesh9766@gmail.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();*/



    if (mail($to, $subject, $message, $headers)) {

        echo "send";

    } else {

        echo "error";

    }

}





?>







