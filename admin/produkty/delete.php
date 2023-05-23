<?php
    include "../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `produkty` where id=$id";
        $conn->query($sql);
    }
    header('location:../produkty.php');
    exit;
?>