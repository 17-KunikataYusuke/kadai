<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="post_confirm.php" method="post">
    <ul>
        <li>名前: <input type="text" name="name" /></li>
        <li>Email: <input type="text" name="mail" /></li>
        <li>年齢: <input type="text" name="age" /></li>
        <li>性別: <input type="radio" name="gender" value="M"/>男性
	　　　        <input type="radio" name="gender" value="F"/>女性
        </li>
        <li>
        	読書: <input type="checkbox" name="book" />
        	映画: <input type="checkbox" name="movie" />
        	スポーツ: <input type="checkbox" name="sports" />
        </li>
    </ul>
	<input type="submit" />
</form>
<ul>
<li><a href="read.php">結果を見る</a></li>
</ul>

</body>
</html>