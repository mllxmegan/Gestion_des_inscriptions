<?php require "connexion-traitement.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeux de cartes</title>
  <script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="big-container">
  <div class="container">
    <div class="inner-container">
      <h1>Château de cartes</h1>
    </div>
    <?php if(!empty($errors)): ?>
      <div class="alert">
        <p><b>Il semblerait que l'identification ait échouée</b></p>
        <ul>
          <?php foreach ($errors as $error): ?>
              <li><i class="fas fa-times-circle favicon-error"></i><?= $error; ?></li>
          <?php endforeach; ?>
        </ul>
        <p><a href="inscription.php">Je veux m'inscrire</a></p>
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