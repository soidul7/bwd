<?php
include 'connection.php';

$getRequest		=	file_get_contents("php://input");
$getRequestArr	=	json_decode($getRequest,true);

//echo "Connected successfully";
$F_NAME = $getRequestArr['fname'];
$L_NAME = $getRequestArr['lname'];
$PHONE = $getRequestArr['phone'];
$SUBJECT = $getRequestArr['subject'];
$WEBSITE = $getRequestArr['website'];
$CONTENT = $getRequestArr['content'];
$TO_EMAIL = $getRequestArr['email'];

// $SUBJECT = 'SUBJECT HII';
// $CONTENT = 'CONTENT CONTENT';
// $TO_EMAIL = 'amiit.prasad82@gmail.com';



$sql = "INSERT INTO `contactus` (fname, lname, email, phone , subject, website, message, createdDate)
VALUES ('".$F_NAME."', '".$L_NAME."', '".$TO_EMAIL."','".$PHONE."', '".$SUBJECT."', '".$WEBSITE."','".$CONTENT."', '".date("Y-m-d H:i:s")."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

//$ADMIN_EMAIL = 'amiit.prasad82@gmail.com';
$ADMIN_EMAIL = 'david@bigwavedevelopment.com';
//$to = "amit.prasad@sohomwebmedia.com, david@bigwavedevelopment.com";
$to = $TO_EMAIL;

$MESSAGES_ADMIN = "
<html>
  <head>
    <title>".$SUBJECT."</title>
  </head>
  <body>
    <p><b>".$SUBJECT."</b></p>
    <br>
    <p>".$CONTENT."</p>
    
  </body>
</html>
";

$MESSAGES_USER = "
<html>
  <head>
    <title>".$SUBJECT."</title>
  </head>
  <body>
    
    <p>Your Email sent successfully.</p>
    <br>
    <p>Thanks & regards</p>
    <p>BWD</p>
  </body>
</html>
";

// Always set content-type when sending HTML email
$HEADERS_ADMIN = "MIME-Version: 1.0" . "\r\n";
$HEADERS_ADMIN .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$HEADERS_ADMIN .= 'From: <'.$TO_EMAIL.'>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

// Always set content-type when sending HTML email
$HEADERS_USER = "MIME-Version: 1.0" . "\r\n";
$HEADERS_USER .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$HEADERS_USER .= 'From: <'.$ADMIN_EMAIL.'>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";


if(mail($ADMIN_EMAIL,$SUBJECT,$MESSAGES_ADMIN,$HEADERS_ADMIN)){
    //echo 'success';
    $result= mail($TO_EMAIL,'Thankyou! Successfully Sent Email',$MESSAGES_USER,$HEADERS_USER);
    $res = json_encode(array(
      "result"=>'success',
      "message"=>'email sent successfully',
    ));
} else {
    $res =  json_encode(array(
      "result"=>'error',
      "message"=>'Somthing went wrong',
    ));
}
//echo "<pre>";
//print_r($res);
//print_r(json_encode($_REQUEST));
//echo '///////////////////////////////////////';
echo "##-##".$result;
return $res;


function sendElasticEmail($to, $subject, $body_text, $body_html, $from, $fromName)
{
  $res = "";

  $data = "username=".urlencode("david@bigwavedevelopment.com");
  $data .= "&api_key=".urlencode("FAF35804E35C311343512DBBD01499108F8B6320B3D5D399426A7BD49EBEA192380ACCFB03EFE66AB7A43860F098A343");
  $data .= "&from=".urlencode($from);
  $data .= "&from_name=".urlencode($fromName);
  $data .= "&to=".urlencode($to);
  $data .= "&subject=".urlencode($subject);
  if($body_html)
  $data .= "&body_html=".urlencode($body_html);
  if($body_text)
  $data .= "&body_text=".urlencode($body_text);

  $header = "POST /mailer/send HTTP/1.0\r\n";
  $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
  $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
  $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);
}
?>