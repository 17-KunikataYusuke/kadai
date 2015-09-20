<?php include("login_check.php"); ?>
<?php include("header.php"); ?>
<?php
$sql = "SELECT 
            news_id
           ,news_title
        FROM
            kadai
        where
            show_flg = 1
        order by 
            create_date";
$results = doSelect($sql);
echo "<ul>";
foreach($results as $row) {
    $id = $row["news_id"];
    echo "<li>";
    echo '<p><a href="update_detail.php?news_id='.$id.'">';
	echo $row["news_title"];
    echo "</a></p>";
    echo "</li>";
}
echo "</ul>";
?>
<div><a href="index.php">戻る</a></div>
<?php include("footer.php"); ?>