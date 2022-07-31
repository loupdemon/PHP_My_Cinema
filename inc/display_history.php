<?php

include_once 'db.php';

function display_history() {
	$dbh = connect_db('root', '');
	$id = $_GET['id'];

	$sql = "SELECT film.id_film, film.titre, historique_membre.date FROM film
			LEFT JOIN historique_membre ON film.id_film = historique_membre.id_film
			LEFT JOIN membre ON historique_membre.id_membre = membre.id_membre
			LEFT JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso
			WHERE film.id_film = historique_membre.id_film AND fiche_personne.id_perso = $id
			ORDER BY historique_membre.date DESC;";
	$request = $dbh->query($sql);
	$result = $request->fetchAll(PDO::FETCH_ASSOC);

	echo "<table class='table table-striped'><tr><th>Films</th>
		<th>Date</th></tr>";

	foreach ($result as $history) {
		$id = $history['id_film'];
		$date = strtotime($history['date']);
		$date = date('d/m/Y', $date);
		echo "<tr><td><a href='card_movie.php?id=$id' target='_blank'>
			{$history['titre']}</a></td><td>$date</td></tr>";
	}

	echo "</table>";
	$dbh = null;
}