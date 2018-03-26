<?php	
	$server = "localhost"; 
	$user = "root";	
	$wachtwoord = "root";
	$database = "a_bright_move";
	$query = "";

	$db = mysql_connect($server, $user, $wachtwoord);
	mysql_select_db($database);
	
	$email_to = "nigelverhoek@newman.nl";
    $email_subject = "A Bright Move - Aanmelding";
	
	function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
?>
<html lang="nl-nl">
<head>
  <title>A Bright Move</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
  <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
  <style>
  body {
      font: 400 15px cabin, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 30px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 20px;
      font-family: 'Crete Round', serif;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }  
  .jumbotron {
	  display: flex;
	  background-image: url("img/jumbotron2.png");
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center;
      background-color: #2ecc71;
      color: #fff;
	  height: 30vh;
      font-family: cabin, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f1f1f1;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #2ecc71;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #27ae60; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #27ae60;
      background-color: #fff !important;
      color: #27ae60;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #27ae60 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #27ae60;
      color: #fff;
  }
  .transparent{
	opacity: 0;
	transition: opacity 0.25s;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #27ae60;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Cabin, sans-serif;
	  transition: opacity 0.25s;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
      
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #27ae60 !important;
      background-color: #fff !important;
      transition: color 0.25s;
      transition: background-color 0.25s;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  #about{
      padding-bottom: 0;
  } 
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  .error {
	  color: #FF0000;
  }
  input.error, select.error{
	  border: 1px solid #FF0000;
	  color: #555;
	  background-color: #FFCCCC;
  }
  .date {
	  width: 31%;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (min-width: 768px) {
	.form-control {
	  max-width: 300px;
	}
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">A Bright Move</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html#about">OVER</a></li>
        <li><a href="index.html#aanbod">AANBOD</a></li>
        <li><a href="index.html#tarieven">TARIEVEN</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center"></div>

<?php
$voornaamErr = $achternaamErr = $voornaamOuderErr = $achternaamOuderErr = $emailErr = $termsErr = $geboorteErr = $telefoonErr = "";
$voornaam = $achternaam = $voornaamOuder = $achternaamOuder = $email = $telefoonnummer = $terms = $minor = $sendform = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["voornaam"])) {
    $voornaamErr = "vul een geldige voornaam in";
  } else {
    $voornaam = test_input($_POST["voornaam"]);
  }
  
  if (empty($_POST["achternaam"])) {
    $achternaamErr = "vul een geldige achternaam in";
  } else {
    $achternaam = test_input($_POST["achternaam"]);
  }
  
  if (empty($_POST["dag"]) || empty($_POST["maand"]) || empty($_POST["jaar"])) {
    $geboorteErr = "vul een geldige geboortedatum in";
  } else {
    $geboortedatum = test_input($_POST["dag"]) . "-" . test_input($_POST["maand"]) . "-" . test_input($_POST["jaar"]);
  }
  
  if (empty($_POST["voornaam-ouder"])) {
    $voornaamOuderErr = "vul een geldige voornaam in";
  } else {
    $voornaamOuder = test_input($_POST["voornaam-ouder"]);
  }
  
  if (empty($_POST["achternaam-ouder"])) {
    $achternaamOuderErr = "vul een geldige achternaam in";
  } else {
    $achternaamOuder = test_input($_POST["achternaam-ouder"]);
  }
  
  if (empty($_POST["email"])) {
	$emailErr = "vul een geldig e-mail adres in";
  } else {
	if(!ereg("^[A-Za-z0-9\.|-|_]*[@]{1}[A-Za-z0-9\.|-|_]*[.]{1}[a-z]{2,5}$", ($_POST["email"]))) { 
        $emailErr = "vul een geldig e-mail adres in";
    } else { 
		$email = test_input($_POST["email"]);
	}
  }
  
  if (empty($_POST["telefoonnummer"])) {
	$telefoonErr = "vul een geldig telefoonnummer in";
  } else {
	if(!ereg("^[0]{1}[0-9]{9}$", ($_POST["telefoonnummer"]))) { 
        $telefoonErr = "vul een geldig telefoonnummer in";
    } else { 
		$telefoonnummer = test_input($_POST["telefoonnummer"]);
	}
  }

  if (empty($_POST["voorwaarden"])) {
    $termsErr = "U moet akkoord gaan met de algemene voorwaarden";
  } else {
    $terms = test_input($_POST["voorwaarden"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="container-fluid">
	<a href="index.html">&laquo; Terug naar homepage</a>
	<h2>Inschrijving Sport- en inspanningsonderzoek</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>voornaam: </p>
			</div>
			<div class="col-sm-4 form-group">
				<input class="form-control <?php if(!empty($voornaamErr)){echo "error";} ?>" type="text" name="voornaam" value="<?php echo isset($_POST['voornaam']) ? $_POST['voornaam'] : '' ?>">
				<span class="error"><?php echo $voornaamErr;?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>achternaam: </p>
			</div>
			<div class="col-sm-4 form-group">
				<input class="form-control <?php if(!empty($achternaamErr)){echo "error";} ?>" type="text" name="achternaam" value="<?php echo isset($_POST['achternaam']) ? $_POST['achternaam'] : '' ?>">
				<span class="error"><?php echo $achternaamErr;?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<p>Geboortedatum wordt alleen gebruikt voor leeftijdsvalidatie.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>geboortedatum: </p>
			</div>
			<div class="col-sm-4 form-group" style="display: flex; justify-content: space-between; max-width: 330px;">
				<select class="form-control date <?php if(!empty($geboorteErr)){echo "error";} ?>" name="dag">
					<option value="<?php echo isset($_POST['dag']) ? $_POST['dag'] : '' ?>"><?php echo isset($_POST['dag']) ? $_POST['dag'] : 'Dag' ?></option>
						<?php for ($day = 1; $day <= 31; $day++) { ?>
							<option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>"><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
						<?php } ?>
				</select>
				<select class="form-control date <?php if(!empty($geboorteErr)){echo "error";} ?>" name="maand">
					<option value="<?php echo isset($_POST['maand']) ? $_POST['maand'] : '' ?>"><?php echo isset($_POST['maand']) ? $_POST['maand'] : 'Maand' ?></option>
						<?php for ($month = 1; $month <= 12; $month++) { ?>
							<option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>"><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
						<?php } ?>
				</select>
				<select class="form-control date <?php if(!empty($geboorteErr)){echo "error";} ?>" name="jaar">
					<option value="<?php echo isset($_POST['jaar']) ? $_POST['jaar'] : '' ?>"><?php echo isset($_POST['jaar']) ? $_POST['jaar'] : 'Jaar' ?></option>
						<?php for ($year = date('Y'); $year > date('Y')-100; $year--) { ?>
							<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
						<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 form-group">
			</div>
			<div class="col-sm-4 form-group">
				<span class="error"><?php echo $geboorteErr;?></span>
			</div>
		</div>
	    <?php if (time() < strtotime('+18 years', strtotime($geboortedatum))) { $minor = "ouder" ?>
			<div class="row">
				<div class="col-sm-8">
					<p>Voor jongeren onder de 18 jaar is het invullen van contactgegevens van ouders verplicht</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 form-group">
					<p>voornaam ouder: </p>
				</div>
				<div class="col-sm-4 form-group">
					<input class="form-control <?php if(!empty($voornaamOuderErr)){echo "error";} ?>" type="text" name="voornaam-ouder" value="<?php echo isset($_POST['voornaam-ouder']) ? $_POST['voornaam-ouder'] : '' ?>">
					<span class="error"><?php echo $voornaamOuderErr;?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 form-group">
					<p>achternaam ouder: </p>
				</div>
				<div class="col-sm-4 form-group">
					<input class="form-control <?php if(!empty($achternaamOuderErr)){echo "error";} ?>" type="text" name="achternaam-ouder" value="<?php echo isset($_POST['achternaam-ouder']) ? $_POST['achternaam-ouder'] : '' ?>">
					<span class="error"><?php echo $achternaamOuderErr;?></span>
				</div>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>e-mail <?php echo $minor;?>: </p>
			</div>
			<div class="col-sm-4 form-group">
				<input class="form-control <?php if(!empty($emailErr)){echo "error";} ?>" type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
				<span class="error"><?php echo $emailErr;?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>Telefoonnummer <?php echo $minor;?>: </p>
			</div>
			<div class="col-sm-4 form-group">
				<input class="form-control <?php if(!empty($telefoonErr)){echo "error";} ?>" type="text" name="telefoonnummer" value="<?php echo isset($_POST['telefoonnummer']) ? $_POST['telefoonnummer'] : '' ?>">
				<span class="error"><?php echo $telefoonErr;?></span>
			</div>
		</div>
		<input type="checkbox" id="voorwaarden" name="voorwaarden" <?php echo isset($_POST['voorwaarden']) ? 'checked' : '' ?>>
		<label for="voorwaarden">Ik ga akkoord met de <a href="doc/Algemene-voorwaarden.pdf" target="_blanc">algemene voorwaarden</a>.</label>
		<br>
		<span class="error"><?php echo $termsErr;?></span>
		<br>
		<input type="submit" name="submit" value="Verstuur">  
	</form>
</div>

<?php
if(!empty($voornaam) && !empty($achternaam) && !empty($geboortedatum) && !empty($telefoonnummer) && !empty($email) && $terms == "on"){
	if (time() < strtotime('+18 years', strtotime($geboortedatum))){ 
		if(!empty($voornaamOuder) && !empty($achternaamOuder)){
			$query = "INSERT leden (lidnr, voornaam, achternaam, email, telefoonnummer, voornaamOuder, achternaamOuder) "; 
			$query .= "VALUES ('', '";
			$query .= $voornaam . "', '";
			$query .= $achternaam . "', '";
			$query .= $email . "', '";
			$query .= $telefoonnummer . "', '";
			$query .= $voornaamOuder . "', '";
			$query .= $achternaamOuder . "')";
			
			$email_message = "Iemand heeft zich aangemeld via voor het Sport- en inspanningsonderzoek.\n\n";
			$email_message .= "Voornaam: ".clean_string($voornaam)."\n";
			$email_message .= "Achternaam: ".clean_string($achternaam)."\n\n";
			$email_message .= "Deze persoon is minderjarig.\n\n";
			$email_message .= "E-mail: ".clean_string($email)."\n";
			$email_message .= "Telefoonnummer: ".clean_string($telefoonnummer)."\n";
			$email_message .= "Voornaam ouder: ".clean_string($voornaamOuder)."\n";
			$email_message .= "Achternaam ouder: ".clean_string($achternaamOuder)."\n";
			
			$headers = 'From: '.$email."\r\n".
			'Reply-To: '.$email."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			mail($email_to, $email_subject, $email_message, $headers);
				
			if (!mysql_query($query)){
				echo "Er is een fout opgetreden met foutnummer " . mysql_errno() . " : " .  mysql_error();
				mysql_close($db);
				exit;
			} else {
				$query = "INSERT pakketten (lidnr, datum, pakket) "; 
				$query .= "VALUES ('" . mysql_insert_id() . "','"; 
				$query .= date("d-m-Y") . "',";
				$query .= "'Sport- en Inspanningsonderzoek')";
				
				if (!mysql_query($query)){
					echo "Er is een fout opgetreden met foutnummer " . mysql_errno() . " : " .  mysql_error();
					mysql_close($db);
					exit;
				} else {
					mysql_close($db);
					?><script>window.location = "bedankt.html"</script><?php
				}
			}
		}
	} else {
		$query = "INSERT leden (lidnr, voornaam, achternaam, email, telefoonnummer) "; 
		$query .= "VALUES ('', '";
		$query .= $voornaam . "', '";
		$query .= $achternaam . "', '";
		$query .= $email . "', '";
		$query .= $telefoonnummer . "')";
		
		$email_message = "Iemand heeft zich aangemeld via voor het Sport- en inspanningsonderzoek.\n\n";
		$email_message .= "Voornaam: ".clean_string($voornaam)."\n";
		$email_message .= "Achternaam: ".clean_string($achternaam)."\n\n";
		$email_message .= "E-mail: ".clean_string($email)."\n";
		$email_message .= "Telefoonnummer: ".clean_string($telefoonnummer)."\n";
		
		$headers = 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);
		
		if (!mysql_query($query)){
			echo "Er is een fout opgetreden met foutnummer " . mysql_errno() . " : " .  mysql_error();
			mysql_close($db);
			exit;
		} else {
			$query = "INSERT pakketten (lidnr, datum, pakket) "; 
			$query .= "VALUES ('" . mysql_insert_id() . "','"; 
			$query .= date("d-m-Y") . "',";
			$query .= "'Sport- en Inspanningsonderzoek')";
			
			if (!mysql_query($query)){
				echo "Er is een fout opgetreden met foutnummer " . mysql_errno() . " : " .  mysql_error();
				mysql_close($db);
				exit;
			} else {
				mysql_close($db);
				?><script>window.location = "bedankt.html"</script><?php
			}
		}
	}
}
?>

<footer class="container-fluid text-center bg-grey">
	<div class="row">
		<div class="col-sm-6">
			<a href="doc/Algemene-voorwaarden.pdf" style="color: #818181">Algemene Voorwaarden</a><br>
			<a href="#" style="color: #818181">Sport- en Inspanningsonderzoek</a><br>
			KvK nummer: 59704578
		</div>
		<div class="col-sm-6">
			Partners:<br>
			Sport Assistance Breda<br>
			De Fysiotherapeut Dierckx - Kessels<br>
			Ellen Steinmeijer - (sport)diëtist<br>
			Runnersworld Breda<br>
		</div>
	</div>
	&copy; 2017
	<script>new Date().getFullYear()>2017&&document.write("-"+new Date().getFullYear());
	</script>, A Bright Move by Jos Nous <br>RAMMN Development
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("#about a, .navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>