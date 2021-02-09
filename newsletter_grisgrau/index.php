<?php
  include('inc/header.php');

  	$msg = '';
  	$msgClass = '';
  	$vorname = '';
  	$nachname = '';
  	$email = '';
    $agb = '';
    $titel = '';

  	if(isset($_POST['submit'])){

  		$vorname = htmlspecialchars($_POST['vorname']);
  		$nachname = htmlspecialchars($_POST['nachname']);
  		$email = htmlspecialchars($_POST['email']);

      // hier: if isset..// else
    // problem: das feld ist nicht immer gesetzt. => hier vor der wertzuweisung eine prüfung mit if isset'agb'..

      if(isset($_POST['agb'])){
        $agb = htmlspecialchars($_POST['agb']);

        if(isset($_POST['titel'])){
          $titel = htmlspecialchars($_POST['titel']);
          
      		if (!empty($vorname) && !empty($nachname) && !empty($email) && !empty($_POST['agb']) && !empty($_POST['titel'])){

      			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

      				$msg = 'Bitte überprüfen Sie die Email Adresse.';
      				$msgClass = 'danger_email';

            } elseif ($_POST['agb'] === false) {

              $msg = 'Bitte akzeptieren die Nutzungbedingungen und lesen die Datenschutzerklärung.';
              $msgClass = 'danger_email';

            } else {

      				$msg = 'Vielen Dank. Ihre Nachricht wurde abgeschickt!';
      				$msgClass = 'success';


      				$vorname = '';
      				$nachname = '';
      				$email = '';
              $agb = '';
              $titel = '';
            }
    			}
        }
      }else{

    			$msg = 'Bitte alle Felder ausfüllen.';
    			$msgClass = 'danger';

      }
    }
?>
<?php   include('inc/navbar.php'); ?>
<?php   include('inc/main.php'); ?>
<div class="result <?php	echo $msgClass; ?>">
	<p>	<?php	echo $vorname; ?></p>
	<p>	<?php	echo $nachname; ?></p>
	<p>	<?php	echo $email; ?></p>
	<p>	<?php	echo $agb; ?></p>
  <p>	<?php	echo $titel; ?></p>
</div>
</form>
</main>
<?php   include('inc/footer.php'); ?>
