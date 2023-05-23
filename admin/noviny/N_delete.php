<?php
    include "../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `noviny` where id=$id";
        $conn->query($sql);
    }
    header('location:../noviny.php');
    exit;
?>