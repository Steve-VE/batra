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
        $_SESSION['name'] = $userRawData['corp_name'];
        $_SESSION['id'] = $userRawData['id'];
        $_SESSION['personal_barcode'] = $userRawData['barcode'];
        $_SESSION['phone'] = $userRawData['phone'];
        return true;
    }
    else{
        return false;
    }
}