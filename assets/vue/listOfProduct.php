<?php
    if(!isset($_SESSION['personal_barcode'])){
        // header('Location: '.URL);
    }
    $productorId = $_SESSION['personal_barcode'];

    $sql = '
    SELECT * FROM products
    WHERE id_producer = :id_producer';
    $statement = $db->prepare($sql);
    $statement->execute(array(':id_producer' => $_SESSION['id']));
    $productsRawData = $statement->fetchAll();

    $listOfBarCodes = [];
    for($i = 0; $i < 5; $i++){
        $barcode = "254". $productorId;

        for($num = 0; $num < 3; $num++){
            $barcode .= round(rand(0, 9));
        }

        array_push($listOfBarCodes, $barcode);
    }
?>
<div class="container">
    <ul>
    <?php 
        $i = 0;
        foreach($listOfBarCodes as $barcode):
       
        ?>
        <li class="row">
            <div class="product_info eight columns">
                <p>
                <?php if(isset($productsRawData[$i])){?>
                    <a href="/?page=file"><?php echo $productsRawData[$i]['name'];?></a>
                    <?php }
                else { ?>
                    <a href="/?page=encoding">Ajouter un nouveau produit</a>
                <?php } ?>
                </p>
            </div>
            <div class="barcode four columns">
            <?php
                if(isset($productsRawData[$i])){
                    echo '<a href="?page=product&id='. $productsRawData[$i]['id'] .'">';
                    echo '253'. $_SESSION['personal_barcode'] . $productsRawData[$i]['barcode_tail'];
                    echo '</a>';
                } ?>
            </div>
        </li>
    <?php 
        $i++;
    endforeach; ?>
    </ul>
</div>