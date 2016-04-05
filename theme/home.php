<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Tiny BBS</title>
	<link rel="stylesheet" type="text/css" href="theme/css/style.css">
</head>
<body  onLoad="document.f.post.focus();">
<div id="outline">
	<h1>Tiny BBS</h1>
	<form name="f" action="_post.php" method="POST">
		<textarea name="post" rows="3" onkeydown="postComment();"></textarea>
		<input type="submit" value="Postar">
	</form>
	<div id="posts">
	<hr>
		<?php load_post();?>
	</div>
	<button onclick="loadPosts();">Read More</button>
</div>
<script type="text/javascript" src="theme/js/func.js"></script>
</body>
</html>