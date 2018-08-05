<?php
function connectToDB($dbConfigPath){
    require_once './config/'.$dbConfigPath.'.php';

    // Connexion à la base de données
    try{        
        $db = new PDO("mysql:host=$dbHost;dbname=".$dbName, $dbUser, $dbPassword);
        return $db;
    }
    catch(PDOEXception $e){
        die($e->getMessage());
    }
}

function logUser($userEmail){
    global $db;
    $sql = '
    SELECT * FROM producers 
    WHERE email = :email';
    $statement = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $statement->execute(array(':email' => $userEmail));
    $userRawData = $statement->fetchAll();
    if(count($userRawData) > 0){
        $userRawData = $userRawData[0];
        // var_dump($userRawData);
        $_SESSION['corp_name'] = $userRawData['corp_name'];
        $_SESSION['firstname'] = $userRawData['firstname'];
        $_SESSION['lastname'] = $userRawData['lastname'];
        $_SESSION['id'] = $userRawData['id'];
        $_SESSION['personal_barcode'] = $userRawData['barcode'];
        $_SESSION['email'] = $userRawData['email'];
        $_SESSION['phone'] = $userRawData['phone'];
        // var_dump($_SESSION);
        return true;
    }
    else{
        return false;
    }
}

function getUserInfo($index){
    if(isset($_SESSION[$index])){
        return $_SESSION[$index];
    }
    return '';
}

function saveNewProduct(){
    global $db;
    // var_dump($_POST);
    // var_dump($_SESSION);
    include './assets/uploads/upload.php';

    $imageLink = uploader();

    $allergens_list = [
        [
            'name' => "gluten",
            'display' => "gluten"
        ],
        [
            'name' => "crustaceans",
            'display' => "crustacés"
        ],
        [
            'name' => "eggs",
            'display' => "oeufs"
        ],
        [
            'name' => "fish",
            'display' => "poisson"
        ],
        [
            'name' => "peanuts",
            'display' => "arachides"
        ],
        [
            'name' => "soybeans",
            'display' => "soja"
        ],
        [
            'name' => "milk",
            'display' => "lait"
        ],
        [
            'name' => "nuts",
            'display' => "fruits à coque"
        ],
        [
            'name' => "celery",
            'display' => "céléri"
        ],
        [
            'name' => "mustard",
            'display' => "moutarde"
        ],
        [
            'name' => "sesame_seeds",
            'display' => "graines de sésame"
        ],
        [
            'name' => "sulphur_dioxide_and_sulphites",
            'display' => "anhydride sulfureux et sulfites"
        ],
        [
            'name' => "lupin",
            'display' => "lupin"
        ],
        [
            'name' => "molluscs",
            'display' => "mollusques"
        ]
    ];
    $allergensStatement = '';
    $allergenKeys = '';
    $statementArray = array(
        ':id_producer' => $_SESSION['id'],
        ':barcode_tail' => round(rand(0, 9)) . '' . round(rand(0, 9)),
        ':name' => $_POST['name'],
        ':denomination' => $_POST['denomination'],
        ':ingredients' => $_POST['ingredients'],
        ':description' => $_POST['description'],
        ':image' => $imageLink
    );

    foreach($allergens_list as $allergen){
        $allergenName = 'allergen_'. $allergen['name'];
        
        if(isset($_POST[$allergenName]) && strcmp($_POST[$allergenName], 'nothing') != 0){
            $allergensStatement .= $allergenName .', ';
            $allergenKeys .= ':'. $allergenName .', ';
            $statementArray[$allergenName] = $_POST[$allergenName];
        }
    }

    $sql = '
    INSERT INTO `products`(`id_producer`, `barcode_tail`, `name`, `denomination`, `ingredients`, `description`, '. $allergensStatement .'`image`) 
    VALUES (:id_producer, :barcode_tail, :name, :denomination, :ingredients, :description, '. $allergenKeys .':image)';
    $statement = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $statement->execute($statementArray);

    return true;
}