<?php session_start();
    require_once "db.php";
if(isset($_SESSION["username"])){
      $delId = $_POST["delId"];
    $sql = "DELETE FROM wishes where idLid = '$delId'";
    mysqli_query($conn,$sql);
    $sql = "DELETE FROM lids where idLid = '$delId'";
    mysqli_query($conn,$sql);
}
?>