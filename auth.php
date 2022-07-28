<?php
session_start();
// define variables and set to empty values
include("connection.php");
// $r=$conn->query("select * from admin");
//    echo $r->num_rows;
$pass = $uname =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = test_input($_POST["uname"]);
  $pass = test_input($_POST["pass"]);
  $sql="select * from admin where uname='".$uname."' AND pass='".$pass."'"; 
  $r=$conn->query($sql);
   echo $r->num_rows;
   if($r->num_rows==1){
       setcookie("isauth", True, time() + (86400 * 30), "/");
       setcookie("admin_name", $r->fetch_all()[0][3], time() + (86400 * 30), "/");
       header("location:admindashboard");
   }
   else{
     $_SESSION["iserr"]="Username and password are not matching!";
     header("location:logadmin");
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