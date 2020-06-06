<?php session_start();
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require_once 'db.php';

//if(isset($_SESSION['username'])){
//    $login = $_SESSION['username'];
//     $sql = "SELECT * FROM lids where login = '$login'";
//    $res = mysqli_query($conn,$sql);
//    $lids = mysqli_fetch_all($res, MYSQLI_ASSOC);
//        foreach($lids as $lid){
//            $id = $lid["lid"];
//            $uniqueId = $lid['idLid'];
//            $sql = "SELECT * FROM products where lid = '$id'";
//            $result = mysqli_query($conn,$sql);
//            $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
//            foreach($products as $product){
//                 $title = $product['title'];
//                $image = $product['img'];
//                $cost = $product['cost'];
//                $category = $product['category'];
//                $idWish = $product['lid'];
//                $sql = "INSERT INTO wishes (title,image,cost,category,lid,login,) VALUES ('$title','$image','$cost','$category','$idWish','$login','$uniqueId')";
//                mysqli_query($conn,$sql);
//            }
//        }
//}
   

    
?>