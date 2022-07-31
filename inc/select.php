<?php

include_once 'db.php';

function select_genre() {
	$dbh = connect_db('root', '');

	$sql = "SELECT id_genre, nom FROM genre ORDER BY nom ASC;";
	$request = $dbh->query($sql);
	$result = $request->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $genre) {
		$id = $genre['id_genre'];
		$genre_name = ucfirst($genre['nom']);
		echo "<option value='$id'>$genre_name</option>";
	}

	$dbh = null;
}

function select_distrib() {
	$dbh = connect_db('root', '');

	$sql = "SELECT id_distrib, nom FROM distrib ORDER BY nom ASC;";
	$request = $dbh->query($sql);
	$result = $request->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $distrib) {
		$id = $distrib['id_distrib'];
		$distrib_name = strtoupper($distrib['nom']);
		echo "<option value='$id'>$distrib_name</option>";
	}

	$dbh = null;
}