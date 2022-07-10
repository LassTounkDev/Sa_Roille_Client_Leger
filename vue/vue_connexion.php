<?php
if (isset($_POST['SeConnecter']))
		{
			$chaine=array("'", '"', "<", ">");
			$email=str_replace($chaine, "", $_POST["email"]);
			$mdp=str_replace($chaine, "", $_POST["mdp"]);
           


			//vérification dans la base 
			$chaine ="*"; 
			$where =array("email"=>$email, "mdp"=>$mdp);
			$unControleur->setTable ("user"); 
			$unUser = $unControleur->selectWhere($chaine, $where); 

			if (isset($unUser['email'])){
				$_SESSION['email'] = $unUser['email']; 
				$_SESSION['iduser'] = $unUser['iduser']; 
				$_SESSION['mdp'] = $unUser['mdp'];
				//bienvenue en JS 
				header("Location: index.php?page=2");
			}else{

				echo "<script>alert ('Veuillez vérifier vos identifiants')</script>"; 
			}

		}
    $unControleur->setTable("user");

     //Vérification si le mail est déja dans la base, si oui afficher un pop up en js sinon laisser passer avec le insert
	if (isset($_POST['Inscription'])){

		$chaine=array("'", '"', "<", ">");
			$email=str_replace($chaine, "", $_POST["email"]);
		$chaine ="*"; 
			$where =array("email"=>$email);
			$unControleur->setTable ("user"); 
			$unUser = $unControleur->selectWhere($chaine, $where); 

			if (isset($unUser['email'])){
				$_SESSION['email'] = $unUser['email']; 
				//bienvenue en JS 
				echo "<script>alert ('Compte Existe Déjà')</script>";
			}
			else{
		$tab = array(
			"nom"=>$_POST["nom"], 
			"prenom"=>$_POST["prenom"], 
			"adresse"=>$_POST["adresse"],  
			"cp"=>$_POST["cp"],  
		    "ville"=>$_POST["ville"],  
		    "email"=>$_POST["email"],
		    "mdp"=>$_POST["mdp"],
			"tel"=>$_POST["tel"]
		);
        $unControleur->insert($tab);
	}

		// Ne pas oublier de mettre un trigger dans la base pour empecher d'inserer deux mail identique
		
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vue/authentif.css">
	<title>Index</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="inner-box" id="card">

			<div class="card-front">
				<h2>LOGIN</h2>
				<form method="post">
					<input type="email" name="email" class="input-box-log" placeholder="Votre Email" required>
					<input type="password" name="mdp" class="input-box-log" placeholder="Votre Mot De Passe" required>
					<button type="submit" name="SeConnecter" class="submit-btn">Valider</button>
					<input type="checkbox" name="checkbox"><span>Rappelez Moi</span>
				</form>
				<button type="button" class="btn" onclick="openInscription()">Devenir Client</button>
				<a href="">Mot De Passe Oublié ?</a>
			</div>
			<div class="card-back">
				<h2>Inscription</h2>
				<form method="post">
					<input type="text" name="nom" class="input-box" placeholder="Votre Nom" required>
					<input type="text" name="prenom" class="input-box" placeholder="Votre Prenom" required>
					<input type="text" name="adresse" class="input-box" placeholder="Votre Adresse" required>
					<input type="text" name="cp" class="input-box" placeholder="Votre Code Postale" required>
					<input type="text" name="ville" class="input-box" placeholder="Votre Ville" required>
					<input type="email" name="email" class="input-box" placeholder="Votre Email" required>
					<input type="password" name="mdp" class="input-box" placeholder="Votre Mot De Passe" required>
					<input type="text" name="tel" class="input-box" placeholder="Votre Téléphone" required>
					<button type="submit" class="submit-btn2" name="Inscription">Valider</button>
				</form>
				<button type="submit" class="btn2" onclick="openLogin()">Je Suis Déja Client</button>
			</div>
			
		</div>
		
	</div>
</div>



<script>
	var card = document.getElementById("card");
	function openInscription(){
		card.style.transform = "rotateY(-180deg)";
	}
	function openLogin(){
		card.style.transform = "rotateY(0deg)";
	}
</script>
</body>

</html>