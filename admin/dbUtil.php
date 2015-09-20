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

function doInsert($array){
    $user = $_SESSION["user"];
    $sql = "INSERT INTO kadai 
                select
                    (    select 
                             max(news_id) +1 
                         from
                             kadai)
                   ,:title
                   ,:detail
                   ,1
                   ,:user
                   ,sysdate()
                   ,sysdate()
                from
                    dual ";
    /*
    var_dump($user);
    //var_dump($array);
    var_dump($sql);*/
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $array["title"], PDO::PARAM_STR);
    $stmt->bindValue(':detail', $array["detail"], PDO::PARAM_STR);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $result = $stmt->execute();
    closePdo($pdo);
    return $result;
}

function doUpdate($array){
    //var_dump($array);
    $user = $_SESSION["user"];
    $sql = "UPDATE kadai set
                news_title =:title
               ,news_detail=:detail
               ,update_date=sysdate()
            where
                news_id =:id ";
    /*
    var_dump($user);
    //var_dump($array);
    var_dump($sql);*/
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $array["title"], PDO::PARAM_STR);
    $stmt->bindValue(':detail', $array["detail"], PDO::PARAM_STR);
    $stmt->bindValue(':id', $array["id"], PDO::PARAM_INT);
    $result = $stmt->execute();
    closePdo($pdo);
    return $result;
}

function doDelete($array){
    $user = $_SESSION["user"];
    $sql = "delete from kadai
            where
                news_id =:id ";
    /*
    var_dump($user);
    //var_dump($array);
    var_dump($sql);*/
    $pdo = getPdo();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $array["id"], PDO::PARAM_INT);
    $result = $stmt->execute();
    closePdo($pdo);
    return $result;
}
?>
