function go(){
	if(event.keyCode==13){
		document.post.submit();
	}
}

function makePostLoader(target){
	var cp = 1;
	var posts = document.getElementById(target);
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			if(xmlhttp.responseText !== ""){ cp = cp + 1;}
			posts.innerHTML += xmlhttp.responseText;
		}
	};
	return function(){
		// Debug 
		//console.log("GET","_load_posts.php?from="+ cp);
		xmlhttp.open("GET","_load_posts.php?from="+ cp, true);
		xmlhttp.send();
	};
}

var loadPosts = makePostLoader("posts");