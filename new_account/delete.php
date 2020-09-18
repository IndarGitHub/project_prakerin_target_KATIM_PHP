<?php

require_once("../config.php");
    $sql =$db->prepare("DELETE from new_account WHERE id_new=". $_GET['id']) ;
    $sql->execute();
    header("Location: ../new_account");
    
?>