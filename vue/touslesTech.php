
<?php
	$technicien =null; 
	$unControleur->setTable ("technicien");	
	$technicien = $unControleur->selectAll(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
	<title>SA-ROILLE</title>
</head>
<body>
	<center>
		<h1>TOUS LES TECHNICIENS</h1>
    </center>
       <section class='FlexContainer'>
            <div class="Entete">
            <div>ID</div>
            <div>NOM</div>
            <div>PRENOM</div>
            <div>ADRESSE</div>
            <div>CP</div>
            <div>VILLE</div>
            <div>EMAIL</div>
            <div>MDP</div>
            <div>TEL</div>
            <div>DIPLOME</div>
            <div>ACTION</div>
            </div>
             <?php
  		foreach($technicien as $untechnicien){
  			echo
  			"
            <div class='ContDonnee'>
            <form method='POST' >
            <div class='Donnee'>	
            <div>".$untechnicien['idtech']."</div>
            <div><input type='text' name='nom' value='".$untechnicien['idtech']."'></div>
            <div><input type='text' name='prenom' value='".$untechnicien['prenom']."'></div>
            <div><input type='text' name='adresse' value='".$untechnicien['adresse']."'></div>
            <div><input type='number' name='cp' value='".$untechnicien['cp']."'></div>
            <div><input type='text' name='ville' value='".$untechnicien['ville']."'></div>
            <div><input type='text' name='email' value='".$untechnicien['email']."'></div>
            <div><input type='text' name='mdp' value='".$untechnicien['mdp']."'></div>
            <div><input type='text' name='tel' value='".$untechnicien['tel']."'></div>
            <div><input type='text' name='tel' value='".$untechnicien['diplome']."'></div>
            <div class='action'>
            	<button type='submit' name='sup' class='sup'><i class='fas fa-trash'></i></button>
            	<button type='submit' name='modifier' class='modif'><i class='fas fa-pen'></i></button>
            </div>
            </div>
            </form> 
            </div>
            ";}?>

             <?php  
          if (isset($_POST['sup']))
       {
          $where =array("idtech"=>$untechnicien["idtech"]);
          $unControleur->delete($where); 
          header("Location: index.php?page=9");
       } 
      ?>
      
        </section>

        <style type="text/css">
     .FlexContainer {
    display: flex;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: center;
    align-content: center;
    width: 100%;
   background:linear-gradient(45deg,#466cfc,#ffb000);
    min-height: 100vh;
    overflow: auto;
    flex-direction: column;
}

.FlexContainer .Entete {
    width: 99%;
    height: 40px;
    margin: 5px;
     background:rgb(255 255 255 / 30%);
    backdrop-filter:blur(10px);
    box-shadow:20px 20px 40px -6px rgba(0,0,0,0.2);
    transition:all 0.2s ease-in-out;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.FlexContainer .Entete div{
	border: 1px solid grey;
	width: 30%;
	height: 100%;
	text-align: center;
	font-weight: bold;
}
.FlexContainer .ContDonnee {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
    
}
.FlexContainer .ContDonnee form{
width: 1895px;
display: flex;
justify-content: center;
align-items: center;
    
}
.FlexContainer .ContDonnee form input{
	width: 100%;
	height: 100%;
	background: transparent;
	border: none;
	text-align: center;
}
.FlexContainer .Donnee {
    width: 100%;
    height: 40px;
    margin: 5px;
     background:rgb(255 255 255 / 30%);
    backdrop-filter:blur(10px);
    box-shadow:20px 20px 40px -6px rgba(0,0,0,0.2);
    transition:all 0.2s ease-in-out;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.FlexContainer .Donnee div{
	border: 1px solid grey;
	width: 30%;
	height: 100%;
	text-align: center;
	font-weight: bold;
}
.FlexContainer .Donnee .action{
	display: flex;
	flex-direction: row;
	align-items: center;
	align-content: center;
	justify-content: space-evenly;
}
.FlexContainer .Donnee .action button{
	background: transparent;
	border: 1px solid #fff;
	border-radius: 5px;
}
.FlexContainer .Donnee .action button i{
	color: #fff;
}
.FlexContainer .Donnee .action .modif{
	background:#3498db;
}
.FlexContainer .Donnee .action .sup{
	background:#e74c3c;
}

        </style>
</body>
</html>