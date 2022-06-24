<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Start session
    session_start();
	
	# Database connection
	include ("dbconn.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>LOGO</title>
	</head>
<body>
	<header>
		<div class="header_inner">
			<a href="index.php"><img class="hero-image" src="img/banner1.png" alt="Logo"> </a>
	  	</div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	# Homepage
	if (!isset($menu) || $menu == 1) { include("news.php"); }
	
	# News
	else if ($menu == 2) { include("news.php"); }
	else if ($menu == 12) { include("travel.php"); }
	# Contact
	else if ($menu == 3) { include("kontakt.php"); }
	
	# About us
	else if ($menu == 4) { include("o_nama.php"); }
	
	# Signin
	else if ($menu == 6) { include("signin.php"); }
	
	# Admin webpage
	else if ($menu == 7) { include("admin.php"); }
	
	# API HMB
	else if ($menu == 11) { include("admin/hnb-json.php"); }
	else if ($menu == 13) { include("omdb.php"); }
	
	
	
	print '
	</main>
</body>
</html>';
?>
