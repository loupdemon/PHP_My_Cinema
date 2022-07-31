<?php include '../inc/display_movie.php'; ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>PHP my cinema - Film</title>
		<link href="../assets/css/style.css" rel="stylesheet" />
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">PHP MY CINEMA</h1>
			<h3>
				<strong>Fiche film</strong>
			</h3>
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<td><?php echo $result['id_film']; ?></td>
				</tr>
				<tr>
					<th>Titre</th>
					<td><?php echo $result['titre']; ?></td>
				</tr>
				<tr>
					<th>Durée</th>
					<td><?php echo "{$result['duree_min']} min"; ?></td>
				</tr>
				<tr>
					<th>Année</th>
					<td><?php echo $result['annee_prod']; ?></td>
				</tr>
				<tr>
					<th>Genre</th>
					<td><?php echo $genre; ?></td>
				</tr>
				<tr>
					<th>Distributeur</th>
					<td>
						<ul>
							<li>Nom : <?php echo $distrib_name; ?></li>
							<li>Téléphone : <?php echo $distrib_phone; ?></li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>Résumé</th>
					<td><?php echo $result['resum']; ?></td>
				</tr>
			</table>
		</div>
	</body>
</html>
