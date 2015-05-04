<?php
include("./core/db_connect.php");

$sql = "CREATE TABLE IF NOT EXISTS posts (id INTEGER PRIMARY KEY AUTOINCREMENT, post TEXT)";
try {
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	header("Location: index.php");
	exit();
} catch (Exception $e) {
	echo $e->getMessage();
}
