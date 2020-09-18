<?php

require_once("../config.php");

// $kw1 = filter_input(INPUT_POST, 'kw1', FILTER_SANITIZE_FLOAT);
// $kw2 = filter_input(INPUT_POST, 'kw2', FILTER_SANITIZE_FLOAT);
// $kw3 = filter_input(INPUT_POST, 'kw3', FILTER_SANITIZE_FLOAT);

$tanggal = $_POST['tanggal'];
$kw1 = $_POST['kw1'];
$kw2 = $_POST['kw2'];
$kw3 = $_POST['kw3'];
$kw4 = $_POST['kw4'];

$sql = "INSERT INTO jml_staff (tanggal, kw1, kw2, kw3, kw4) 
        VALUES (:tanggal, :kw1, :kw2, :kw3, :kw4)";
$stmt = $db->prepare($sql);

$params = array(
    ":tanggal" => $tanggal,
    ":kw1" => $kw1,
    ":kw2" => $kw2,
    ":kw3" => $kw3,
    ":kw4" => $kw4
);

$saved = $stmt->execute($params);
if($saved) header("Location: ../jml_staff");

?>