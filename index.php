<?php
session_name("zoldsegesFeladat");
session_start();
include "includes/db.inc.php";
if(!isset($_REQUEST['page'])){
        header('Location: index.php?page=index');
        exit();
}
// default oldal
$page = 'index';

// router
if(isset($_REQUEST['page'])) {
        if(file_exists('controller/'.$_REQUEST['page'].'.php')) {
                $page = $_REQUEST['page']; 
        }
}

$menupontok = array(    'index' => "Főoldal"
                );

include 'includes/htmlheader.inc.php';
?>
<body>
<?php
if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        include 'controller/'.$page.'.php';
}
?>
</body>
</html>