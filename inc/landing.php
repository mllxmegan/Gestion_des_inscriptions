<?php 
	session_start(); 
	if(!isset($_SESSION['auth'])){
		header('Location: ../index.php');
		exit();
	}
?>

<?php require "landing_traitement.php" ?>

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
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Espace membre</title>
</head>
<body>
<div class="big-container">
<div class="inner-container landing-inner-container">
	<h1 class="big_title">Château de cartes</h1>
	
	<?php if(!empty($errors) && ($update == false) && ($delete = false)): ?>
		<div class="alert">
			<p><b>Les informations entrées ne sont pas valides</b></p>
			<ul>
				<?php foreach ($errors as $error): ?>
						<li><i class="fas fa-times-circle favicon-error"></i><?= $error; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
</div>


<!--formulaire-->

<?php if($delete == true): ?>

<!--message de succès pour la suppression de profil-->
<?php if(isset($_SESSION['delete'])): ?>
	<?php if($delete == true): ?>
		<?php 
			echo "<div class='alert-table'><a href='landing.php'><button class='subscribe subscribe-delete-absolute'><i class='fas fa-arrow-left'></i> Retour</button></a>" . $_SESSION['delete'] . "</div>";
			unset($_SESSION['delete']);
		?>
	<?php endif; ?>
<?php endif; ?>

<!--formulaire de création de profil-->
<?php else: ?>

	<div class="container-management">
	
            <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../assets/img/card-game.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
	
	<?php if($update == true): ?>
					<h2 class="landing-h2">Editer un utilisateur</h2>
				<?php else: ?>
					<h2 class="landing-h2">Créer un utilisateur</h2>
				<?php endif; ?>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="text" id="nom" class="fadeIn second" name="nom" placeholder="Saisir votre nom" value="<?php echo $nom; ?>" >
		<input type="text" id="prenom" class="fadeIn second" name="prenom" placeholder="Saisir votre prenom" value="<?php echo $prenom; ?>" >
      <input type="text" id="login" class="fadeIn second" name="pseudo" placeholder="Saisir le pseudo" value="<?php echo $pseudo; ?>" >
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Saisir votre email" value="<?php echo $email; ?>" >
	  <input type="password" id="password" class="fadeIn third" name="password" placeholder="Saisir un mot de passe" value="<?php echo $password; ?>" >
	<div>		
	<?php if($update == true): ?>
							<button type="submit" class="subscribe" name="update">Editer <i class='fas fa-user-edit'></i></button>
						<?php else: ?>
							<button type="submit" class="subscribe subscribe-create" name ="create">Créer <i class="fas fa-user-plus fav-creer"></i></button>
						<?php endif; ?>
	  </div>	
    </form>
	<?php if($update == true): ?>
				<a href="landing.php"><button class="subscribe subscribe-create-absolute"><i class="fas fa-arrow-left"></i> Retour</button></a>
			<?php endif; ?>
</div>
<div class="already-subscribed">
	<a href="deconnexion.php"><button class="subscribe deco_button">Déconnexion <i class="fas fa-sign-out-alt"></i></button></a>
</div>
</div>
</div>
	
</div>
<?php endif; ?>


<!--message de succès pour edition, création de profil-->
<?php if(isset($_SESSION['message'])): ?>
	<?php 
		echo "<div class='alert-table'>" . $_SESSION['message'] . "</div>";
		unset($_SESSION['message']);
	?>
<?php endif; ?>

<?php if(($delete == false) && ($update == false)): ?>
<!--tableau grand format-->
<div class="container-table big-screen">
	<table>
		<tr>
			<th colspan="8" class="stats">
				<h3>Gestion des inscriptions</h3>
			</th>
		</tr>
		<tr>
			<th>ID</th>
			<th>E-mail</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Date d'inscription</th>
			<th>Editer/Supprimer</th>
		</tr>
		<?php while($row = $stmtphone->fetch(PDO::FETCH_ASSOC)) : ?>
			<?php 
				echo
					"<tr>
						<td>
							<span class='result'>" . ($row['id']) . 
							"</span>
						</td>

						<td>
						<span class='result'>" . ($row['prenom']) . 
						"</span>
					</td>
					<td>
						<span class='result'>" . ($row['nom']) . 
						"</span>
					</td>
						
						<td>
							<span class='result'>" . ($row['email']) . 
							"</span>
						</td>

						<td>
						<span class='result'>" . ($row['date_inscription']) . 
						"</span>
					</td>
						
						<td>
							<a href=landing.php?edit=" . $row['id'] . ">
							<button class='edit' name='edit'>Editer <i class='fas fa-pencil-alt'></i></button></a>
							<a href=landing.php?delete=" . $row['id'] . ">
							<button class='delete' name='delete'>Supprimer <i class='fas fa-trash-alt'></i></button></a>
						</td>
					</tr>";
			?>
		<?php endwhile; ?>
	</table>
</div>

<!--tableau mobiles-->
<div class="container-table little-screen">
	<table>
		<tr>
			<th colspan='7' class='stats'>
				<h3>Inscriptions membres</h3>
			</th>
		</tr>
		<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
				<?php 
					echo
						"<tr>
							<td>
								<span class='result'>Membre n°" . ($row['id']) . 
								"</span>
							</td>
						</tr>

							<tr>
							<td>
								<span class='result'>Prénom :" . ($row['prenom']) . 
								"</span>
							</td>
						</tr>
						<tr>
							<td>
								<span class='result'>Nom : " . ($row['nom']) . 
								"</span>
							</td>
						</tr>
						<tr>
						
						<tr>
							<td>
								<span class='result'>E-mail : " . ($row['email']) . 
								"</span>
							</td>
						</tr>
						<tr>
							<td>
								<span class='result'>Inscrit le : " . ($row['date_inscription']) . 
								"</span>
							</td>
						</tr>
						<tr>
							<td>
								<a href=landing.php?edit=" . $row['id'] . ">
								<button class='edit' name='edit'>Editer <i class='fas fa-pencil-alt'></i></button></a>
								<a href=landing.php?delete=" . $row['id'] . ">
								<button class='delete' name='delete'>Supprimer <i class='fas fa-trash-alt'></i></button></a>
							</td>
						</tr>";
				?>
			<?php endwhile; ?>
	</table>
</div>
</div>
<?php endif; ?>
</body>
</html>