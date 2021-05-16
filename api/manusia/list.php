<?php
header('Content-Type: application/json');
require_once "../../config/config.php";

$query = mysqli_query($con, "SELECT * FROM manusia");
while ($data = mysqli_fetch_assoc($query)){
    echo json_encode($data);
}

