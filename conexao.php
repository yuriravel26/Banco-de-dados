<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "listas_cet";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " -Nome: " . $row["nome"]. " " . "- email: " . $row["email"]."<br>";
  }
} else {
  echo "0 results";
}
$mysqli->close();


?>
