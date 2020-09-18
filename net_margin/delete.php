<?php

require_once("../config.php");
    $sql =$db->prepare("DELETE from net_margin WHERE id_net=". $_GET['id']) ;
    $sql->execute();
    header("Location: ../net_margin");
    
?>