<?php include("header.php"); ?>
<?php include("login_check.php"); ?>
<div>
<?php 
    //var_dump($_POST);
    if (!isset($_POST["tranType"])){
        return;
    }
    $tranType = $_POST["tranType"];
    $title = $_POST["title"];
    $detail = $_POST["detail"];
    $result = false;
    if ($tranType==="ins"){
        $result = doInsert($_POST);
    } elseif($tranType==="upd"){
        $result = doUpdate($_POST);
    }elseif($tranType==="del"){
        $result = doDelete($_POST);
    }
    if($result){
        echo("成功しました");
    }else{
        echo("失敗しました");
    }

?>
</div>
<div>
    <a href="index.php">top</a>
</div>
<?php include("footer.php"); ?>