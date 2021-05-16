<?php
header('Content-Type: application/json');
require_once "../../config/config.php";

$id_manusia = trim(mysqli_real_escape_string($con, $_POST['id_manusia']));
$nama_manusia = trim(mysqli_real_escape_string($con, $_POST['nama_manusia']));
$nik_manusia = trim(mysqli_real_escape_string($con, $_POST['nik_manusia']));
$hp_manusia = trim(mysqli_real_escape_string($con, $_POST['hp_manusia']));
$jkel_manusia = trim(mysqli_real_escape_string($con, $_POST['jkel_manusia']));

$stmt = $con->prepare("UPDATE manusia SET nama_manusia = ?, nik_manusia = ?, hp_manusia = ?, jkel_manusia = ? WHERE id_manusia = ?");
$result =  $stmt->execute([$nama_manusia, $nik_manusia, $hp_manusia, $jkel_manusia, $id_manusia]);

echo json_encode([
    'success' => $result
]);