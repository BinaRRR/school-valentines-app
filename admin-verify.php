<?php
    session_start();
    if ($_SESSION['admin'] == false) {
        header("Location: index.php");
        return;
    }
    $vID = $_GET['vID'];
    include_once('connection.php');
    $db->query("UPDATE walentynki SET verified=1 WHERE ID=".$vID.";");
    $db->close();
    header("Location: admin-panel.php");
?>