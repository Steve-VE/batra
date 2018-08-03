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
            <ol>
                <?php foreach($allergens_list as $allergen){?>
                    <li>
                        <label for="allergen_<?= $allergen;?>"><?= ucfirst($allergen);?> :</label>
                            <label><input type="radio" name="allergen_<?= $allergen;?>" id="">N'en contient pas</label>
                            <label><input type="radio" name="allergen_<?= $allergen;?>" id="">Contient</label>
                            <label><input type="radio" name="allergen_<?= $allergen;?>" id="">Peu contenir des traces</label>
                            <label><input type="radio" name="allergen_<?= $allergen;?>" id="">Inconnu</label>
                    </li>
                <?php } ?>
            </ol>
    <br>
    <!-- raison social -->
        <label for="">Raison social</label>
        <input type="radio" name="" id="">SA
        <input type="radio" name="" id="">SPRL
        <input type="radio" name="" id="">ASBL
        <input type="radio" name="" id="">Autre
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
            <li>Glucides <input type="number" name="" id="">%</li>
            <li>Sucres <input type="number" name="" id="">%</li>
            <li>Protéines <input type="number" name="" id="">%</li>
            <li>Sel <input type="number" name="" id="">%</li>
            <li>Autre <input type="number" name="" id="">%</li>
        </ul>

        
    <br>
    <!-- contact -->
        <label for="">Contact</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    <br>
    <!-- pays origine -->
        <label for="">Pays origine</label>
        <input type="text" name="" id="">
    <br>
    <!-- Teneur en alcool -->
        <label for="">Teneur en alcool</label>
        <input type="number" name="" id="">%
    <br>
</form>