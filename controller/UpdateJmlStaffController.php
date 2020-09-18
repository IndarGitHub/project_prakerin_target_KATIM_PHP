<?php

require_once("../config.php");

try {
    $sql = "UPDATE jml_staff SET tanggal=:tanggal, kw1=:kw1, kw2=:kw2, kw3=:kw3, kw4=:kw4 WHERE id_jml=:id_jml";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':tanggal', $_POST['tanggal']);
    $stmt->bindParam(':kw1', $_POST['kw1']);
    $stmt->bindParam(':kw2', $_POST['kw2']);
    $stmt->bindParam(':kw3', $_POST['kw3']);
    $stmt->bindParam(':kw4', $_POST['kw4']);
    $stmt->bindParam(':id_jml', $_POST['id_jml']);
    // $stmt->execute();

    if ($stmt->execute()) {
        // echo "Data Berhasil Diupdate";
        header("Location: ../jml_staff");
    }else{
        die('Data Gagal Diupdate');
    }
} catch (PDOException $exception) {
    echo "Error: ". $exception->getMessage();
}


?>