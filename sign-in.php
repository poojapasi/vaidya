<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = md5($_POST['password']);

	$select = " SELECT * FROM form WHERE email = '$email' && password = '$password' "; 

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){

		$row = mysqli_fetch_array($result);

			$_SESSION['name'] = $row['name'];
			header('location:user-login.php');
			exit();

	}else{

		$error[] = 'Invalid Email or Password';
	}
};
?>


<!DOCTYPE html>
<html lang="en"> 
  

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="TechWave">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="img/logo.png" rel="icon">
<link href="img/logo.png" rel="AyruvediCure">
<title>AyurvediCure - Sign Up</title>



<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}
  	
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />

<style>
	.mynav{
		height: 7vh;
		width: 28%;
		margin: 3px 3px 3px;
		display: inline-block;
	}
</style>

</head>

<body>

<nav class="mynav">
	<img src="img/name.png" alt="AyurvediCure">
</nav>
	 
<!-- Sign In -->
<div class="techwave_fn_sign">
	
	<div class="sign__content">
		<h1 class="logo">vaidya Ayurveda🌿</h1>
		<form class="login">
		<?php 
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};
			?>
			<div class="form__content">
				<div class="form__title">Sign In</div>
				<div class="form__username">
					<label for="user_login">Email</label>
					<input type="email" name="email" class="input" id="user_login" autocapitalize="off" autocomplete="username" aria-describedby="login-message">
				</div>
				<div class="form__pass">
					<div class="pass_lab">
						<label for="user_password">Password</label>
						<a href="#">Forget Password?</a>
					</div>
					<input type="password" name="paasword" id="user_password" autocomplete="current-password" spellcheck="false">
				</div>
				<div class="form__submit">
					<label class="fn__submit">
						<input type="submit" name="submit" value="Sign In" >
					</label>
				</div>
				<div class="form__alternative">
					<div class="fn__lined_text">
						<div class="line"></div>
						<div class="text">Or</div>
						<div class="line"></div>
					</div>
					<a href="user-login.php" class="techwave_fn_button"><span>ByPass Login</span></a>
				</div>
			</div>
		</form>
		<div class="sign__desc">
			<p>Not a member? <a href="index.php">Sign Up</a></p>
		</div>
	</div>
	
</div>
<!-- !Sign In -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>
</html>