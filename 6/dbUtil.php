<?php
$dbInfo = "mysql:host=localhost;dbname=cs_academy;charset=utf8";
$db_user = "root";
$db_pass = "";

function getPdo(){
    global $dbInfo, $db_user, $db_pass;
    $pdo = new PDO($dbInfo,
                   $db_user,
                   $db_pass);
    return $pdo;
}

function closePdo($pdo){
    $pdo = null;
}

function doSelect($sqlTxt){
    $pdo = getPdo();
    $stmt = $pdo->prepare($sqlTxt);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($sqlTxt);
    //var_dump($results);
    closePdo($pdo);
    return $results;
}
?>
