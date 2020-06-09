<?php session_start();
      require_once "db.php";
    if(isset($_SESSION['username'])){
        $delId = $_POST['delId'];
        $sql = "DELETE FROM basket where idKid = '$delId'";
        mysqli_query($conn,$sql);
        $sql = "DELETE FROM kids where idKid = '$delId'";
        mysqli_query($conn,$sql);
    }
?>