<?php

function result_movie() {
	if (isset($_SESSION['input_movie'])) {
		$result_count = count($_SESSION['input_movie']);
		echo "<h3><strong>Résultats</strong></h3>";
		
		if (!count($_SESSION['input_movie'])) {
			echo "Aucun résultat n'a été trouvé.";
		} else {
			echo "$result_count film(s) trouvé(s)";
			echo "<table class='table table-striped'><tr><th>Film(s)</th></tr>";
			
			foreach ($_SESSION['input_movie'] as $movie) {
				$id = $movie['id_film'];
				echo "<tr><td><a href='pages/card_movie.php?id=$id' "
					. "target='_blank'>{$movie['titre']}</a></td></tr>";
			}
			
			echo "</table>";
		}
	}
}

function result_member() {
	if (isset($_SESSION['input_member'])) {
		$result_count = count($_SESSION['input_member']);
		echo "<h3><strong>Résultats</strong></h3>";
		
		if (!count($_SESSION['input_member'])) {
			echo 'Aucun résultat n\'a été trouvé.';
		} else {
			echo $result_count . ' membre(s) trouvé(s)';
			echo "<table class='table table-striped'><tr><th>Membre(s)</th>"
				. "</tr>";
			
			foreach ($_SESSION['input_member'] as $member) {
				$id = $member['id_perso'];
				$last_name = strtoupper($member['nom']);
				$first_name = ucfirst($member['prenom']);
				echo "<tr><td><a href='pages/card_member.php?id=$id' "
				. "target='_blank'>$last_name $first_name</a></td></tr>";
			}
			
			echo "</table>";
		}
	}
}