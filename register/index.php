<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/ass.css" media="screen" />
		<meta charset="utf-8">

		<title>Moe Register</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>

		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="login-form">

			<h3>Register</h3>

			<fieldset>

				<form action="../includes/api.php?do=register" method="post">
                    <input type="email" name="email" required value="email" onBlur="if(this.value=='')this.value='email'" onFocus="if(this.value=='email')this.value='' "> <!-- JS because of IE support; better: placeholder="email" -->
					<input type="password" name="pass" required value="pass" onBlur="if(this.value=='')this.value='pass'" onFocus="if(this.value=='pass')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->
                    <div class="g-recaptcha" data-sitekey="6LdQ3RgTAAAAADpaif7QaydSUf-Flj3Jwh2y1rjv"></div>
                    <input type="submit" value="Register">

					<footer class="clearfix">
						<p><span class="info">?</span><a href="../login">Login</a></p>
					</footer>

				</form>
			</fieldset>

		</div> <!-- end login-form -->
		<div id="fail">
			<h3>Email in use</h3>
			<fieldset>
				<p>This email is already in use, choose another one or login to your existing account.</p>
			</fieldset>
		</div>
	</body>
</html>
