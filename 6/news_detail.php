<?php include("header.php"); ?>
<?php include("dbUtil.php"); ?>
<?php
$id = $_REQUEST["news_id"];
$sql = "SELECT 
            *
        FROM
            kadai
        where
            news_id = ".$id;
$results = doSelect($sql);
if (count($results) >0){
    //var_dump($results);
    $title =  $results[0]["news_title"];
    $detail =  $results[0]["news_detail"];
    echo "<h2>";
    echo $title;
    echo "</h2>";
    echo "<p>";
    echo $detail;
    echo "</p>";
}else{
    echo "↓　戻る　を押してください↓";
}
?>

<div><a href="news_index.php">戻る</a></div>
<?php include("footer.php"); ?>