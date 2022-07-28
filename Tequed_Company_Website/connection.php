    <?php
$servername = "localhost";
$username = "amit";
$password = "amitac2200";

// Create connection
$conn = new mysqli($servername, $username, $password,"id17767514_company");

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
?>
    <?php
// $servername = "localhost";
// $username = "";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password, "id17767514_company");

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . $conn->connect_error);
// }
?>