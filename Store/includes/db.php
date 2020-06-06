<?php
    $conn = mysqli_connect("localhost","mysql","mysql") or die ("Нет соединения: ".mysqli_error());
    mysqli_select_db($conn,"store");
?>