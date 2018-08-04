<?php 

if(isset($_POST['envoie'])){
    // print_r($_FILES);
    include './assets/uploads/upload.php';
}
include_once 'defines.php';

<<<<<<< HEAD
//include_once 'config/bdd_local.php';
session_start();
if(isset($_SESSION['personnal_barcode'])){
    $personalCodebar = $_SESSION['personnal_barcode'];
=======
session_start();
if(isset($_SESSION['personal_barcode'])){
    $personalBarcode = $_SESSION['personal_barcode'];
>>>>>>> 6f36dd93b223fd0bdc9efc2b0889d80df1dfd503
}
$db = connectToDB('bdd_local');

$pageRequired = "home";
$listOfPages = [
    "encoding",
    "logout",
    "subscribe",
    "inventory",
    "product"
];

if(isset($_GET['page']) && in_array($_GET['page'], $listOfPages)){
    $pageRequired = $_GET['page'];

}
?>
<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BATRA</title>
        <?php include(VIEWS.'/link.php') ?>
    </head>
    <?php
        var_dump(isset($personalCodebar));
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

=======
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
    else if($pageRequired == 'encoding' && isset($personalBarcode)){
        include VIEWS.'/newProductForm.php';
    }
    else if($pageRequired == 'product'){
        include VIEWS.'/productSheet.php';
    }
    else if(isset($personalBarcode)){
        include VIEWS.'/listOfProduct.php';
    }
    else{
        include VIEWS.'/home.php';
    }

include VIEWS.'/footer.php'; ?>
>>>>>>> 6f36dd93b223fd0bdc9efc2b0889d80df1dfd503
</html>