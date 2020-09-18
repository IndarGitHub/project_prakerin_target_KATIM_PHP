<?php

require_once("../config.php");
    $sql =$db->prepare("DELETE from jml_staff WHERE id_jml=". $_GET['id']) ;
    $sql->execute();
    header("Location: ../jml_staff");
    
?>