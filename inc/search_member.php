<?php

include_once 'db.php';

$dbh = connect_db('root', '');

$input_search_member = $_POST['input_member'];

$last_name = strtok($input_search_member, ' ');
$first_name = strrev($input_search_member);
$first_name = strtok($first_name, ' ');
$first_name = strrev($first_name);

$sql = "SELECT id_perso, nom, prenom FROM fiche_personne
		WHERE (nom LIKE '$input_search_member' OR prenom LIKE '$input_search_member')
			OR (nom LIKE '$last_name' AND prenom LIKE '$first_name')
			OR (nom LIKE '$first_name' AND prenom LIKE '$last_name')
		ORDER BY nom ASC;";
$request = $dbh->query($sql);
$result = $request->fetchAll(PDO::FETCH_ASSOC);

session_start();
$_SESSION['input_member'] = $result;
$dbh = null;
header('Location:../index.php');