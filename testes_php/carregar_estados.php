<?php
header("Content-Type: application/json");

// Configurações de conexão com o banco de dados
$mysqli = new mysqli("localhost", "root", "", "estados_e_cidades");

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

$query = "SELECT id, nome, sigla FROM estados ORDER BY nome";
$result = $mysqli->query($query);

$estados = [];
while ($row = $result->fetch_assoc()) {
    $estados[] = $row;
}

echo json_encode($estados);

$mysqli->close();
?>
