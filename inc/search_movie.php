<?php

include_once 'db.php';

$dbh = connect_db('root', '');

$input_movie = $_POST['input_movie'];
$select_genre = $_POST['select_genre'];
$select_distrib = $_POST['select_distrib'];

$filter = '';

if ($select_genre == '%' && $select_distrib != '%') {
	$filter = "AND (genre.id_genre LIKE '$select_genre'
		OR genre.id_genre IS NULL)
		AND distrib.id_distrib LIKE '$select_distrib'";
} elseif ($select_genre != '%' && $select_distrib == '%') {
	$filter = "AND genre.id_genre LIKE '$select_genre'
		AND (distrib.id_distrib LIKE '$select_distrib'
		OR distrib.id_distrib IS NULL)";
} elseif ($select_genre != '%' && $select_distrib != '%') {
	$filter = "AND genre.id_genre LIKE '$select_genre'
		AND distrib.id_distrib LIKE '$select_distrib'";
}

$sql = "SELECT film.id_film, film.titre FROM film
		LEFT JOIN genre ON film.id_genre = genre.id_genre
		LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib
		WHERE film.titre LIKE '%$input_movie%' $filter
		ORDER BY film.titre ASC;";
$request = $dbh->query($sql);
$result = $request->fetchAll(PDO::FETCH_ASSOC);

session_start();
$_SESSION['input_movie'] = $result;
$dbh = null;
header('Location:../index.php');