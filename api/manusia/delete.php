<?php
header('Content-Type: application/json');
require_once "../../config/config.php";

$id_manusia = trim(mysqli_real_escape_string($con, $_POST['id_manusia']));

$stmt = $con->prepare("DELETE FROM manusia WHERE id_manusia = ?");
$result = $stmt->execute([$id_manusia]);

echo json_encode([
    'id_manusia' => $id_manusia,
    'success' => $result
]);