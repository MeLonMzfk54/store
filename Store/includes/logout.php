<?php
    session_start();
    session_destroy();
    header("Location: ../choose.php");
    exit();
?>

