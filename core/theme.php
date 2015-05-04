<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Tiny BBS</title>
	<link rel="stylesheet" type="text/css" href="core/css/style.css">
</head>
<body  onLoad="document.post.post.focus();">
<div id="outline">
	<h1>Tiny BBS</h1>
	<form name="post" action="_post.php" method="POST">
		<textarea name="post" rows="3" onkeydown="go();"></textarea>
		<input type="submit" value="Postar">
	</form>
	<div id="posts">
	<hr>
		<?php load_post();?>
	</div>
	<button onclick="loadPosts();">Read More</button>
</div>
<script type="text/javascript" src="core/js/func.js"></script>
</body>
</html>