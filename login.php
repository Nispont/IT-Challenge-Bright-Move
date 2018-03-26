<?php
session_start();
	
$server = "localhost"; 
$user = "root";	
$wachtwoord = "root";
$database = "a_bright_move";
$query = "";

$db = mysqli_connect($server, $user, $wachtwoord, $database);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
	if (isset($_POST['submit'])){
		$uid = mysqli_real_escape_string($db, $_POST['uid']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);
		
		if (empty($uid) || empty($pass)){
			header("Location: login.html?login=empty");
			exit();
		} else {
			$query = "SELECT * FROM accounts WHERE username='$uid'";
			$resultaat = mysqli_query($db, $query);
			$resultaatCheck = mysqli_num_rows($resultaat);
			
			if($resultaatCheck < 1){
				header("Location: login.html?login=no-user");
				exit();
			} else {
				if($row = mysqli_fetch_assoc($resultaat)){
					if($pass == $row['password']){
						$_SESSION['account_id'] = $row['accountid'];
						$_SESSION['username'] = $row['username'];
						header("Location: inschrijvingen.php");
						exit();
					} else {
						header("Location: login.html?login=wrong-pass");
						exit();
					}
				}
			}
		}
	} else {
		header("Location: login.html?login=not-posted");
		exit();
	}
}


