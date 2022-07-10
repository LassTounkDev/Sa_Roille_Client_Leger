<?php
if (isset($_POST['SeConnecter']))
		{
			$chaine=array("'", '"', "<", ">");
			$email=str_replace($chaine, "", $_POST["email"]);
			$mdp=str_replace($chaine, "", $_POST["mdp"]);

			//vérification dans la base 
			$chaine ="*"; 
			$where =array("email"=>$email, "mdp"=>$mdp);
			$unControleur->setTable ("technicien"); 
			$unTechnicien = $unControleur->selectWhere($chaine, $where); 

			if (isset($unTechnicien['email'])){
				$_SESSION['email'] = $unTechnicien['email']; 
				$_SESSION['mdp'] = $unTechnicien['mdp'];
				//bienvenue en JS 
				header('Location: index.php?page= 13 ' );
			}else{

				echo "<script>alert ('Veuillez vérifier vos identifiants')</script>"; 
			}

		}
    $unControleur->setTable("technicien");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vue/authentif.css">
	<title>technicien</title>
</head>
<body>
  <div class="container">
	<div class="card">
		<div class="inner-box" id="card">

			<div class="card-front">
				<h2>LOGIN TECHNICIEN</h2>
				<form method="post">
					<input type="email" name="email" class="input-box-log" placeholder="Pseudo" required>
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