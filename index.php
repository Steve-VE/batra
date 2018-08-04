<?php 
if(isset($_POST['envoie'])){
    // print_r($_FILES);
    include './assets/uploads/upload.php';
}


include_once 'defines.php';

include_once 'config/bdd.php';
session_start();
if(isset($_SESSION['personnal_codebar'])){
    $personalCodebar = $_SESSION['personnal_codebar'];
}
$db = connectToDB('bdd');

$pageRequired = "home";
$listOfPages = [
    "encoding",
    "logout",
    "subscribe",
    "inventory"
];

if(isset($_GET['page']) && in_array($_GET['page'], $listOfPages)){
    $pageRequired = $_GET['page'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BATRA</title>
    <?php include(VIEWS.'/link.php') ?>
</head>
<?php
    include VIEWS.'/header.php';
    if($pageRequired == 'subscribe'){
        include VIEWS.'/newUserForm.php';
    }
    else if($pageRequired == 'logout'){
        session_destroy();
        include VIEWS.'/home.php';
    }
    else if($pageRequired == 'encoding' && isset($personalCodebar)){
        include VIEWS.'/newProductForm.php';
    }
    else if(isset($personalCodebar)){
        include VIEWS.'/listOfProduct.php';
    }
    else{
        include VIEWS.'/home.php';
    }
?>
     
<?php include VIEWS.'/footer.php';?>
</html>