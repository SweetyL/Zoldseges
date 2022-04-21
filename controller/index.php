<?php
    include 'model/Termek.php';
    $termek = new Termek();
    $termekLista = $termek->termekList($conn);
    include 'view/index.php';
?>