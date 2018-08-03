<?php 
$allergens_list = [
    "gluten", "crustacés", "oeufs", "poisson", "arachides", "soja", "lait", "fruits à coque", "céléri", "moutarde", "graines de sésame", "anhydride sulfureux et sulfites", "lupin", "mollusques"
];
?>
<form action="" method="post">
    <!-- dénomination -->
        <label for="">Dénomination</label>
        <input type="text" name="" id="">
    <br>
    <!-- provenance -->
        <label for="">Provenance</label>
        <input type="text" name="" id="">
    <br>
    <!-- liste ingrdiant -->
        <label for="">Liste ingrdiant</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <!-- alégéne -->
        <b>liste des allergènes</b><br>
            <ul>
                <?php foreach($allergens_list as $allergen){?>
                    <li>
                        <label for="allergen_<?= $allergen;?>"><?= ucfirst($allergen);?> :</label>
                        <select name="allergen_<?= $allergen;?>" id="">
                            <option value="Not">N'en contient pas</option>
                            <option value="Have">Contient</option>
                            <option value="Mayhave">Peut contenir des traces</option>
                            <option value="Unknow">Inconnu</option>
                        </select>
                    </li>
                <?php } ?>
            </ul>
    <br>
    <!-- raison social -->
        <select class="u-full-width" id="exampleRecipientInput">
        <option value="Option 1"name="SA">SA</option>
        <option value="Option 2"name="SPRL">SPRL</option>
        <option value="Option 3"name="ASBL">ASBL</option>
        <option value="Option 4"name="Autre">Autre</option>
      </select>
    <br>
    <!-- nom entreprise -->
        <label for="">Nom entreprise</label>
        <input type="text" name="" id="">
    <br>
    <!-- Conservation -->
        <label for="">Conservation</label>
        <input type="date" name="" id="">
    <br>
    <!-- adresse entreprise -->
        <label for="">Adresse entreprise</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <!-- déclaration nutritionnelle -->
        <b>Déclaration nutritionnelle : </b>
        <ul>
            <li>Énergie <input type="number" name="" id="">cal</li>
            <li>Graisses totales <input type="number" name="" id="">%</li>
            <li>Acides gras saturés <input type="number" name="" id="">%</li>
            <li>Glucides <input type="number" name="carbonehydrate" id="carbonehydrate">%</li>
            <li>Sucres <input type="number" name="sugar" id="sugar">%</li>
            <li>Protéines <input type="number" name="protein" id="protein">%</li>
            <li>Sel <input type="number" name="salt" id="salt">%</li>
            <li>Autre <input type="number" name="otherNutrient" id="otherNutrient">%</li>
        </ul>

        
    <br>
    <!-- contact -->
        <label for="">Contact</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
<!-- Nom  -->
    <div class="six columns">
      <label for="exampleEmailInput">Ton nom</label>
      <input class="u-full-width" type="text" name="nom" placeholder="Ton nom" id="name">
    </div>
    <!-- Prénom -->
    <div class="six columns">
      <label for="exampleEmailInput">Ton prénom</label>
      <input class="u-full-width" type="text" name="prénom" placeholder="Ton prénom" id="forname">
    </div>
    <!--contact mail -->
    <div class="six columns">
      <label for="exampleEmailInput">Ton adresse mail</label>
      <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="emailInput">
    </div>
    <!-- contact phone -->
    <div class="six columns">
      <label for="exampleEmailInput">Ton Numéro de téléphone</label>
      <input class="u-full-width" type="number"name="tel" placeholder="000.00.00.00" id="phoneNumber">
    </div>
    <br>
    <!-- pays origine -->
        <label for="">Pays origine</label>
        <input type="text" name="Land" id="">
    <br>
    <!-- Teneur en alcool -->
        <label for="">Teneur en alcool</label>
        <input type="number" name="alc" id="alc">%
    <br>
    <a class="button" href="#">Bouton d'envois</a>
<button>Envois du formulaire</button>
<input type="submit" value="submit input">
<input type="button" value="button input">
</form>