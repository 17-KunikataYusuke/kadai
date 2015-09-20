<?php include("header.php"); ?>
<?php 
$user = $_POST["user"];
$pass = $_POST["pass"];
//echo $user;
//echo $pass;
$fp = fopen("password/password.csv", "r");		//ファイルを開く
$isOK = false;
while ($array = fgetcsv( $fp )) {		//ファイルを読み込む
	$userNm = $array[0];
	$password = $array[1];
    //echo $userNm;
    //echo $password;
    if(($user===$userNm)&&($pass===$password)){
        $isOK = true;
        break; 
    }
}
//var_dump($isOK);
if ($isOK) {
var_dump($isOK);
    header("Location:index.php");
    session_start();
    $_SESSION["user"]="$user";
}else{
    header("Location:login.php");
}
?>
<?php include("footer.php"); ?>
