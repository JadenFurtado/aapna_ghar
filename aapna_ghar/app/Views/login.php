<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
	<meta name="google-signin-client_id" content="584617120815-4to35fhkahjh9e4coqm4ot5ejks2d4ht.apps.googleusercontent.com">
	<div class="g-signin2" data-onsuccess="onSignIn"></div>
	<script type="text/javascript">
	function onSignIn(googleUser) {
			var id_token = googleUser.getAuthResponse().id_token;
  		var profile = googleUser.getBasicProfile();
  		console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  		console.log('Name: ' + profile.getName());
  		console.log('Image URL: ' + profile.getImageUrl());
  		console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  		console.log(id_token);
  		localStorage.setItem("id_token",id_token);
  		if(id_token===null){

  		}
  		else{
  			//location.replace("http://localhost/aapna_ghar/public/Profile/profile/"+profile.getName());
  		}
	}
	</script>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
</body>
</html>