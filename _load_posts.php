<?php
if(isset($_GET['from'])){load_post($_GET['from']);}

function load_post($from = 0){
	include("core/db_connect.php");
	
	$offset = 10;  // Number of posts to load at once

	$from = $from * $offset;

	$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $from, $offset";
	$stmt = $pdo->query($sql);
	if (isset($stmt)) {
		$r = "";
		foreach ($stmt as $key => $val) {
		$str = htmlspecialchars($val['post']);
		if($str != "")
			$r .= "<p>$str</p>\n";
		}
		echo $r;
	}
}