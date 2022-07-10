<?php
if (isset($_POST['SeConnecter']))
		{
			$chaine=array("'", '"', "<", ">");
			$pseudo=str_replace($chaine, "", $_POST["pseudo"]);
			$mdp=str_replace($chaine, "", $_POST["mdp"]);

			//vérification dans la base 
			$chaine ="*"; 
			$where =array("pseudo"=>$pseudo, "mdp"=>$mdp);
			$unControleur->setTable ("admin"); 
			$unAdmin = $unControleur->selectWhere($chaine, $where); 

			if (isset($unAdmin['pseudo'])){
				$_SESSION['pseudo'] = $unAdmin['pseudo']; 
				$_SESSION['mdp'] = $unAdmin['mdp'];
				//bienvenue en JS 
				header('Location: index.php?page= 4 ' );
			}else{

				echo "<script>alert ('Veuillez vérifier vos identifiants')</script>"; 
			}

		}
    $unControleur->setTable("admin");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vue/authentif.css">
	<title>ADMIN</title>
</head>
<body>
  <div class="container">
	<div class="card">
		<div class="inner-box" id="card">

			<div class="card-front">
				<h2>LOGIN ADMIN</h2>
				<form method="post">
					<input type="pseudo" name="pseudo" class="input-box-log" placeholder="Pseudo" required>
					<input type="password" name="mdp" class="input-box-log" placeholder=" Mot De Passe" required>
					<button type="submit" name="SeConnecter" class="submit-btn">Valider</button>
				</form>
				<a href="">Mot De Passe Oublié ?</a>
			</div>	
		</div>
		
	</div>
</div>
</body>
</html>