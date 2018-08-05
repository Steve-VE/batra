<?php 
require_once 'vendor/autoload.php';
include_once 'defines.php';

session_start();
$db = connectToDB('bdd_local');

$pageRequired = "home";
$listOfPages = [
    "encoding",
    "logout",
    "file",
    "subscribe",
    "inventory",
    "product"
];
if(isset($_GET['page']) && in_array($_GET['page'], $listOfPages)){
    $pageRequired = $_GET['page'];
}

if(isset($_POST['signin_submit']) && isset($_POST['signin_email'])){ // Connexion
    $userEmail = $_POST['signin_email'];
    if( logUser($userEmail)){
        $pageRequired = "inventory";
    }
}
else if(isset($_POST['product_submit'])){ // Ajout d'un nouveau produit
    $success = saveNewProduct();
    // print_r($_FILES);
    if($success){
        $pageRequired = 'inventory';
    }
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
    else if($pageRequired == 'file'){
        include VIEWS.'/fileProduit.php';
    }
    else if($pageRequired == 'encoding'){
        include VIEWS.'/newProductForm.php';
    }
    else if($pageRequired == 'product'){
        include VIEWS.'/productSheet.php';
    }
    else if(isset($_SESSION['personal_barcode'])){
        include VIEWS.'/listOfProduct.php';
    }
    else{
        include VIEWS.'/home.php';
    }

    include VIEWS.'/footer.php'; ?>
</html>