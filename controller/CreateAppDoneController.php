<?php

require_once("../config.php");

$tanggal = $_POST['tanggal'];
$kw1 = $_POST['kw1'];
$kw2 = $_POST['kw2'];
$kw3 = $_POST['kw3'];
$kw4 = $_POST['kw4'];

$sql = "INSERT INTO app_done (tanggal, kw1, kw2, kw3, kw4) 
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
if($saved) header("Location: ../app_done");

?>