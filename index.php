<?php

@include 'config.php';

if(isset($_POST['submit'])){

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = md5($_POST['password']);

	$select = " SELECT * FROM form WHERE email = '$email' && password = '$password' "; 

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){
		$error[] = 'user alredy exit!';

	}else{
		$insert = "INSERT INTO form (name, email, password) VALUES ('$name','$email','$password')";
		mysqli_query($conn, $insert);
		header('location:sign-in.php');
		}
};
?>

<!DOCTYPE html>
<html lang="en">   

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Favicons -->
<link href="img/logo.png" rel="icon">
<link href="img/logo.png" rel="AyruvediCure">
<meta name="description" content="A brief description of your website that accurately describes its content and purpose.">

<!-- Keywords Meta Tag -->
<meta name="keywords" content="AyurvediCure, AI Doctor, Ayurvedic Doctor, Doctor, Ayurveda, Krypto Etox">

<!-- Author Meta Tag -->
<meta name="author" content="AyurvediCure">

<!-- Robots Meta Tag -->
<meta name="robots" content="index, follow">

 <!-- Open Graph Meta Tags for Social Media -->
<meta property="og:title" content="AyurvediCure - AI Ayurvedic Doctor">
<meta property="og:description" content="AyurvediCure offers comprehensive Ayurvedic consultations and treatments. Consult our AI Doctor or speak with a human doctor for personalized Ayurvedic healthcare solutions.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://pkprajapati7402.github.io/AyurvediCure/">
<meta property="og:image" content="https://www.yourwebsite.com/img/desktop.png">


    <!-- Canonical Link -->
<link rel="canonical" href="https://pkprajapati7402.github.io/AyurvediCure/">
<title>AyurvediCure - AI Ayurvedic Doctor</title>
	


<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'light';
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

<!-- Sign Up -->
 <nav class="mynav">
	<img src="img/name.png" alt="AyurvediCure">
 </nav>
 
<div class="techwave_fn_sign">
		
	<div class="sign__content">
		<h1 class="logo">Designed by KryptoEtox</h1>
		<form class="signup" id="signup" action="" method="post">
			<?php 
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};
			?>

			<div class="form__content">
				<div class="form__title">Sign Up</div>
				<div class="form__name">
					<label for="name">Name</label>
					<input type="text" name="name" class="input" id="name" placeholder="Full Name">
				</div>
				<div class="form__email">
					<label for="email">Email</label>
					<input type="email" name="email" class="input" id="email" placeholder="yourmail@example.com">
				</div>
				<div class="form__pass">
					<label for="user_password">Password</label>
					<input type="password" name="cpassword" id="user_password" autocomplete="current-password" spellcheck="false">
				</div>
				<div class="form__submit">
					<label class="fn__submit">
						<input type="submit" name="submit" value="Register Now">
					</label>
				</div>
				<!-- <div class="form__alternative">
					<div class="fn__lined_text">
						<div class="line"></div>
						<div class="text">Or</div>
						<div class="line"></div>
					</div>
					<a href="#" class="techwave_fn_button"><span>Sign up with Google</span></a>
				</div> -->
			</div>
		</form>
		<div class="sign__desc">
			<p>Already have an account? <a href="sign-in.php">Sign In</a></p>
		</div>
	</div>
	
</div>
<!-- !Sign Up -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

</html>
