<?php
	# 0 message variablen
	$msg = '';
	$msgClass = '';
	$url = '';
	$name = '';
	$message = '';

	// Werte aus dem Post-Array bereinigen & verwenden
		// Funktion zur Bereinigung: htmlspecialchars($input)
		// => Input-Zeichen werden mit echo nicht mehr ausgeführt, sondern nur die Zeichen als solche dargestellt.

	if(isset($_POST['submit'])){
		// 1 Daten abrufen
		$name = htmlspecialchars($_POST['name']);
		$url = htmlspecialchars($_POST['url']);
		$message = htmlspecialchars($_POST['message']);

		// 1 Check Required Fields
		if(!empty($url) && !empty($name) && !empty($message)){
			// Passed
			//$url = filter_var($url, FILTER_SANITIZE_ENCODED);
			// 2 Check Email
			// REG-EX Email
			if(filter_var($url, FILTER_VALIDATE_URL) === false){
				// Failed

				$msg = $name . ', your URL '. $url .' seems to not be valid. &#129327';
				$msgClass = 'danger';
			} else {
				// Passed
				$msg = 'Your URL is valid. &#x2713';
				$msgClass = 'success';

				// am ende
				$name = '';
				$url = '';
				$message = '';
			}

		}else{
			// 1 pflichtfelder fehlen
			$msg = 'Please fill out all the fields.';
			$msgClass = 'danger';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Validator Form</title>
	<style type="text/css">
		 body{color: #d0b57e; background-color: #2a4551; font-family: consolas}
            h1,h2,h3{font-weight:200;}
            header{
                text-align: center;
                background-color:#314d82;
                padding:20px;
                margin-bottom:10px;
            }
            #container{
                background-color: #006079;
                width: 80%;
                margin: auto;
                border: 1px solid #314d82;
                padding: 20px;
            }

						#footer{
							text-align: center;
							font-size: 12px;
						}

			.form{padding:20px;}
			.form .form-group{padding-bottom:20px;}
			.form label {display:block;}
            .button{
				background-color: #55939c;
				color:#d0b57e;
				padding: 10px 15px;
				border:none;
				border-radius: 4px;
			}
			.button:hover{
				background:#314d82;
				color:#d0b57e;
			}
			.alert{
				padding: 10px;
				font-size: 1.1em;
				text-align: center;
				border: 1px solid #314d82;
			}
			.danger {
				background-color: #a74a4a;
				color:#d0b57e;
			}
			.success {
				background-color: #00897b;
				color: #d0b57e;
			}
			.result {
				padding: 10px;
				background-color: #2e347f;
				color: #d0b57e;
				text-align: center;
			}

	</style>


</head>
<body>
	<header>
		<h1>The Validator &#128526;</h1>
		<h4>You don't need people's validation to check your URL. I'm here for you!</h4>
	</header>
			<div id="container">
					<?php if ($msg !== ''):?>
							<div class="alert <?php echo $msgClass;?>">
									<?php echo $msg; ?>
		  				</div>
					<?php endif; ?>
		<form class="form" method="POST" action=" <?php echo $_SERVER['PHP_SELF'];?>">

			<div class="form-group">
				<label>Name *</label>
				<input type="text" name="name">
			</div>
			<div class="form-group">
				<label>URL *</label>
				<input type="text" name="url">
			</div>
			<div class="form-group">
				<label>Comments *</label>
				<textarea type="text" name="message"></textarea>
			</div>

			<input type="submit" class="button" name="submit" value="Submit">
		</form>
		<div class="result <?php	echo $msgClass; ?>">
			<p>	<?php	echo $name; ?></p>
			<p>	<?php	echo $url; ?></p>
			<p>	<?php	echo $message; ?></p>
		</div>
	</div>
	<br>
	<p id="footer">Made with ❤ in Berlin</p>
	<p id="footer">&copy; The Validator. All Rights Reserved.</p>
</body>
</html>
