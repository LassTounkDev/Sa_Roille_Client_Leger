
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vue/insertion.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SA-ROILLE</title>
</head>
<body>
      <center>
    <h1>AJOUT DE NOUVEAU VEHICULE</h1>
<form method="POST">
     <table class="table table-striped">
    <thead>
      <tr> 
        <th>NOM</th>
        <th>MARQUE</th>
        <th>POIDS</th>
        <th>TAILLE</th>
        <th>PRIX</th>
        <th>QUANTITE</th>
        <th>URL</th>
        <th>IMMATRICULE</th>
        <th>CAPACITÉ</th>
        <th>FONCTION</th>
      </tr>
    </thead>
    <tbody>
     <tr>
       <td><input type="text" name="nom" id="nom" class="form-control"></td>
       <td><input type="text" name="marque" id="marque" class="form-control"></td>
       <td><input type="float" name="poids" id="poids" class="form-control"></td>
       <td><input type="float" name="taille" id="taille" class="form-control"></td>
       <td><input type="float" name="prix" id="prix" class="form-control"></td>
       <td><input type="number" name="quantite" id="quantite" class="form-control"></td>
       <td><input type="text" name="lien_img" id="lien_img" class="form-control"></td>
       <td><input type="text" name="immatricule" id="immatricule" class="form-control"></td>
       <td><input type="float" name="capacite" id="capacite" class="form-control"></td>
       <td><input type="text" name="fonction" id="fonction" class="form-control"></td>
     </tr>
    </tbody>
  </table>
   <div class="action">
            <button type="submit" name="ValiderVehicule">Valider</button>
            <button type="reset">Annuler</button>
          </div>  
  </form>
  </center>


<?php
        
$unModele = new Modele("localhost", "sa_roille", "root", "");

         if (isset($_POST['ValiderVehicule'])) {
  $tab = array( 

    "nom"=>$_POST['nom'],
    "marque"=>$_POST['marque'],
    "poids"=>$_POST['poids'],
    "taille"=>$_POST['taille'],
    "prix"=>$_POST['prix'],
    "quantite"=>$_POST['quantite'],
    "lien_img"=>$_POST['lien_img'],
    "immatricule"=>$_POST['immatricule'],
    "capacite"=>$_POST['capacite'],
    "fonction"=>$_POST['fonction'] );
  // Appel de la procédure
  $unModele->appelProc("insertvehicule", $tab);
 }
?>

</body>
</html>
