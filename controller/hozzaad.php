<?php
if(!empty($_POST['name'])){
    $sql = "INSERT INTO `termekek`(`nev`) VALUES ('".$_POST['name']."')";
    $conn->query($sql);
    header('Location: index.php?page=index');
    exit();
}
include 'view/hozzaad.php';
?>