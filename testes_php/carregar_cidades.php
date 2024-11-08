<?php
header("Content-Type: application/json");

$mysqli = new mysqli("localhost", "root", "", "estados_e_cidades");

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

$estado_id = $_GET['estado_id'];
$query = "SELECT id, nome FROM cidades WHERE estado_id = ? ORDER BY nome";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $estado_id);
$stmt->execute();
$result = $stmt->get_result();

$cidades = [];
while ($row = $result->fetch_assoc()) {
    $cidades[] = $row;
}

echo json_encode($cidades);

$stmt->close();
$mysqli->close();
?>
