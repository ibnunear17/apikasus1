<?php
header('Content-Type: application/json');
require_once "../../config/config.php";

if (empty($_POST['nama_manusia']) && empty($_POST['nik_manusia']) && empty($_POST['hp_manusia']) && empty($_POST['jkel_manusia'])){
    echo 'data kosong';
}

if (isset($_POST['nama_manusia'])) {
    if (isset($_POST['nik_manusia'])) {
        if (isset($_POST['hp_manusia'])){
            if (isset($_POST['jkel_manusia'])){
                $nama_manusia = trim(mysqli_real_escape_string($con, $_POST['nama_manusia']));
                $nik_manusia = trim(mysqli_real_escape_string($con, $_POST['nik_manusia']));
                $hp_manusia = trim(mysqli_real_escape_string($con, $_POST['hp_manusia']));
                $jkel_manusia = trim(mysqli_real_escape_string($con, $_POST['jkel_manusia']));

                $query = mysqli_query($con, "INSERT INTO manusia (nama_manusia, nik_manusia, hp_manusia, jkel_manusia) 
                VALUES ('$nama_manusia', '$nik_manusia', '$hp_manusia', '$jkel_manusia')");
                $data = mysqli_fetch_array($query);
                echo json_encode([
                    'data terisi' => $data
                ]);
            }
        }
    }
}



