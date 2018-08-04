<?php
function connectToDB(string $dbConfigPath){
    require_once './config/'.$dbConfigPath.'.php';
    global $dbHost; global $dbName;
    global $dbUser; global $dbPassword;

    // Connexion à la base de données
    try{
        $db = new PDO("mysql:host=$dbHost;dbname=".$dbName, $dbUser, $dbPassword);

        $sql = '
        SELECT * FROM producers 
        WHERE id = :id';
        $statement = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $statement->execute(array(':id' => 1));
        $userRawData = $statement->fetchAll()[0];
        // var_dump($userRawData);
        
        $_SESSION['name'] = $userRawData['corp_name'];
        $_SESSION['id'] = $userRawData['id'];
        $_SESSION['personnal_barcode'] = $userRawData['barcode'];
        $_SESSION['phone'] = $userRawData['phone'];

        return $db;
    }
    catch(PDOEXception $e){
        die($e->getMessage());
    }
}