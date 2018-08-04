<?php
if(isset($_GET['id'])){
    $productId = $_GET['id'];
}

if(!isset($productId)){ ?>
    <p>Désolé, le produit spécifié n'existe pas :(</p>
<?php
}
?>