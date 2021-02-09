<head>
	<style>

	@import url('https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro:200,400');

    body {
      margin:0;
      padding:0;
      display:grid;

    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
      }

      p, a {
        font-family: 'Source Sans Pro', sans-serif;
      }

      html {
        scroll-behavior: smooth;
      }

      a {

        text-decoration: none;
        color: black;
        border-radius: .25rem;
        text-align: center;
        display: inline-block;
        transition: all .3s;
      }

      a:hover {
        opacity: .6;
      }

			a.news_anmeldung {
			  display: block;
			  text-align: center;
			  padding-top:50px;
			  padding-bottom: 50px;
			  font-style: normal;
			  font-size: 25px;
			  color: #A174AC;
			}
			.form {
			  display: block;
			  text-align: center;
			  margin-top: 3%;
			}

			.form-group label{
			  display: block;
			  padding-top: 15px;
			  padding-bottom:10px;
			  color: #569094;
			  font-size: 18px;
			  margin-left: 29.4%;
			  text-align: left;
			}

			.form-group input[type="text"],  .form-group [type="email"] {
			  width: 40%;
			  padding:7px;
			  margin-bottom: 20px;
			  height: 25px;
			  font-size: 25px;
			}

			.checkbox label{
			  padding-top:7px;
			  font-size: 15px;
			  letter-spacing: 0.06em;
			  color: slategrey;

			}

			.form-group input[type="submit"] {
				text-align: center;
				margin-top: 25px;
				background-color: #569094;
				color: whitesmoke;
				border: none;
				border-radius: 4px;
				padding: 12px 20px;
				font-size: 17px;
			}

			.checkbox input[type="submit"]:hover {
				opacity: .6;
			}

			.form-group input[type="date"], {
				size: 25px;
			}

			.form-group select[name="titel"] {
				width: 40%;
				font-size: 18px;
			  margin-bottom: 20px;
			  height: 30px;
				color: #569094;
				font-family: 'Playfair Display', serif;
			}

			.form-group2 label {
				text-align: center;
				color: #569094;
			  font-size: 18px;
			}

			.alert{
				background-color: purple;
				padding: 10px;
				font-size: 1.1em;
				text-align: center;
			}

			.danger_email {
				background-color: gold;
				color: whitesmoke;
			}

			.agb_false {
				background-color: violet;
				color: whitesmoke;
			}

			.danger {
				background-color: #a74a4a;
				color: whitesmoke;
			}

			.success {
				background-color: #00897b;
				color: whitesmoke;
			}

			.result {
				padding: 10px;
				background-color: #569094;
				color: white;
				text-align: center;
			}

      </style>
</head>
<main>
	<div id="container">
		<?php if ($msg !== ''):?>
			<div class="alert <?php echo $msgClass;?>">
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>
		<form class="form" method="POST" action=" <?php echo $_SERVER['PHP_SELF'];?>">
			<div class="form-group">
				<label>Vorname *</label>
				<input type="text" name="vorname" value="<?php echo isset($POST['vorname']) ? $vorname : '';?>">
			</div>
			<div class="form-group">
				<label>Nachname *</label>
				<input type="text" name="nachname" value="<?php echo isset($POST['nachname']) ? $nachname : '';?>">
			</div>
			<div class="form-group">
				<label>E-Mail *</label>
				<input type="text" name="email" value="<?php echo isset($POST['email']) ? $email : '';?>">
			</div>
			<div class="form-group">
				<label>Anrede</label>
				<select name="titel">
					<option value="Herr">Herr</option>  <!-- ($_POST['titel'] == Herr)? "selected":""; ?>-->
					<option value="Frau">Frau</option>
					<option value="Divers">Divers</option>
					<option selected disabled value="">Bitte auswählen</option>
				</select>
			</div>
			<div class="form-group2">
				<label>Geburtstag</label>
				<input type="date" name="gebTag" value=" <?php echo date('d-m-Y');?>">
				<br>
				<br>
			</div>
			<div class="form-group2">
				<label>Häufigkeit</label>
				<input type="radio" name="auswahl" value="woechentlich"> Wöchentlich
				<input checked type="radio" name="auswahl" value="monatlich"> Monatlich
				<input type="radio" name="auswahl" value="dreimonatlich"> Dreimonatlich
				<br>
				<br>
				<br>
			</div>
			<div class="checkbox">
				<input type="checkbox" id="vehicle1" name="agb" value="true"> <!--($_POST['agb'] === true)? "selected":""; -->
				<label for="vehicle1"> Ich akzeptiere die Nutzungbedingungen und habe die Datenschutzerklärung gelesen.</label><br><br>
				<input type="checkbox" id="vehicle2" name="abonnement" value="ja">
				<label for="vehicle2"> Ich möchte den Newsletter abonnieren.</label><br><br>
				<input type="checkbox" id="vehicle3" name="mensch" value="ja">
				<label for="vehicle3"> Ich bin kein Roboter oder etwas Ähnliches.</label><br><br>
			</div>
			<div class="form-group">
				<input type="submit" class="button" name="submit" value="Abschicken"><br><br><br><br><br>
			</div>
		</form>
	</div>
