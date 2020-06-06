<?php require_once "db.php";

function getProducts(){
    global $conn;
       $sql = "SELECT * FROM products";
    
    $result = mysqli_query($conn,$sql);

    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $products;
}


?>