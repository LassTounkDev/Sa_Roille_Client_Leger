
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
    <h1>AJOUT DE NOUVEAU TECHNICIEN</h1>
  <form method="POST">
     <table class="table table-striped">
    <thead>
      <tr> 
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ADRESSE</th>
        <th>CODE POSTALE</th>
        <th>VILLE</th>
        <th>EMAIL</th>
        <th>MOT DE PASSE</th>
        <th>TEL</th>
        <th>DIPLOME</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      
       <td><input type="text" name="nom" id="nom" class="form-control"></td>
       <td><input type="text" name="prenom" id="prenom" class="form-control"></td>
       <td><input type="text" name="adresse" id="adresse" class="form-control"></td>
       <td><input type="text" name="cp" id="cp" class="form-control"></td>
       <td><input type="text" name="ville" id="ville" class="form-control"></td>
        <td><input type="text" name="email" id="email" class="form-control"></td>
       <td><input type="text" name="mdp" id="mdp" class="form-control"></td>
       <td><input type="text" name="tel" id="tel" class="form-control"></td>
       <td><input type="text" name="diplome" id="diplome" class="form-control"></td>
     </tr>
    </tbody>
  </table>
   <div class="action">
            <button type="submit" name="ValiderTech">Valider</button>
            <button type="reset">Annuler</button>
          </div>  
  </form>
  </center>


<?php
$unModele = new Modele("localhost", "sa_roille", "root", "");
        if (isset($_POST['ValiderTech'])) {
  $tab = array(

    "nom"=>$_POST['nom'],
    "prenom"=>$_POST['prenom'],
    "adresse"=>$_POST['adresse'],
    "cp"=>$_POST['cp'],
    "ville"=>$_POST['ville'],
    "email"=>$_POST['email'],
    "mdp"=>$_POST['mdp'],
    "tel"=>$_POST['tel'],
    "diplome"=>$_POST['diplome']
  );
  // Appel de la procédure
  $unModele->appelProc("insertTech", $tab);
}
?>

</body>
</html>