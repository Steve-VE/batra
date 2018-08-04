<?php
function connectToDB(string $dbConfigPath){
    require_once 'config/'.$dbConfigPath.'.php';
    // Connexion à la base de données
    try{
        $db = new PDO("mysql:host=localhost;dbname=".$dbName, $dbUser, $dbPassword);

        $sql = '
        SELECT * FROM producers 
        WHERE id = :id';
        $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => 1));
        $userRawData = $sth->fetchAll()[0];
        // var_dump($userRawData);
        $_SESSION['name'] = $userRawData['corp_name'];
        $_SESSION['id'] = $userRawData['id'];
        $_SESSION['personnal_codebar'] = $userRawData['codebar'];
        $_SESSION['phone'] = $userRawData['phone'];

        return $db;
    }
    catch(PDOEXception $e){
        die($e->getMessage());
    }
}