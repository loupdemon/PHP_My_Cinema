<?php

function connect_db($user, $pass) {
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=epitech_tp', $user,
			$pass);
		return $dbh;
	} catch (Exception $e) {
		die("Une erreur s'est produite. Veuillez contacter " .
			"votre administrateur.");
	}
}