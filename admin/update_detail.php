<?php include("login_check.php"); ?>
<?php include("header.php"); ?>
<form action="db_execute.php" method="post">
    <input type="hidden" name="tranType" value="upd"/>
    <ul>
        <?php
        $id = $_REQUEST["news_id"];
        $idHidden = '<input type="hidden" name="id" value="'.$id.'"/>';
        echo $idHidden;
        $sql = "SELECT 
                    *
                FROM
                    kadai
                where
                    news_id = ".$id;
        $results = doSelect($sql);
        if (count($results) >0){
            //var_dump($results);
            $id =  $results[0]["news_id"];
            $title =  $results[0]["news_title"];
            $detail =  $results[0]["news_detail"];
            echo '<li>タイトル: <input type="text" name="title" value="';
            echo $title;
            echo '" /></li>';
            echo '<li>本文: <input type="text" name="detail" value="';
            echo $detail;
            echo '" /></li>';
        }else{
            echo "↓　戻る　を押してください↓";
        }
        ?>
    </ul>
	<input type="submit" value="更新"/>
</form>

<form action="db_execute.php" method="post">
    <?php  echo $idHidden; ?>
    <input type="hidden" name="tranType" value="del"/>
	<input type="submit" value="削除"/>
</form>
<div><a href="index.php">戻る</a></div>
<?php include("footer.php"); ?>