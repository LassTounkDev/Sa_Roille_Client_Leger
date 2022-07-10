
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vue/insertVehicule.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SA-ROILLE</title>
</head>
<body>
      <center>
    <h1>AJOUT DE NOUVEAU OUTILS</h1>
  <form method="POST">
     <table class="table table-striped">
    <thead>
      <tr>
        <th>NOM</th>
        <th>MARQUE</th>
        <th>POIDS</th>
        <th>TAILLE</th>
        <th>PRIX</th>
        <th>URL</th>
      </tr>
    </thead>
    <tbody>
     <tr>
       <td><input type="text" name="out_nom" id="out_nom" class="form-control"></td>
       <td><input type="text" name="out_marque" id="out_marque" class="form-control"></td>
       <td><input type="text" name="out_poids" id="out_poids" class="form-control"></td>
       <td><input type="text" name="out_taille" id="out_taille" class="form-control"></td>
       <td><input type="text" name="out_prix" id="out_prix" class="form-control"></td>
       <td><input type="text" name="out_lien_img" id="out_lien_img" class="form-control"></td>
     </tr>
    </tbody>
  </table>
   <div class="action">
            <button type="submit" name="ValiderOutils">Valider</button>
            <button type="reset">Annuler</button>
          </div>  
  </form>
  </center>
<?php
        
$unModele = new Modele("localhost", "sa_roille", "root", "");
        if (isset($_POST['ValiderOutils'])) {
  $tab = array( 
    "out_nom"=>$_POST['out_nom'],
    "out_marque"=>$_POST['out_marque'],
    "out_poids"=>$_POST['out_poids'],
    "out_taille"=>$_POST['out_taille'],
    "out_prix"=>$_POST['out_prix'],
    "out_lien_img"=>$_POST['out_lien_img']
  );
  // Appel de la procédure
  $unModele->appelProc("insertOutils", $tab);
}
?>
</body>
</html>
















