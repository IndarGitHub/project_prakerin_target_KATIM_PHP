<?php

require_once("../config.php");
    $sql =$db->prepare("DELETE from top_up WHERE id_top=". $_GET['id']) ;
    $sql->execute();
    header("Location: ../top_up");
    
?>