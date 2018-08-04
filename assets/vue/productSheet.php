<?php
if(isset($_GET['id'])){
    $productId = $_GET['id'];
    $sql = '
    SELECT * FROM products
    LEFT JOIN producers ON producers.id = id_producer
    WHERE products.id = :id';
    $statement = $db->prepare($sql);
    $statement->execute(array(':id' => $productId));
    $productRawData = $statement->fetch();

    // var_dump($productRawData);
}

if(!isset($productRawData) || !$productRawData){ ?>
    <p>Désolé, le produit spécifié n'existe pas :(</p>
<?php }
else{
    // var_dump($productRawData);
    $barcode = '254'. $productRawData['barcode'] . $productRawData['id'];
    echo $barcode;
}
?>