<?php
include 'connection.php';

$sqlList = "SELECT * FROM `blog` ORDER BY `title` ASC";
$result = $conn->query($sqlList);

if (mysqli_query($conn, $sqlList)) {
  //echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$data = array();

if($result->num_rows > 0){
    //$row = $result->fetch_assoc();
    while($row = $result->fetch_assoc()) {
    //foreach($row as $key => $value){

        $data[] = $row;
    }
      $res = json_encode(array(
        "result"=>'success',
        "message"=>'blog Listing',
        "blogList"=>$data,
      ));
  } else {
      $res =  json_encode(array(
        "result"=>'error',
        "message"=>'Somthing went wrong',
        "blogList"=>$data,
      ));
  }

  echo json_encode(print_r($data));
  //mysqli_close($conn);



?>