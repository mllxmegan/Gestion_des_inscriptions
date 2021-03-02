<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Espace membre-Chateau de cartes</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php require 'inc/connexion_traitement.php'; ?>
<div class="big-container">
	<div class="container">
		<div class="inner-container">
			<h1 class="big_title">Château de cartes</h1>
		</div>
    <?php if(!empty($errors)): ?>
			<div class="alert">
				<p><b>Votre identifiant ou votre mot de passe est incorrect</b></p>
				<ul>
					<?php foreach ($errors as $error): ?>
							<li><i class="fas fa-times-circle favicon-error"></i><?= $error; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>
<div class="container">
            <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="assets/img/card-game.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="pseudo" placeholder="Votre pseudo">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Votre mot de passe">
      <input type="submit" class="fadeIn fourth" value="Se connecter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="inc/remember.php?reinitialiser=">Mot de passe oublié ?</a>
    </div>
<div class="already-subscribed">
				<p>Pas encore inscrit ?</p>
				<a href="inc/inscription.php"><input type="button" value="Je m'inscris"></a>
			</div>
  </div>
</div>
</div>
</div>
	
</body>
</html>