<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- favicon -->
	<link rel="icon" href="../assets/logo.svg">
	<title>Delivery | Inscription</title>
</head>

<body class="bd">
    	<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
                    <div class="log">
                        <img src="../assets/logo.svg" width="80%">
                    </div>
					<h4 class="popup-title">Inscription</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="register-form" method="post" action="sign_post.php">
						<label for="email_address2" class="rl-label required">Email</label>
						<input type="email" id="email_address2" name="email_address2" placeholder="Adresse email..." required = required>
						<label for="username2" class="rl-label required">Pseudo</label>
						<input type="text" id="username2" name="username" placeholder="Pseudo..." required = required>
						<label for="password2" class="rl-label required">Mot de passe</label>
						<input type="password" id="password2" name="password" placeholder="Mot de passe..." required = required>

                        <p>déja un compte? <a href="http://localhost/delivery/delivery_market/form_log.html" class="primary">Se connecter!</a></p>
						<button class="button mid dark" id="send">S'inscrire</button>
					</form>
					
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script></script>
</body>