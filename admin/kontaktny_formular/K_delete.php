<?php
    include "../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `kontakt_formular` where id=$id";
        $conn->query($sql);
    }
    header('location:../kontaktny_formular.php');
    exit;
?>