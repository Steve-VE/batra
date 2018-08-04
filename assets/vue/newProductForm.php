<?php 
$allergens_list = [
    "gluten", "crustacés", "oeufs", "poisson", "arachides", "soja", "lait", "fruits à coque", "céléri", "moutarde", "graines de sésame", "anhydride sulfureux et sulfites", "lupin", "mollusques"
];
?>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="row"> 
        <div class="col-12 ">
            <div class="row">
                <div class="col-md-12 col-lg-6 cologneG">
                    <div class="row">
                        <!-- <div class="col-md-12 col-lg-6">
                            <label for="">Dénomination</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <input type="text" name="" id="">
                        </div> -->
                    </div>
                    <div class="row"><!-- dénomination -->
                        <label for=""><div class="col-md-12 col-lg-6">
                            Dénomination
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <input type="text" name="" id="">
                        </div></label>
                    </div>
                    <div class="row"><!-- liste ingrédient -->
                        <div class="col-md-12 col-lg-6">
                            <label for="">Liste des ingrédients</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <b>Déclaration nutritionnelle : </b>
                            <ul class="row">
                                <li class="col-12">
                                    <div class="row">
                                    <div class="col-4">Énergie</div>
                                    <div class="col-6"><input type="number" name="" id=""></div>
                                    <div class="col-2">cal</div></div>
                                    </li>
                                <li class="col-12"><div class="row">
                                    <div class="col-4">Graisses totales</div>
                                    <div class="col-6"><input type="number" name="" id=""></div>
                                    <div class="col-2">%</div></div></li>
                                <li class="col-12"><div class="row">
                                    <div class="col-4">Acides gras saturés</div>
                                    <div class="col-6"><input type="number" name="" id=""></div>
                                    <div class="col-2">%</div></div></li>
                                <li class="col-12"><div class="row">
                                    <div class="col-4">Glucides</div>
                                    <div class="col-6"><input type="number" name="carbonehydrate" id="carbonehydrate"></div>
                                    <div class="col-2">%</div></div></li>
                                <li class="col-12"><div class="row">
                                        <div class="col-4">Sucres</div>
                                        <div class="col-6"><input type="number" name="sugar" id="sugar"></div>
                                        <div class="col-2">%</div></div></li>
                                    <li class="col-12"><div class="row">
                                        <div class="col-4">Protéines</div>
                                        <div class="col-6"><input type="number" name="protein" id="protein"></div>
                                        <div class="col-2">%</div></div></li>
                                    <li class="col-12"><div class="row">
                                        <div class="col-4">Sel</div>
                                        <div class="col-6"><input type="number" name="salt" id="salt"></div>
                                        <div class="col-2">%</div></div></li>
                                <li class="col-12"><div class="row">
                                        <div class="col-4">Autre</div>
                                        <div class="col-6"><input type="number" name="otherNutrient" id="otherNutrient"></div>
                                        <div class="col-2">%</div></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row"><!-- provenance -->                      
                        <div class="col-md-12 col-lg-6">
                            <label for="">Provenance</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="row"><!-- Conservation -->
                        <div class="col-md-12 col-lg-6">
                            <label for="">Conservation</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <input type="date" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <!-- pays origine --><div class="col-md-12 col-lg-6">
                            <label for="">Pays origine</label></div><div class="col-md-12 col-lg-6">
                            <input type="text" name="Land" id=""></div>
                    </div>
                    <div class="row">    
                        <!-- Teneur en alcool --><div class="col-md-12 col-lg-4">
                            <label for="">Teneur en alcool</label></div><div class="col-md-9 col-lg-6">
                            <input type="number" name="alc" id="alc"></div><div class="col-md-3 col-lg-2">%</div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 cologneD">
                    <div class="row"><!--photo du produit-->
                        <div class="col-md-12 col-lg-4">
                            <label for="photo">Ajouter une photo du produit</label>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <input type="file" name="photo" id="photo">
                        </div>
                    </div>
                    <div class="row"><!-- raison social -->
                        <div class="col-md-12 col-lg-6">                            
                            <label for="RaisonSocial">Raison Social</label>
                        </div>
                        <div class="col-md-12 col-lg-6">    
                            <select name="RaisonSocial">
                                <option value="SA">SA</option>
                                <option value="SPRL">SPRL</option>
                                <option value="ASBL">ASBL</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"><!-- Nom entreprise -->
                        <div class="col-md-12 col-lg-6">
                            <label for="corp_name">Nom entreprise</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <input type="text" name="corp_name" id="">
                        </div>
                    </div>
                    <div class="row"><!-- Adresse de l'entreprise -->
                        <div class="col-md-12 col-lg-6">
                            <label for="">Adresse de l'entreprise</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row"><!-- contact -->
                        <div class="col-11 offset-1" >
                            <div class="row">
                                <!-- Nom  -->
                                <div class="col-md-12 col-lg-6">
                                    <label for="firstname">Ton nom</label>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="text" name="firstname" placeholder="Ton nom" id="name">
                                </div>                      
                                <!-- Prénom -->
                                <div class="col-md-12 col-lg-6">
                                    <label for="lastname">Ton prénom</label>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="text" name="lastname" placeholder="Ton prénom" id="forname">
                                </div>                       
                                <!--contact mail -->
                                <div class="col-md-12 col-lg-6">
                                    <label for="email">Ton adresse mail</label>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="email" name="email" placeholder="test@mailbox com" id="emailInput">
                                </div>       
                                <!-- contact phone -->
                                <div class="col-md-12 col-lg-6">
                                    <label for="phone">Ton Numéro de téléphone</label>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="tel" placeholder="0000.00.00.00" name="phone" id="phoneNumber">
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="row"><!-- Mode d'emploie -->
                        <div class="col-md-12 col-lg-6">
                            <label for="">Mode d'emploie</label>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row alegene"><!-- alégéne -->
        <div class="col-12">
            <b>liste des allergènes</b>
            <br>
            <ol class="row">
                <?php foreach($allergens_list as $allergen){?>
                    <li class="col-md-12 col-lg-6">
                        <div class="row">
                            <label class="col-md-12 col-lg-6" for="allergen_<?= $allergen;?>"><?= ucfirst($allergen);?> :</label>
                            <select class="col-md-12 col-lg-5" name="allergen_<?= $allergen;?>" id="">
                                <option value="Not">N'en contient pas</option>
                                <option value="Have">Contient</option>
                                <option value="Mayhave">Peut contenir des traces</option>
                                <option value="Unknow">Inconnu</option>
                            </select>
                        </div>
                    </li>
                <?php } ?>
            </ol>
        </div>
    </div>
    <button name="envoie">Envois du formulaire</button>
</form>

