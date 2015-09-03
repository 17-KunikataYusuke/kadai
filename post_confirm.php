<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php 
function getHobyChk($hoby_chk){
    if ($hoby_chk=="on"){
        return "〇";
    }else{
        return "×";
    }
}
$book = getHobyChk($_POST["book"]);
$movie = getHobyChk($_POST["movie"]);
$sports = getHobyChk($_POST["sports"]);
$array = array($_POST["name"],
               $_POST["mail"],
               $_POST["age"],
               $_POST["gender"],
               $book,
               $movie,
               $sports);
               
$file_p = fopen("data/data.csv","a");
flock($file_p,LOCK_EX);
fputcsv($file_p,$array);
flock($file_p,LOCK_UN);
fclose($file_p);
    
    echo "ありがとうございました。";    
    ?>
<div><a href="index.php">戻る</a></div>
</body>
</html>