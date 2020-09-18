<?php

require_once("../config.php");

try {
    $sql = "UPDATE app_done SET tanggal=:tanggal, kw1=:kw1, kw2=:kw2, kw3=:kw3, kw4=:kw4 WHERE id_app=:id_app";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':tanggal', $_POST['tanggal']);
    $stmt->bindParam(':kw1', $_POST['kw1']);
    $stmt->bindParam(':kw2', $_POST['kw2']);
    $stmt->bindParam(':kw3', $_POST['kw3']);
    $stmt->bindParam(':kw4', $_POST['kw4']);
    $stmt->bindParam(':id_app', $_POST['id_app']);
    // $stmt->execute();

    if ($stmt->execute()) {
        // echo "Data Berhasil Diupdate";
        header("Location: ../app_done");
    }else{
        die('Data Gagal Diupdate');
    }
} catch (PDOException $exception) {
    echo "Error: ". $exception->getMessage();
}


?>