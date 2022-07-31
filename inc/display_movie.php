<?php

include_once 'db.php';

$dbh = connect_db('root', '');
$id = $_GET['id'];

$sql = "SELECT film.*, genre.id_genre, genre.nom AS genre_nom,
			distrib.nom AS distrib_nom, distrib.telephone
		FROM film
		LEFT JOIN genre ON genre.id_genre = film.id_genre
		LEFT JOIN distrib ON distrib.id_distrib = film.id_distrib
		WHERE id_film = $id;";
$request = $dbh->query($sql);
$result = $request->fetch(PDO::FETCH_ASSOC);

$distrib_name = 'Aucun';
$distrib_phone = 'Aucun';
$genre = ucfirst($result['genre_nom']);

if ($result['distrib_nom'] != null) {
	$distrib_name = strtoupper($result['distrib_nom']);
	$distrib_phone = preg_replace('#(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})#',
		'$1 $2 $3 $4 $5', $result['telephone']);
}

$dbh = null;