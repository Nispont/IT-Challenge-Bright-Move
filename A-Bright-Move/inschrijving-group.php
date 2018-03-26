<?php	
	$server = "localhost"; 
	$user = "root";	
	$wachtwoord = "root";
	$database = "a_bright_move";
	$query = "";

	$db = mysql_connect($server, $user, $wachtwoord);
	mysql_select_db($database);
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

<div class="container-fluid">
	<a href="index.html">&laquo; Terug naar homepage</a>
	<h2>Inschrijving Small Group Training</h2>
	<form method="get" action="inschrijving-group-2.php">
		<div class="row">
			<div class="col-sm-2 form-group">
				<p>Aantal aanmeldingen: </p>
			</div>
			<div class="col-sm-4 form-group" style="display: flex; justify-content: space-between; max-width: 330px;">
				<select class="form-control date" name="aantal">
					<option value="1">1</option>
						<?php for ($aantal = 2; $aantal <= 4; $aantal++) { ?>
							<option value="<?php echo strlen($aantal)==1 ? $aantal : $aantal; ?>"><?php echo strlen($aantal)==1 ? $aantal : $aantal; ?></option>
						<?php } ?>
				</select>
			</div>
		</div>
		<input type="submit" name="submit" value="Verstuur">  
	</form>
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