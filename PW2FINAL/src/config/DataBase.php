<?php

    $host = "localhost";
     $db_name = "PW2";
     $username = "root";
     $password = "";

$conn = new mysqli($hostname = $host, $usuario = $username, $senha = $password, $bancodedados = $db_name);
if ($conn->connect_errno) {
echo "Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_error;
};
