<?php session_start();

require_once "db.php";
    if(isset($_SESSION["username"])){
        $login = $_SESSION["username"];
        $kid = $_POST["kid"];
        $sql = "INSERT INTO kids (kid,login,idKid) VALUES ('$kid','$login','$kid.$login')";
        mysqli_query($conn,$sql);
        
        $sql = "SELECT * FROM kids where login = '$login'";
        $result = mysqli_query($conn,$sql);
        $kids = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($kids as $kid){
                $id = $kid["kid"];
                $uniqueId = $kid['idKid'];
                $sql = "SELECT * FROM products where kid = '$id'";
                $result = mysqli_query($conn,$sql);
                $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($products as $product){
                        $title = $product['title'];
                        $cost = $product['cost'];
                        $idBasket = $product['kid'];
                        $sql = "INSERT INTO basket(title,cost,login,idKid,kid) values('$title','$cost','$login','$uniqueId','$id')";
                        mysqli_query($conn,$sql);
                    }
            }
    }

?>