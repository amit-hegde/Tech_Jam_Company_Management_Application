<?php

include("connection.php");
$title = $imgurl = $count= $price= $desc= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = test_input($_POST["title"]);
  $imgurl = test_input($_POST["imgurl"]);
    $count = test_input($_POST["count"]); 
    $price = test_input($_POST["price"]);
    $desc = test_input($_POST["content"]);
 $sql="INSERT INTO `product` (`pid`, `pname`, `price`, `pcount`, `imgurl`, `disc`) VALUES (NULL,'".$title."', '".$price."','".$count."', '".$imgurl."','".$desc."');";
 echo $sql;
//  $conn->query($sql);
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
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