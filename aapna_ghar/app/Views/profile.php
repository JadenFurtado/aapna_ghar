<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<div id="name"></div>
	<div>
		<img src="" id="image">
	</div>
	<?php 

/*	print_r($house);
	foreach($house as $x):
		echo($x['house_state']);
	endforeach;
	*/
	?>
<script type="text/javascript">
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://oauth2.googleapis.com/tokeninfo?id_token="+localStorage.getItem("id_token"), true);
	xhr.send();
	var data = xhr.response;
	//console.log(data);
	xhr.onreadystatechange = function () {
  // In local files, status is 0 upon success in Mozilla Firefox
  		if(xhr.readyState === XMLHttpRequest.DONE) {
    		var status = xhr.status;
    		if (status === 0 || (status >= 200 && status < 400)) {
      // The request has been completed successfully
      			console.log(xhr.responseText);
      			const profile = JSON.parse(xhr.responseText);
      			document.getElementById("name").innerText=profile.name
      			document.getElementById("image").src=profile.picture;
      			var x = new XMLHttpRequest();
      			x.open("GET","http://localhost/aapna_ghar/");
    		} else {
      	// Oh no! There has been an error with the request!
    			}
  		}
	};
	//console.log(xhttp);
</script>	
</body>
</html>
