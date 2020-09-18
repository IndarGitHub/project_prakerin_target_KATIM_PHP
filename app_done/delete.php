<?php

require_once("../config.php");
    $sql =$db->prepare("DELETE from app_done WHERE id_app=". $_GET['id']) ;
    $sql->execute();
    header("Location: ../app_done");
    
?>