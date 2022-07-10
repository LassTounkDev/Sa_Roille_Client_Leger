<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vue/style/dashboard.css">
  <link rel="stylesheet" type="text/css" href="vue/profPerso.css">
    <script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SA-ROILLE</title>
</head>
<body>

<section class='ContainerHD'>



           <div class="container-nav">
     <img src="pictures/saroille.png">

<div class="admin"><h1> TECHNICIEN DASHBOARD</h1></div>


    <div class="navplus">
          <a href="index.php?page=16"><i class="fas fa-user"></i><br></a>
          <a href="index.php?page=3"><i class="fas fa-sign-in-alt"></i><br></a>
     </div>

</div>
<?php
	//vérification dans la base 
			$chaine ="*"; 
			$where =array("idtech"=>$_SESSION['iduser']);
			$unControleur->setTable ("technicien"); 
			$unTechnicien = $unControleur->selectWhere($chaine, $where); 
?>
</section>
<section class="ContainerProfile">
	<div class="iconProf">
		<i class="fas fa-user-tie"></i>
	</div>

	<div class="InfoProf">
		<form method="POST">
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value=<?php echo
				$unTechnicien["nom"]?> >
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom"  value=<?php echo
				$unTechnicien["prenom"]?>>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="adresse">Adresse</label>
				<input type="text" name="adresse" id="adresse"  value='<?php echo
				$unTechnicien["adresse"]?>'>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="cp">Code Postale</label>
				<input type="number" name="cp" id="cp"  value= <?php echo
				$unTechnicien["cp"]?>>
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="ville">Ville</label>
				<input type="text" name="ville" id="ville"  value=<?php echo
				$unTechnicien["ville"]?> >
				<i class="fas fa-pen"></i>
		</div>
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email"  value=<?php echo
				$unTechnicien["email"]?> >
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
				$unTechnicien["tel"]?>>
				<i class="fas fa-pen"></i>
		</div>
		<div>
				<label for="tel">Diplôme</label>
				<input type="text" name="tel" id="tel"  value=<?php echo
				$unTechnicien["diplome"]?>>
				<i class="fas fa-pen"></i>
		</div>

		 <div><button>Valider</button></div>
		</form>
	</div>
	
</section>
</body>
</html>