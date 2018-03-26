<?php	
	$server = "localhost"; 
	$user = "root";	
	$wachtwoord = "root";
	$database = "a_bright_move";
	$query = "SELECT leden.lidnr, leden.voornaam, leden.achternaam, pakketten.pakket, pakketten.datum, leden.email, leden.telefoonnummer, leden.voornaamOuder, leden.achternaamOuder FROM leden INNER JOIN pakketten ON leden.lidnr=pakketten.lidnr ORDER BY lidnr;";

	$db = mysql_connect($server, $user, $wachtwoord);
	mysql_select_db($database);
	$resultaat = mysql_query($query, $db);
	mysql_close($db);
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
  }
  h2 {
      font-size: 30px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 20px;
      font-family: 'Crete Round', serif;
  }
  th{
	  color: white;
	  line-height: 1.8;
	  padding: 2px 5px;
  }
  td{
	  line-height: 1.8;
	  padding: 2px 5px;
	  border-right: 1px solid #d8d8d8;
  }
  tr:nth-child(odd){
	  background-color: #f1f1f1;
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
  .item span {
      font-style: normal;
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

<table style="width: 100%; margin-top: 50px;">
	<tr style="background-color: #2ecc71">
		<th>Lidnummer</th>
		<th>Voornaam</th>
		<th>Achternaam</th>
		<th>Pakket</th>
		<th>Inschrijfdatum</th>
		<th>E-mail</th>
		<th>Telefoonnummer</th>
		<th>Voornaam Ouder</th>
		<th>Achternaam Ouder</th>
	</tr>
	<?php
	while(list($lidnr, $voornaam, $achternaam, $pakket, $datum, $email, $telefoonnummer, $voornaamOuder, $achternaamOuder) = mysql_fetch_row($resultaat)){
		echo "<tr><td>$lidnr</td><td>$voornaam</td><td>$achternaam</td><td>$pakket</td><td>$datum</td><td>$email</td><td>$telefoonnummer</td><td>$voornaamOuder</td><td>$achternaamOuder</td></tr>";
	}
	?>
</table>

<footer class="container-fluid text-center bg-grey">
	&copy; 2017
	<script>new Date().getFullYear()>2017&&document.write("-"+new Date().getFullYear());
	</script>, RAMMN Development
</footer>
</body>
</html>