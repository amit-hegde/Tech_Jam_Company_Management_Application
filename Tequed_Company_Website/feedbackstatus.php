<?php

include("connection.php");
$name= $sub= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $sub = test_input($_POST["email"]);
 $sql="UPDATE `feedback` SET `status`=1 WHERE `name`='".$name."' and email='".$sub."' AND status=0 LIMIT 1";
 echo $sql;
//  $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
header("location:feedback");
   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
