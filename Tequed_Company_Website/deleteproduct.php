<?php
include("connection.php");
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $sql="DELETE FROM `product` WHERE pid='".$id."'";
 echo $sql;
//  $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
header("location:admindashboard");
   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>