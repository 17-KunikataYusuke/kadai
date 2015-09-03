<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<table border="1" >
    <tr>
    <th>名前</th>
    <th>Email</th>
    <th>年齢</th>
    <th>性別</th>
    <th>読書</th>
    <th>映画</th>
    <th>スポーツ</th>
    </tr>
<?php
$fp = fopen("data/data.csv", "r");		//ファイルを開く
flock($fp, LOCK_SH);					//ファイルロック
while ($array = fgetcsv( $fp )) {		//ファイルを読み込む
    echo "<tr>";
	$num = count($array);				//行数カウント
	for($i=0;$i<$num;$i++){
        echo "<td>";
		echo $array[$i];
        echo "</td>";
	}
    echo "</tr>";
}

flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる
?>
    </table>    
<div><a href="index.php">戻る</a></div>
</body>