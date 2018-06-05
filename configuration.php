
<?php
$servername = "apptest";
$username = "root";
$password = "amveryhappy";
$db_name = "dk_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

// links

$home_url = "index.php";
$insert_url = "insert.php";



?>
