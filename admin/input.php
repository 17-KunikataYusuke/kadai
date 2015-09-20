<?php include("header.php"); ?>
<?php include("login_check.php"); ?>
<form action="db_execute.php" method="post">
    <input type="hidden" name="tranType" value="ins"/>
    <ul>
        <li>タイトル: <input type="text" name="title" /></li>
        <li>本文: <input type="text" name="detail" /></li>
    </ul>
	<input type="submit" value="新規登録"/>
</form>
<ul>
<li><a href="index.php">top</a></li>
</ul>
<?php include("footer.php"); ?>