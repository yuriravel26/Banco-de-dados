<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdweb";


$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  echo "Erro";
}
else{
  echo "Conexão efetuada com sucesso";
}