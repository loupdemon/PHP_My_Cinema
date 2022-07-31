<?php
	session_start();
	include_once 'inc/select.php';
	include_once 'inc/result.php';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>PHP my cinema - Accueil</title>
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
		<h1 class="text-center">PHP MY CINEMA</h1>
		<button class="btn btn-info drop-down_btn" type="button">Rechercher un film</button>
		<div class="drop-down">
			<form method="post" action="inc/search_movie.php">
				<div class="form-group">
					<label for="input_movie">Film</label>
					<input class="form-control" id="input_movie" type="text" name="input_movie" placeholder="Entrer un film" />
					<p class="help-block">Ex. "star" ou "wars" ou "star wars"</p>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-3">
							<label for="select_genre">Genre</label>
							<select class="form-control" id="select_genre" name="select_genre">
								<option value="%">- Sélectionner un genre -</option>
								<?php select_genre(); ?>
							</select>
						</div>
						<div class="form-group">
							<div class="col-xs-4">
								<label for="select_distrib">Distributeur</label>
								<select class="form-control" id="select_distrib" name="select_distrib">
									<option value="%">- Sélectionner un distributeur -</option>
									<?php select_distrib(); ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Chercher</button>
			</form>
		</div>
		<button class="btn btn-info drop-down_btn" type="button">Rechercher un membre</button>
		<div class="drop-down">
			<form method="post" action="inc/search_member.php">
				<div class="form-group">
					<label for="input_member">Membre</label>
					<input class="form-control" id="input_member" type="text" name="input_member" placeholder="Entrer le nom et/ou le prénom d'un membre sans caractères spéciaux ni accents" required />
					<p class="help-block"> Ex. "durand jean" ou "jean durand"</p>
				</div>
				<button class="btn btn-primary" type="submit">Chercher</button>
			</form>
		</div>
		<?php
			result_movie();
			result_member();
		?>
		</div>
		<script src="assets/js/app.js"></script>
	</body>
</html>
<?php session_destroy(); ?>
