<?php 
	print '
	<ul>
		<li><a href="index.php?menu=1">Početna</a></li>
		<li><a href="index.php?menu=4">O nama</a></li>
		<li><a href="index.php?menu=3">Kontakt</a></li>
		<li><a href="index.php?menu=11">HNB tečajna lista</a></li>';
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
			print '
			<li class="li_right"><a href="index.php?menu=6">Prijava</a></li>';
		}
		else if ($_SESSION['user']['valid'] == 'true') {
			print '
			<li class="li_right"><a href="signout.php">Odjava</a></li>
			<li class="li_right"><a href="index.php?menu=7">Admin</a></li>
			';
		}
		print '
		
		
	</ul>';
?>