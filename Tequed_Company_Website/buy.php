<?php

include("connection.php");
$title = $name = $pid= $price= $email= $phno="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $price = test_input($_POST["price"]);
    $id = test_input($_POST["id"]); 
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phno = test_input($_POST["phno"]);
 $sql="INSERT INTO `order` (`pid`, `pname`, `price`, `cname`, `email`, `phno`) VALUES ('".$id."','".$title."', '".$price."','".$name."', '".$email."','".$phno."');";
 echo $sql;
//  $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  setcookie("pid",$id, time() + (86400 * 2), "/");
  setcookie($id, "Sent order request for this product", time() + (86400 * 50), "/");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
header("location:buyproduct");
   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>