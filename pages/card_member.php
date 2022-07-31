<?php
	include '../inc/display_member.php';
	include '../inc/display_history.php';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>PHP my cinema - Membre</title>
		<link href="../assets/css/style.css" rel="stylesheet" />
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">PHP MY CINEMA</h1>
			<h3>
				<strong>Fiche membre</strong>
			</h3>
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<td><?php echo $member['id_perso']; ?></td>
				</tr>
				<tr>
					<th>Nom</th>
					<td><?php echo $first_name; ?></td>
				</tr>
				<tr>
					<th>Prénom</th>
					<td><?php echo $last_name; ?></td>
				</tr>
				<tr>
					<th>Date de naissance</th>
					<td>
						<?php echo $birthdate; ?>
					</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td><?php echo $member['email']; ?></td>
				</tr>
				<tr>
					<th>Adresse</th>
					<td><?php echo "{$member['cpostal']} {$member['ville']}"; ?></td>
				</tr>
			</table>
			<button class="btn btn-info drop-down_btn" type="button">Afficher l'historique</button>
			<div class="drop-down">
				<?php display_history(); ?>
			</div>
		</div>
		<script src="../assets/js/app.js"></script>
	</body>
</html>
