<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<meta name="theme-color" content="#000000" />
		<title>Tell-Tale-Text</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<style>
body {
	color: white;
	background: black;
}
#login-idps { display: block; }
#login-account { display: none; }
.login-idp { cursor: pointer; color: blue; }
		</style>
		<script>
function loginFacebook() {
	idpLogin("facebook");
}
function loginGoogle() {
	idpLogin("google");
}
function loginBlerpo() {
	idpLogin("blerpo");
}
function idpLogin(service) {
	console.log(service);
	if (service == "facebook") {
		document.location = "https://facebook.com";
	}
	if (service == "google") {
		document.location = "https://google.com";
	}
}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="text-center">tell-tale-text</h1>
				</div>
			</div>
			<div class="row">
				<div class="text-end" id="login-idps" class="col">
					Login with
					-- <span class="login-idp" id="login-idp-facebook">Facebook</span>
					-- <span class="login-idp" id="login-idp-google">Google</span>
					-- <span class="login-idp" id="login-idp-blerpo">Blerpco</span>
				</div>
				<div class="text-end" id="login-account" class="col">Account</div>
			</div>
			<div class="row">
				<div id="table-of-contents" class="col"></div>
			</div>
			<div class="row">
				<div id="story" class="col">
					<p>Once upon a time...</p>
					<p>Once upon another time...</p>
					<p>Once upon a third time...</p>
					<p>Once upon a fourth time...</p>
					<p>Once upon a fifth time...</p>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
$("#login-idp-facebook").on("click", loginFacebook);
$("#login-idp-google").on("click", loginGoogle);
$("#login-idp-blerpo").on("click", loginBlerpo);
		</script>
	</body>
</html>