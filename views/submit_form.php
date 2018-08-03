<?php
// Formulaire de soumission d'un nouveau produit
/*
    a) la dénomination de la denrée alimentaire;
    b) la liste des ingrédients;
    c) tout ingrédient ou auxiliaire technologique énuméré à l’annexe II ou dérivé d’une substance ou d’un produit énuméré à l’annexe II provoquant des allergies ou des intolérances, utilisé dans la fabrication ou la préparation d’une denrée alimentaire et encore présent dans le produit fini, même sous une forme modifiée;
    d) la quantité de certains ingrédients ou catégories d’ingrédients;
    e) la quantité nette de denrée alimentaire;
    f) la date de durabilité minimale ou la date limite de consommation;
    g) les conditions particulières de conservation et/ou d’utilisation;
    h) le nom ou la raison sociale et l’adresse de l’exploitant du secteur alimentaire visé à l’article 8, paragraphe 1;
    i) le pays d’origine ou le lieu de provenance lorsqu’il est prévu à l’article 26;
    j) un mode d’emploi, lorsque son absence rendrait difficile un usage approprié de la denrée alimentaire;
    k) pour les boissons titrant plus de 1,2 % d’alcool en volume, le titre alcoométrique volumique acquis;
    l) une déclaration nutritionnelle.

    // OPTIONNEL
    - Pays d'origine (pour les viandes)
    - Degré d'alcool (quand letaux d'alcool dépasse 1,2°)
*/
$allergens = ["gluten", "crustacés", "oeufs", "poisson", "arachides", "soja", "lait", "fruits à coque", "céléri", "moutarde", "graines de sésame", "anhydride sulfureux et sulfites", "lupin", "mollusques"];
?>
<form>
    <label>Le nom de votre produit
        <input type="text" name="product_name" id="product_name">
    </label>
    <label>Assigner ce produit à un code barre
        <select name="availible_bar_code" id=""></select>
    </label>
    <label>Entrez la liste des ingrédients (séparez chaque ingrédient par un espace ou une virgule)
        <textarea name="ingredients_list" id=""></textarea>
    </label>
    <div>
        <p>
            Si votre produit contient un ou plusieurs allergènes, renseignez-le ci-dessous
        </p>
        <?php
        foreach($allergens as $allergen){?>
        <p>
            <?= ucfirst($allergen);?>
            <label>Aucun<input type="radio" name="allergen_<?= $allergen;?>" id="nothing" checked></label>
            <label>Présent<input type="radio" name="allergen_<?= $allergen;?>" id="present"></label>
            <label>Peu contenir des traces<input type="radio" name="allergen_<?= $allergen;?>" id="may_contain"></label>
            <label>Inconnu<input type="radio" name="allergen_<?= $allergen;?>" id="inconnu"></label>
        </p>
        <?php
        }
        ?>
    </div>
</form>