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
    $barcode = '254'. $productRawData['barcode'] . $productRawData['barcode_tail']; ?>
    <!-- <div id="input"><?= $barcode; ?></div> -->
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <img src="/assets/img/uploads/<?=$productRawData['image']?>" alt="" style="width: 50vw;">
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <div class="col-12">
                    <b><?=$productRawData['name']?></b>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <i><?=$productRawData['denomination']?></i>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    De <b><?=$_SESSION['corp_name']?></b>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12">
                    Adresse de l'entreprise
                </div>
            </div> -->
        </div>
        <div class="col-12">
            <p><?=$productRawData['description']?></p>
        </div>
        <div class="col-12">
            <?=$productRawData['name']?>
        </div>
        <div class="col-12">
            <p><?=$productRawData['ingredients']?></p>
        </div>

        <!-- <div class="col-12">
            <b>liste des allergènes</b>
                <br>
                <ol class="row">
                    <?php foreach($allergens_list as $allergen){?>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    nom allergènes
                                </div>
                                <div class="col-6">
                                    valeur allergènes
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ol>
        </div> -->
        <!-- <div class="col-12">
            <b>Déclaration nutritionnelle</b>
                <br>
                <ol class="row">
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Énergie</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">cal</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Graisses totales</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Acides gras saturés</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Glucides</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Sucres</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Protéines</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Sel</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                        <li class="col-md-12 col-lg-6">
                            <div class="row">
                                <div class="col-4">Autre</div>
                                <div class="col-6">valeur</div>
                                <div class="col-2">%</div>
                            </div>
                        </li>
                </ol>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <div class="col-12">
                Provenance
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                Conservation
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                Pays origine
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                Teneur en alcool
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <div class="col-12">
                    Raison Social
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    nom
                </div>
                <div class="col-6">
                    prénom
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    adresse mail
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    Numéro de téléphone
                </div>
            </div>
        </div> -->
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
            <div class="close" id="fill"><i class="fa fa-print fa-fw"></i></div>
        </section>
    </div>
    <script src="/assets/js/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="/assets/js/app.js"></script>
<?php }
?>