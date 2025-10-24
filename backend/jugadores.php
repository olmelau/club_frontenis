<?php

header('Content-Type: application/json');
include 'conexion.php';

$sql = "SELECT * FROM jugadores";
$result = $conn->query($sql);

$jugadores = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jugadores[] = $row;
    }
}

echo json_encode($jugadores);
$conn->close();
?>
