<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nigelverhoek@newman.nl";
    $email_subject = "A Bright Move - Contactaanvraag";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('Er blijkt een probleem te zijn met de door u ingevulde waarden.');       
    }
 
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het ingevulde e-mail adres is ongeldig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'De ingevulde naam is ongeldig.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Het ingevulde bericht is ongeldig.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Hieronder de waarden van het contactformulier.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Naam: ".clean_string($name)."\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Bericht: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
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
  .logo {
      color: #2ecc71;
      font-size: 200px;
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

<div class="container-fluid text-center">
	<h2>Bedankt voor je contactaanvraag</h2>
	<p>We nemen zo snel mogelijk contact met je op.</p>
	<p><a href="index.html">&laquo; Terug naar de home pagina</a></p>
</div>

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
 
<?php
 
}
?>