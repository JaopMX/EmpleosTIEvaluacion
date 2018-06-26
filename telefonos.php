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

$email=$_POST['emailTelefono'];
$telefono=$_POST['telefonoUsuario'];

echo $email;
echo $telefono;

$sql = "INSERT INTO telefonos (user_id, telefono)
SELECT id, $telefono
FROM usuarios
WHERE email = '$email';"

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 