 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "empleosti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre=$_POST['nombre'];
$email=$_POST['email'];

$sql = "INSERT INTO usuarios (email, nombre)
VALUES ('$email', '$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 