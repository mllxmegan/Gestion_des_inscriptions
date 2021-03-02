<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jeux de cartes</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

	<?php require 'remember_traitement.php'; ?>

<div class="big-container">
	<div class="container">
		<div class="inner-container">
			<h1 class="big_title">Château de cartes</h1>
		</div>
		<!--succed messages-->
		<?php if(isset($_SESSION['message'])): ?>
		<?php 
			echo "<div class='alert-table alert-table-reinitialisation'>" . $_SESSION['message'] . "<a href='../index.php'><p class='connectez-vous'><br/>Connectez-vous</p></a></div>";
			unset($_SESSION['message']);
		?>
		<?php endif; ?>
		<!--error messages-->
		<?php if(!empty($errors)): ?>
			<div class="alert">
				<p><b>Une ou plusieurs erreurs ont été rencontrées :</b></p>
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
      <img src="../assets/img/card-game.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
	<h2>Réinitialisation par mail</h2>
        
		<input type="text" id="email" class="fadeIn second" name="email" placeholder="Saisir votre email">
	    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Saisir votre nouveau mot de passe">
        <input type="password" id="password" class="fadeIn third" name="confirm_password" placeholder="Confirmer le mot de passe">
    </form>
    <a href="../index.php"><button class="subscribe subscribe-create-absolute"><i class="fas fa-arrow-left"></i> Retour au formulaire</button></a>
    <div>
				<?php
					echo "<a href='remember.php?reinitialiser='><button type='submit' class='subscribe' name='update'>Confirmer</button></a>"
				?>
				</div>

    
  </div>
</div>
</div>
</div>
</body>
</html>