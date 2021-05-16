<?php
header('Content-Type: application/json');
require_once "../../config/config.php";


if (empty($_POST['id_manusia'])){
    echo 'data kosong';
}
if (isset($_POST['id_manusia'])){
    $id_manusia = trim(mysqli_real_escape_string($con, $_POST['id_manusia']));
    $query = mysqli_query($con, "SELECT * FROM manusia WHERE id_manusia = '$id_manusia'");
    while ($data = mysqli_fetch_assoc($query)){
        echo json_encode($data);
    }
}