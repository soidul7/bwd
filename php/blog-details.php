<?php
include 'connection.php';
$getRequest		=	file_get_contents("php://input");
$getRequestArr	=	json_decode($getRequest,true);

//$slug = $getRequestArr['slug'];
$slug = $_GET['slug'];

// $sqlList = "SELECT * FROM `blog` WHERE `slug` = ".$slug." AND `status` = 1";
$sqlList = "SELECT * FROM `blog` WHERE `slug` = '".$slug."' AND `status` = 1";

$result = $conn->query($sqlList);


if (mysqli_query($conn, $sqlList)) {
  //echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$data = '';

if($result) {
    //$row = $result->fetch_assoc();mysqli_fetch_assoc
    $data = mysqli_fetch_assoc($result);

    $res = json_encode(array(
        "result"=>'success',
        "message"=>'blog Details',
        "blogDetails"=>$data,
    ));
  } else {
      $res =  json_encode(array(
        "result"=>'error',
        "message"=>'Somthing went wrong',
        "blogDetails"=>$data,
        "blogDetailsasas"=>$sqlList,
        "blogDetailsasasasas"=>$result,
      ));
  }

  echo json_encode($res);
  //mysqli_close($conn);

?>