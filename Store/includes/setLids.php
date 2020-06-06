<?php session_start();

require_once "db.php";
    if(isset($_SESSION['username'])){
         $login = $_SESSION["username"];
        $lid = $_POST["Pid"];
        $id = $_POST["id"];
             $sql = "INSERT INTO lids (lid,login,idLid) VALUES ('$lid','$login','$id.$login')";
            mysqli_query($conn,$sql);  
        
             $sql = "SELECT * FROM lids where login = '$login'";
    $res = mysqli_query($conn,$sql);
    $lids = mysqli_fetch_all($res, MYSQLI_ASSOC);
        foreach($lids as $lid){
            $id = $lid["lid"];
            $uniqueId = $lid['idLid'];
            $sql = "SELECT * FROM products where lid = '$id'";
            $result = mysqli_query($conn,$sql);
            $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($products as $product){
                 $title = $product['title'];
                $image = $product['img'];
                $cost = $product['cost'];
                $category = $product['category'];
                $idWish = $product['lid'];
                $sql = "INSERT INTO wishes (title,image,cost,category,lid,login,idLid) VALUES ('$title','$image','$cost','$category','$idWish','$login','$uniqueId')";
                mysqli_query($conn,$sql);
            }
        }
    }

?>