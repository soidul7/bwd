<?php

/**
* This example shows making an SMTP connection with authentication.
*/

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'vendor/autoload.php';

//echo "RESULT - ".send_email();

function send_email($from,$fromName,$toEmail='',$toName,$subject,$body){
    //$to = array();
    //$toEmail = array("david@bigwavedevelopment.com","info@bigwavedevelopment.com","dipankar@sohomwebmedia.com");
    //foreach($toEmail as $key=>$value){

        $mail = new PHPMailer();
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        //Set the hostname of the mail server
        //$mail->Host = 'smtp.elasticemail.com';
        $mail->Host = 'smtp.elasticemail.com';
        
        //Set the SMTP port number - likely to be 25, 465 or 587
        $mail->Port = 587;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication
        $mail->Username = 'FAF35804E35C311343512DBBD01499108F8B6320B3D5D399426A7BD49EBEA192380ACCFB03EFE66AB7A43860F098A343';
        //Password to use for SMTP authentication
        $mail->Password = 'FAF35804E35C311343512DBBD01499108F8B6320B3D5D399426A7BD49EBEA192380ACCFB03EFE66AB7A43860F098A343';

        //$mail->setFrom('admin@reddensoft.com', 'Big Wave Development');
        $mail->setFrom($from, $fromName);
        //Set an alternative reply-to address
        //info@reddensoft.com","info@bigwavedevelopment.com","dipankar@sohomwebmedia.com
        $mail->addReplyTo('info@reddensoft.com', 'Big Wave Development');
        $mail->addReplyTo('info@bigwavedevelopment.com', 'Big Wave Development');
        $mail->addReplyTo('dipankar@sohomwebmedia.com', 'Big Wave Development');
        //$mail->addReplyTo('info@reddensoft.com', 'Big Wave Development');
        //$mail->addReplyTo($from, $fromName);
        //Set who the message is to be sent to
        $mail->addAddress($toEmail, $toName);
        //$mail->AddCC('person1@domain.com', 'Person One');
        //Set the subject line
        $mail->Subject = $subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($body);
        //Replace the plain text body with one created manually
        //$mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //$mail->send();
        
    //}

    //send the message, check for errors
    if (!$mail->send()) {
        //return 'Mailer Error: ' . $mail->ErrorInfo;
        return 'failed';
    } else {
        return 'success';
        //return 'Message sent!';
    }
}