<?php
if ("POST" == $_SERVER['REQUEST_METHOD'] && cleanStr($_POST['post']) !== ""){
	include("core/db_connect.php");
	$sql = "CREATE TABLE IF NOT EXISTS posts (id INTEGER PRIMARY KEY AUTOINCREMENT, post TEXT)";
	$stmt = $pdo -> prepare("INSERT INTO posts (post) VALUES (:post)");
	$stmt->bindParam(':post', cleanStr($_POST['post']), PDO::PARAM_STR);
	$stmt->execute();
}
header("Location: index.php");
exit();

function cleanStr($str){
	$str = str_replace(array("\r\n","\n","\r"), '', $str);
	return strip_tags($str);
}