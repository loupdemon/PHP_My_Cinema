<?php

include_once 'db.php';

$dbh = connect_db('root', '');
$id = $_GET['id'];

$sql = "SELECT * FROM fiche_personne WHERE id_perso = $id;";
$request = $dbh->query($sql);
$member = $request->fetch(PDO::FETCH_ASSOC);

$first_name = strtoupper($member['nom']);
$last_name = ucfirst($member['prenom']);
$birthdate = date('d/m/Y', strtotime($member['date_naissance']));

$dbh = null;