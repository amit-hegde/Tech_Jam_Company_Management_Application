<?php

include("connection.php");
$id= $phno= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = test_input($_POST["id"]);
    $phno = test_input($_POST["phno"]);
 $sql="UPDATE `order` SET `status`=1 WHERE `pid`=".$id." and phno=".$phno." AND status=0 LIMIT 1";
 echo $sql;
//  $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
header("location:orders");
   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>