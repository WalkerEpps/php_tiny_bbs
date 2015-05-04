<?php
define("DNS", "sqlite:core/posts.db");// SQLite by default
try {
	$pdo = new PDO(DNS, null, null); 
} catch (Exception $e) {
	echo $e->getMessage();
}
