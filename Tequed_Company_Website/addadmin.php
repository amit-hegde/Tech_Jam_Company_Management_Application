<?php
session_start();
// define variables and set to empty values
include("connection.php");
// $r=$conn->query("select * from admin");
//    echo $r->num_rows;
$name = $pass = $uname =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = test_input($_POST["uname"]);
  $pass = test_input($_POST["pass"]);
  $name= test_input($_POST["name"]);
  $sql="select * from admin where uname='".$uname."'"; 
  $r=$conn->query($sql);
   echo $r->num_rows;
   if($r->num_rows==1){
    $_SESSION["iserr"]="Username taken!";
    header("location:createadmin");
        
   }
   else{
   
    $sql="INSERT INTO `admin` (`aid`, `uname`, `pass`, `name`) VALUES (NULL,'".$uname."', '".$pass."','".$name."');";
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

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$conn->close();
?>