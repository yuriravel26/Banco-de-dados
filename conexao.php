<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdweb";

// Create connection
$conexao = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

$sql = "SELECT id, email FROM usuario";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Email: " . $row["email"]."<br>";
  }
} else {
  echo "0 results";
}
$conexao->close();
?>