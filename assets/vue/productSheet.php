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
    $barcode = '254'. $productRawData['barcode'] . $productRawData['barcode_tail'];
}
?>
<!-- <div id="input"><?= $barcode; ?></div> -->
<section id='cible' data-barcode="<?= $barcode;?>">
    <div class="box" id="capture">
        <div class="fd inp0">
            <div class="bar"></div>
            <div id="fd" class="digit">2</div>
        </div>
        <div class="space sp1">
            <div class="bar w"></div>
            <div class="bar w"></div>
            <div class="bar b"></div>
            <div class="bar w"></div>
            <div class="bar b"></div>
        </div>
        <div class="f6">
            <div id="fc1" class="f6c inp1">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">7</div>
            </div>
            <div id="fc2" class="f6c inp2">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">1</div>
            </div>
            <div id="fc3" class="f6c inp3">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">1</div>
            </div>
            <div id="fc4" class="f6c inp4">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">2</div>
            </div>
            <div id="fc5" class="f6c inp5">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">5</div>
            </div>
            <div id="fc6" class="f6c inp6">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">3</div>
            </div>
        </div>
        <div class="space sp2">
            <div class="bar w"></div>
            <div class="bar b"></div>
            <div class="bar w"></div>
            <div class="bar b"></div>
            <div class="bar w"></div>
        </div>
        <div class="l6">
            <div id="lc1" class="l6c inp7">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">0</div>
            </div>
            <div id="lc2" class="l6c inp8">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">0</div>
            </div>
            <div id="lc3" class="l6c inp9">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">1</div>
            </div>
            <div id="lc4" class="l6c inp10">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">2</div>
            </div>
            <div id="lc5" class="l6c inp11">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">0</div>
            </div>
            <div id="lc6" class="l6c inp12">
                <div class="bar">
                    <div class="d1"></div>
                    <div class="d2"></div>
                    <div class="d3"></div>
                    <div class="d4"></div>
                    <div class="d5"></div>
                    <div class="d6"></div>
                    <div class="d7"></div>
                </div>
                <div class="digit">2</div>
            </div>
        </div>
        <div class="space sp3">
            <div class="bar b"></div>
            <div class="bar w"></div>
            <div class="bar b"></div>
            <div class="bar w"></div>
            <div class="bar w"></div>
        </div>
    </div>
</section>
<script src="/assets/js/html2canvas.min.js"></script>
<script src="/assets/js/app.js"></script>