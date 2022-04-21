<?php
if(empty($_REQUEST['action'])){
    header('Location: index.php?page=index');
    exit();
}
if($_REQUEST['action'] == 'logout'){
    session_unset();
    header('Location: index.php?page=index');
    exit();
}
if(!empty($_POST['user']) and !empty($_POST['pass']) and $_REQUEST['action']=="login"){
    if($_POST['user']=="admin" and $_POST['pass']=="admin"){
        $_SESSION["id"] = 1;
        header('Location: index.php?page=index');
        exit();
    }else{
        echo "Hibás adatok!";
    }
}
include 'view/belep.php';
?>