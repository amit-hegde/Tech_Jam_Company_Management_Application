    <?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"id17767514_company");

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
?>
