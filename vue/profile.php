<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vue/prof.css">
	<title>SA-ROILLE</title>
</head>
<body>

<?php
require_once('header.php');
?>


<?php
	//vérification dans la base 
			$chaine ="*"; 
			$where =array("iduser"=>$_SESSION['iduser']);
			$unControleur->setTable ("user"); 
			$unUser = $unControleur->selectWhere($chaine, $where); 
?>


<section class="ContainerProfile">
	<div class="iconProf">
		<i class="fas fa-user-tie"></i>
	</div>

	<div class="InfoProf">
		<form method="POST">
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value=<?php echo
				$unUser["nom"]?> >
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom"  value=<?php echo
				$unUser["prenom"]?>>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="adresse">Adresse</label>
				<input type="text" name="adresse" id="adresse"  value='<?php echo
				$unUser["adresse"]?>'>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="cp">Code Postale</label>
				<input type="number" name="cp" id="cp"  value= <?php echo
				$unUser["cp"]?>>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="ville">Ville</label>
				<input type="text" name="ville" id="ville"  value=<?php echo
				$unUser["ville"]?> >
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email"  value=<?php echo
				$unUser["email"]?> >
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="mdp">Mot De Passe</label>
				<input type="text" name="mdp" id="mdp">
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="tel">Téléphone</label>
				<input type="text" name="tel" id="tel"  value=<?php echo
				$unUser["tel"]?>>
				<i class="fas fa-pen"></i>
		</div>

		 <div><button>Valider</button></div>
		</form>
	</div><div>
</section>
</body>
</html>