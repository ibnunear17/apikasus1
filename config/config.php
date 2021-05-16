<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include_once "conn.php";
$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
function base_url($url = null)
{
    $base_url = "http://192.168.1.78/apikasus1";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}

function groupBy($array, $key, $secondKey = '')
{
    $group = [];
    if ($secondKey == '') {
        foreach ($array as $item) {
            $group[strval($item[$key])][] = $item;
        }
    } else {
        foreach ($array as $items) {
            $group[strval($items[$key])][strval($items[$secondKey])][] = $items;
        }
        $group = array_values($group);
        foreach ($group as $item){
            $group_baru[] = array_values($item);
        }
        $group = $group_baru;
    }
    return array_values($group);
}

?>