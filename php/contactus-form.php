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
  //echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

//$ADMIN_EMAIL = 'amiit.prasad82@gmail.com';
//$ADMIN_EMAIL = 'david@bigwavedevelopment.com';
$ADMIN_EMAIL_ARRAY = array("info@reddensoft.com","info@bigwavedevelopment.com","dipankar@sohomwebmedia.com");
$ADMIN_EMAIL = 'info@bigwavedevelopment.com';
$ADMIN_NAME = 'Big Wave Development';
$TO_NAME = $NAME;
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
    <p><b>Name: </b>".$F_NAME." ".$L_NAME."</p>
    <p><b>Email: </b>".$TO_EMAIL."</p>
    <p><b>Number: </b>".$PHONE."</p>
    <p><b>Subject: </b>".$SUBJECT."</p>
    <p><b>Message: </b>".$CONTENT."</p>
    <p><b>Website: </b>".$WEBSITE."</p>
    
  </body>
</html>
";

$MESSAGES_USER = "
<html>
  <head>
    <title>".$SUBJECT."</title>
  </head>
  <body>
    <p>For getting connected. Please cooperate till we respond to you !</p>
    <br>
    <p>Dear ".$F_NAME.",<br>
      Thank <b>You</b>, We have received your query and expedite it as early as possible. One of our representatives will get in touch with you to meet your business needs and solicit it to serve you better.</p>
    <br>
    <p>Thanks you</p>
    <p>Big Wave Developement</p>
  </body>
</html>
";
foreach($ADMIN_EMAIL_ARRAY as $key => $ADMIN_TO_EMAIL ){
  $resultAdminEmail = send_email($ADMIN_EMAIL,$ADMIN_NAME,$ADMIN_TO_EMAIL,$ADMIN_NAME,'Contact Us',$MESSAGES_ADMIN);
} 
if($resultAdminEmail){
// if(send_email($ADMIN_EMAIL,$ADMIN_NAME,$ADMIN_EMAIL,$ADMIN_NAME,'Contact Us',$MESSAGES_ADMIN)){
  //if(mail($ADMIN_EMAIL,'Stay Connected With Us',$MESSAGES_ADMIN,$HEADERS_ADMIN)){
      //echo 'success';
      //$result= mail($TO_EMAIL,'Thankyou! Successfully Sent Email',$MESSAGES_USER,$HEADERS_USER);
      $result= send_email($ADMIN_EMAIL,$ADMIN_NAME,$TO_EMAIL,$TO_NAME,'Thankyou! Successfully Sent Email',$MESSAGES_USER);
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
  echo $res;

?>